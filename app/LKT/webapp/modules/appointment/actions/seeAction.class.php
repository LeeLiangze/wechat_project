<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/ShowPager.class.php');
require_once(MO_LIB_DIR . '/Tools.class.php');

class seeAction extends Action {

    public function getDefaultView() {
        $db = DBAction::getInstance();
        $request = $this->getContext()->getRequest();
        $id = $request->getParameter('id'); 
        
        $sql = "select * from lkt_experience where id = '$id' ";
        $r = $db->select($sql);
        $name = $r[0]->name;
        
        $request->setAttribute("name",$name);
        $request->setAttribute("list",$r[0]);

        return View :: INPUT;
    }

    public function execute() {

    }

    public function getRequestMethods(){
        return Request :: NONE;
    }
}

?>