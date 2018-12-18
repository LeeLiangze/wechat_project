<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("status",$request->getAttribute("status"));
		$this->setAttribute("is_show",$request->getAttribute("is_show"));
		$this->setTemplate("index.tpl");
    }
}
?>
