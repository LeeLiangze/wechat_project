<?php



class addgroupInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		

        $this->setTemplate("addgroup.tpl");

    }

}

?>