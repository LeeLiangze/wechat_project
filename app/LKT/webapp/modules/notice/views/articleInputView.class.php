<?php



class articleInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
		$this->setAttribute("res_notice",$request->getAttribute("res_notice"));
	

		$this->setTemplate("article.tpl");

    }

}

?>