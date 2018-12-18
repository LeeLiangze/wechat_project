<?php




class template_messageInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("notice",$request->getAttribute("notice"));

		$this->setTemplate("template_message.tpl");

    }

}

?>