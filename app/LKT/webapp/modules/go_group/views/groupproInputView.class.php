<?php



class groupproInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("status",$request->getAttribute("status"));
        $this->setAttribute("len",$request->getAttribute("len"));
        $this->setTemplate("grouppro.tpl");

    }

}

?>