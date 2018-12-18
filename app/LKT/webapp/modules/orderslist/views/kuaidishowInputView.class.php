<?php



class kuaidishowInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("res",$request->getAttribute("res"));

		// $this->setAttribute("id",$request->getAttribute("id"));

		// $this->setAttribute("otype",$request->getAttribute("otype"));

        $this->setTemplate("kuaidishow.tpl");

    }

}

?>