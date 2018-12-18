<?php



class setproInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("arr",$request->getAttribute("arr"));

		//$this->setAttribute("set",$request->getAttribute("set"));	 

		$this->setTemplate("setpro.tpl");

    }

}

?>