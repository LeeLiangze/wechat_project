﻿<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
        $this->setAttribute("cid",$request->getAttribute("cid"));
        $this->setAttribute("list",$request->getAttribute("list"));
        $this->setAttribute("level",$request->getAttribute("level"));
        $this->setAttribute("level_xs",$request->getAttribute("level_xs"));
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
		// $this->setAttribute("pages",$request->getAttribute("pages"));
		$this->setAttribute("pages_show",$request->getAttribute("pages_show"));
		$this->setTemplate("index.tpl");
    }
}
?>
