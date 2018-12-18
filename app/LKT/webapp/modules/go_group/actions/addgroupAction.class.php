<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/ShowPager.class.php');
require_once(MO_LIB_DIR . '/Tools.class.php');

class addgroupAction extends Action {

    public function getDefaultView() {
      $db = DBAction::getInstance();
      $request = $this->getContext()->getRequest();
        return View :: INPUT;
    }

    public function execute() {
       $db = DBAction::getInstance();
       $request = $this->getContext()->getRequest();
       
       
       return View :: INPUT;
    }

    public function getRequestMethods(){
        return Request :: POST;
    }

}

?>