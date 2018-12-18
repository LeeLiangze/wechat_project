<?php



class jifenInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("r",$request->getAttribute("r"));
        $this->setTemplate("jifen.tpl");

    }

}

?>