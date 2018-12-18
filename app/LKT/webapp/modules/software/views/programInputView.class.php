<?php



class programInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("list",$request->getAttribute("list"));

		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));

		$this->setAttribute("down_file",$request->getAttribute("upload_file"));

        $this->setTemplate("program.tpl");

    }

}

?>