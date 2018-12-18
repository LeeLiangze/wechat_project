<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("parameters",$request->getAttribute("parameters"));
		$this->setAttribute("id11",$request->getAttribute("id11"));
		$this->setAttribute("pages_show",$request->getAttribute("pages_show"));
		$this->setAttribute("pagesize",$request->getAttribute("pagesize"));

		$this->setTemplate("index.tpl");
    }
}
?>
