<?php



class viewInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

        $this->setAttribute('user',$request->getAttribute('user'));
	 

		$this->setTemplate("view.tpl");

    }

}

?>