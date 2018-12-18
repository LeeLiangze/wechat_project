﻿<?php


class IndexInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
        $this->setAttribute("name",$request->getAttribute("name"));
        $this->setAttribute("Bank_card_number",$request->getAttribute("Bank_card_number"));
        $this->setAttribute("Cardholder",$request->getAttribute("Cardholder"));
        $this->setAttribute("list",$request->getAttribute("list"));
        $this->setAttribute("pages_show",$request->getAttribute("pages_show"));
        $this->setAttribute("pagesize",$request->getAttribute("pagesize"));
		$pageto = $request->getAttribute('pageto');
		if($pageto != ''){
			$r = rand();
			header("Content-type: application/msexcel;charset=utf-8");
			header("Content-Disposition: attachment;filename=userlist-$r.xls");
			$this->setTemplate("excel.tpl");
		} else {
			$this->setTemplate("index.tpl");
		}
    }
}
?>
