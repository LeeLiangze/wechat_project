<?php



class modifyInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

        $this->setAttribute('cat_id',$request->getAttribute('cat_id'));

        $this->setAttribute('cat_name', $request->getAttribute('cat_name'));

        $this->setAttribute('sort', $request->getAttribute('sort'));



		$this->setTemplate("modify.tpl");

    }

}

?>