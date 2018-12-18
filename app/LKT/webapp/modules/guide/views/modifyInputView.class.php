<?php



class modifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

		$this->setAttribute('id',$request->getAttribute('id'));

        $this->setAttribute('uploadImg',$request->getAttribute('uploadImg'));

        $this->setAttribute('image',$request->getAttribute('image'));

        $this->setAttribute('type',$request->getAttribute('type'));

        $this->setAttribute('sort',$request->getAttribute('sort'));

			 

		$this->setTemplate("modify.tpl");

    }

}

?>