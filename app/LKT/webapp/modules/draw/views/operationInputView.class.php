<?php


class operationInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("name",$request->getAttribute("name"));
		$this->setAttribute("spelling_number",$request->getAttribute("spelling_number"));
		$this->setAttribute("r05",$request->getAttribute("r05"));
		$this->setTemplate("operation.tpl");
    }
}
?>
