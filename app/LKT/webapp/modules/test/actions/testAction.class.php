<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/SysConst.class.php');
class testAction extends Action {

	public function getDefaultView() {

		$request = $this->getContext()->getRequest();	
		$db = DBAction::getInstance();
        
		$sql_dp = "select *  from test";
		$r = $db->select($sql_dp);

		$data =  json_encode($r);
var_dump($data);
		$request->setAttribute('data',$data);

		return View :: INPUT;
	}

	public function execute(){
		
	}

	public function getRequestMethods(){
		return Request :: NONE;
	}

}

?>