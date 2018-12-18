<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("re",$request->getAttribute("re"));
		$this->setTemplate("index.tpl");
    }
}
?>
