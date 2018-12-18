﻿<?php
class seeInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
        $this->setAttribute("id",$request->getAttribute("id"));
        $this->setAttribute("product_title",$request->getAttribute("product_title"));
        $this->setAttribute("url",$request->getAttribute("url"));
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
        $this->setAttribute("attribute_key",$request->getAttribute("attribute_key"));
        $this->setAttribute("attribute_value",$request->getAttribute("attribute_value"));
		$this->setTemplate("see.tpl");
    }
}
?>
