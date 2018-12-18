<?php


require_once(MO_LIB_DIR . '/DBAction.class.php');

class enableAction extends Action {

    public function getDefaultView() {
        $db = DBAction::getInstance();
        $request = $this->getContext()->getRequest();
        // 接收信息
        $id = intval($request->getParameter('id')); // id
        $sql = "update lkt_background_color set status = 0 ";
        $r = $db->update($sql);
        $sql = "update lkt_background_color set status = 1 where id = '$id'";
        $r = $db->update($sql);
        if($r == 1){
            header("Content-type:text/html;charset=utf-8");
            echo "<script type='text/javascript'>" .
                "alert('启用成功！');" .
                "location.href='index.php?module=bgcolor';</script>";
            return;
        }else{
            header("Content-type:text/html;charset=utf-8");
            echo "<script type='text/javascript'>" .
                "alert('启用失败！');" .
                "location.href='index.php?module=bgcolor';</script>";
            return;
        }
    }

    public function execute(){
        return $this->getDefaultView();
    }


    public function getRequestMethods(){
        return Request :: NONE;
    }

}

?>