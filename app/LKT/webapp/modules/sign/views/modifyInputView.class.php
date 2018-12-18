<?php



class modifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));

		$this->setAttribute("id",$request->getAttribute("id"));

		$this->setAttribute("image",$request->getAttribute("image"));

		$this->setAttribute("starttime",$request->getAttribute("starttime"));

		$this->setAttribute("endtime",$request->getAttribute("endtime"));

        $this->setAttribute("detail",$request->getAttribute("detail"));
        $this->setAttribute("status",$request->getAttribute("status"));

		$this->setTemplate("modify.tpl");

    }

}

?>