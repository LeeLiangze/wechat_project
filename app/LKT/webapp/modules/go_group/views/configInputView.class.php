<?php



class configInputView extends SmartyView {

	

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute("arr",$request->getAttribute("arr"));

		$this->setAttribute("type",$request->getAttribute("type"));

        $this->setTemplate("config.tpl");

    }

}

?>