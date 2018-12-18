<?php


class setscoreInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("bili",$request->getAttribute("bili"));
		$this->setAttribute("res",$request->getAttribute("res"));
		$this->setTemplate("setscore.tpl");
    }
}
?>
