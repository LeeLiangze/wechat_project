<?php



class addsignInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("express",$request->getAttribute("express"));

		$this->setAttribute("id",$request->getAttribute("id"));

		$this->setAttribute("sNo",$request->getAttribute("sNo"));

		$this->setAttribute("otype",$request->getAttribute("otype"));

        $this->setTemplate("addsign.tpl");

    }

}

?>