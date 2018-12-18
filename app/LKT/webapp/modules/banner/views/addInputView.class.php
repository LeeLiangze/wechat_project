<?php





class addInputView extends SmartyView {



	



    public function execute() {



		$request = $this->getContext()->getRequest();



		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));

       $this->setAttribute('products',$request->getAttribute('products'));	

        $this->setTemplate("add.tpl");



    }



}



?>