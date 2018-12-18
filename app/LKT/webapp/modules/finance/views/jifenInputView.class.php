<?php


class jifenInputView extends SmartyView {
    public function execute() {
		$request = $this->getContext()->getRequest();
        $this->setAttribute("user_name",$request->getAttribute("user_name"));
        $this->setAttribute("mobile",$request->getAttribute("mobile"));
        $this->setAttribute("type",$request->getAttribute("type"));
		$this->setAttribute("list",$request->getAttribute("list"));
		$this->setAttribute("starttime",$request->getAttribute("starttime"));
		$this->setAttribute("group_end_time",$request->getAttribute("group_end_time"));
        $this->setAttribute("pages_show",$request->getAttribute("pages_show"));
        $this->setAttribute("pagesize",$request->getAttribute("pagesize"));
        $pageto = $request->getAttribute('pageto');
		if($pageto != ''){
			$r = rand();
			header("Content-type: application/msexcel;charset=utf-8");
			header("Content-Disposition: attachment;filename=userlist-$r.xls");
			$this->setTemplate("excel_jifen.tpl");
		} else {
			$this->setTemplate('jifen.tpl');
		}
    }
}
?>
