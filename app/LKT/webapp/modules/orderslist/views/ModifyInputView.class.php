<?php



class ModifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

        $this->setAttribute('class',$request->getAttribute('class'));

        



			 

		$this->setTemplate("modify.tpl");

    }

}

?>