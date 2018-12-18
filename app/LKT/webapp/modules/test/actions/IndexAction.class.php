<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/SysConst.class.php');
class IndexAction extends Action {

	public function getDefaultView() {

		$request = $this->getContext()->getRequest();	
		$db = DBAction::getInstance();
        
		$sql_dp = "select id,type  from test";
		$r = $db->select($sql_dp);

		$data =  json_encode($r);
var_dump($data);


		$request->setAttribute('data',$data);

		return View :: INPUT;
	}

	public function execute(){

		$request = $this->getContext()->getRequest();	
		$db = DBAction::getInstance();
        
		$sql_dp = "select id,type  from test";
		$r = $db->select($sql_dp);

		$data =  json_encode($r);
var_dump($data);

		return $data;
		
	}

	public function getRequestMethods(){
		return Request :: NONE;
	}

}

?>