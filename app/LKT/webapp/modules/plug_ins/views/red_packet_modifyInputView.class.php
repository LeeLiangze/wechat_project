<?php
class red_packet_modifyInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("re",$request->getAttribute("re"));
		$this->setAttribute("re02",$request->getAttribute("re02"));
		$this->setAttribute("id",$request->getAttribute("id"));
		$this->setTemplate("red_packet_modify.tpl");
    }
}
?>
