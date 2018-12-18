<?php


class viewInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("Article_title",$request->getAttribute("Article_title"));
		$this->setAttribute("total",$request->getAttribute("total"));
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setTemplate("view.tpl");
    }
}
?>
