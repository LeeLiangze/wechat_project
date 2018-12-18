<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();		
		$this->setAttribute('data',$request->getAttribute('data'));
        $this->setTemplate("index.tpl");
    }
}
?>