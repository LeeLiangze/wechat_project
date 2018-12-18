<?php


class numInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("product_title",$request->getAttribute("product_title"));
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
        $this->setAttribute("list",$request->getAttribute("list"));
        $this->setAttribute("pages_show",$request->getAttribute("pages_show"));
		$this->setTemplate("num.tpl");
    }
}
?>
