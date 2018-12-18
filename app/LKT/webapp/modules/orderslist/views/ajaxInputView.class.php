<?php


class ajaxInputView extends SmartyView{
    public function execute(){
		$request = $this->getContext()->getRequest();
		
		

		$this->setTemplate('modify.tpl');

    }
}
?>