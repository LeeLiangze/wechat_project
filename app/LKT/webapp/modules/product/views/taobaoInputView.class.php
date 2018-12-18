<?php


class taobaoInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("ctype",$request->getAttribute("ctype"));
		$this->setTemplate("taobao.tpl");
    }
}
?>
