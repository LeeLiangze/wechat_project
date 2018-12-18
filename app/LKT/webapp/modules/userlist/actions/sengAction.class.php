<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');
require_once(MO_LIB_DIR . '/ShowPager.class.php');
require_once(MO_LIB_DIR . '/Tools.class.php');

class sengAction extends Action {

  public function getDefaultView() {
    $db = DBAction::getInstance();
    $request = $this->getContext()->getRequest();
    $recipientid =$request->getParameter('id') ;
    $request->setAttribute("recipientid",$recipientid);
    return View :: INPUT;
  }

  public function execute() {

      return $this->getDefaultView();

  }

  public function getRequestMethods(){
    return Request :: POST;
  }

}

?>