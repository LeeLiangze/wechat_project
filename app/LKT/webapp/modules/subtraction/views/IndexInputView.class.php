<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();

        $this->setAttribute("status",$request->getAttribute("status"));
		$this->setAttribute("man_money",$request->getAttribute("man_money"));
        $this->setAttribute("region",$request->getAttribute("region"));
        $this->setAttribute("subtraction",$request->getAttribute("subtraction"));
        $this->setAttribute("num",$request->getAttribute("num"));
        $this->setTemplate("index.tpl");

    }
}
?>
