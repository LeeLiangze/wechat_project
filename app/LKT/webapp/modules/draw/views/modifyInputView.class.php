<?php



class modifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("mm",$request->getAttribute("mm"));

		$this->setAttribute("res",$request->getAttribute("res"));

		$this->setTemplate("modify.tpl");

    }

}

?>