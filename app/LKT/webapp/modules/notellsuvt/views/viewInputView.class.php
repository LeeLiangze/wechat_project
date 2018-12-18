<?php



class viewInputView extends SmartyView {

    public function execute() {

		$request = $this->getContext()->getRequest();

//      $this->setAttribute('id',$request->getAttribute('id'));

        $this->setAttribute('user',$request->getAttribute('user'));

//		$this->setAttribute('Article_imgurl',$request->getAttribute('Article_imgurl'));

//      $this->setAttribute('sort',$request->getAttribute('sort'));

//      $this->setAttribute('content',$request->getAttribute('content'));		 

		$this->setTemplate("view.tpl");

    }

}

?>