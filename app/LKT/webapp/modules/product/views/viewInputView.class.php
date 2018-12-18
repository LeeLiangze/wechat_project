<?php


class viewInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("news_title",$request->getAttribute("news_title"));
		$this->setAttribute("total",$request->getAttribute("total"));
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setTemplate("view.tpl");
    }
}
?>
