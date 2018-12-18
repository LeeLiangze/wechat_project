<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');

class plugsAction extends Plug {

    public function getDefaultView() {

        echo "getDefaultView------------";
    }

    public function execute(){
        echo "execute-------------";
    }

    public function getRequestMethods(){
        return Request :: POST;
    }

    public function pay()
    {
        echo "string";
    }

}
?>