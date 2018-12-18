<?php


class AddInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		
		$this->setTemplate("add.tpl");
    }
}
?>
