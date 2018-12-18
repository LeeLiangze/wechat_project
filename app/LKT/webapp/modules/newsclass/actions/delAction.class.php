<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');

class delAction extends Action {

    public function getDefaultView() {
        $db = DBAction::getInstance();
        $request = $this->getContext()->getRequest();
        // 获取分类id
        $cat_id = intval($request->getParameter('cat_id'));
        // 根据分类id,删除这条数据
        $sql = "delete from lkt_news_class where cat_id = '$cat_id'";
        $db->delete($sql);

        header("Content-type:text/html;charset=utf-8");
        echo "<script type='text/javascript'>" .
            "alert('删除成功！');" .
            "location.href='index.php?module=newsclass';</script>";
        return;
    }

    public function execute(){
        return $this->getDefaultView();
    }

    public function getRequestMethods(){
        return Request :: NONE;
    }
}
?>