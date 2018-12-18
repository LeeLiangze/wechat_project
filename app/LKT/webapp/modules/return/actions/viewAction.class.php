<?php



require_once(MO_LIB_DIR . '/DBAction.class.php');



class viewAction extends Action {



	public function getDefaultView() {

        $db = DBAction::getInstance();

        $request = $this->getContext()->getRequest();

        // 接收信息

        $id = intval($request->getParameter("id")); // 产品id

        // 根据产品id，查询产品产品信息

        $sql = "select * from lkt_order_details where id = '$id'";

        $r = $db->select($sql);

       

        $request->setAttribute("list",$r);



        return View :: INPUT;

	}



	public function execute(){

		$db = DBAction::getInstance();

		$request = $this->getContext()->getRequest();

        

		return;

	}



	public function getRequestMethods(){

		return Request :: POST;

	}



}



?>