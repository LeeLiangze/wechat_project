<?php



class addsignInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("res",$request->getAttribute("res"));

        $this->setTemplate("addsign.tpl");

    }

}

?>