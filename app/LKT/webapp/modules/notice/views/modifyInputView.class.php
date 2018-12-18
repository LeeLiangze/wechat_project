<?php



class modifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));

		$this->setAttribute("id",$request->getAttribute("id"));

		$this->setAttribute("image",$request->getAttribute("image"));

		$this->setAttribute("name",$request->getAttribute("name"));

		$this->setAttribute("detail",$request->getAttribute("detail"));

		$this->setTemplate("modify.tpl");

    }

}

?>