<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
		$this->setTemplate("index.tpl");
    }
}
?>
