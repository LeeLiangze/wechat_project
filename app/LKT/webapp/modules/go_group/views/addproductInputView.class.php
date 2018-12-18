<?php



class addproductInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("arr",$request->getAttribute("arr"));
        $this->setAttribute("title",$request->getAttribute("title"));
		 	 
		$this->setAttribute("class",$request->getAttribute("class")); 

		$this->setTemplate("addproduct.tpl");

    }

}

?>