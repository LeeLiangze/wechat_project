<?php



class addInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("ctype",$request->getAttribute("ctype"));

		$this->setAttribute("ops",$request->getAttribute("ops"));

        $this->setTemplate("add.tpl");

    }

}

?>