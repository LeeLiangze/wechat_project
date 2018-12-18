<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/ShowPager.class.php');
require_once(MO_LIB_DIR . '/Tools.class.php');

class IndexAction extends Action {

    public function getDefaultView() {
        $db = DBAction::getInstance();
        $request = $this->getContext()->getRequest();
        $sql = 'select * from lkt_hotkeywords';
        $res = $db -> selectarray($sql);
        
        $request -> setAttribute("res",$res);
        return View :: INPUT;
    }
    

    public function execute() {
        
    }

    public function getRequestMethods(){
        return Request :: NONE;
    }

}

?>