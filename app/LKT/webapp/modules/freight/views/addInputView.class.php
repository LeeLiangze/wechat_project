<?php



class addInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
		$this->setAttribute("uploadImg",$request->getAttribute("uploadImg"));
		$this->setAttribute("ctype",$request->getAttribute("ctype"));
        $this->setAttribute("brand",$request->getAttribute("brand"));
        $this->setAttribute("rew",$request->getAttribute("rew"));
        $this->setAttribute("list",$request->getAttribute("list"));
        $this->setTemplate("add.tpl");
    }
}
?>