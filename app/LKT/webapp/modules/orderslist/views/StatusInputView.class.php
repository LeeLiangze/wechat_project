<?php


class StatusInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("detail",$request->getAttribute("detail"));
		$this->setAttribute("data",$request->getAttribute("data"));
        $this->setTemplate("detail.tpl");
    }
}
?>
