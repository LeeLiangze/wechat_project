<?php



class sengInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("recipientid",$request->getAttribute("recipientid"));

        $this->setTemplate("seng.tpl");

    }

}

?>