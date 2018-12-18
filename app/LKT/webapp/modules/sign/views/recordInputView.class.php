<?php


class recordInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
        $this->setAttribute("source",$request->getAttribute("source"));
        $this->setAttribute("name",$request->getAttribute("name"));
        $this->setAttribute("tel",$request->getAttribute("tel"));
        $this->setAttribute("list",$request->getAttribute("list"));
        $this->setAttribute("pages_show",$request->getAttribute("pages_show"));
        $this->setAttribute("pagesize",$request->getAttribute("pagesize"));
        $this->setTemplate("record.tpl");
    }
}
?>
