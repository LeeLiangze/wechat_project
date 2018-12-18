<?php


class DelInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("sel",$request->getAttribute("sel"));
		$this->setAttribute("id",$request->getAttribute("id"));
		$this->setTemplate("index.tpl");
    }
}
?>
