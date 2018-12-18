<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');

class gethotAction extends Action {

    public function getDefaultView() {
    	
       
    }

    public function execute(){
        $db = DBAction::getInstance();
        $request = $this->getContext()->getRequest();
        $sql = 'select keyword from lkt_hotkeywords';
        $res = $db -> selectarray($sql);
        foreach ($res as $k => $v) {
            $res[$k] = $v['keyword'];
        }
        echo json_encode($res);exit();
    }

    public function getRequestMethods(){
        return Request :: POST;
    }

}

?>