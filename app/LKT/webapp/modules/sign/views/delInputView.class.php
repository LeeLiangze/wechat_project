<?php



class delInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		

        $this->setTemplate("index.tpl");

    }

}

?>