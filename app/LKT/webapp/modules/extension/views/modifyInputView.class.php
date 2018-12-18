<?php


class modifyInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
    $this->setAttribute('id',$request->getAttribute('id'));
    $this->setAttribute('res',$request->getAttribute('res'));
    $this->setAttribute('data',$request->getAttribute('data'));
    $this->setAttribute('uploadImg',$request->getAttribute('uploadImg'));
    $this->setAttribute('img',$request->getAttribute('img'));
    $this->setTemplate("modify.tpl");
    }
}
?>