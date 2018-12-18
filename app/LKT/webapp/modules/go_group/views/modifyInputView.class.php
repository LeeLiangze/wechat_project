<?php


class modifyInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("status",$request->getAttribute("status"));
		$this->setTemplate("modify.tpl");
    }
}
?>
