<?php



class IndexInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));

		$this->setAttribute("upload_file",$request->getAttribute("upload_file"));

		$this->setAttribute("list",$request->getAttribute("list"));

		$this->setTemplate("index.tpl");

    }

}

?>

