<?php


class listInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("user_id",$request->getAttribute("user_id"));
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setTemplate("list.tpl");
    }
}
?>
