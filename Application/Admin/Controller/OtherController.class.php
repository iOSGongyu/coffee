<?php

namespace Admin\Controller;

use Think\Controller;

class OtherController extends CommonController {
    public function error500(){

        $this->display();
    }
    //日历页面
    public function calendar(){
        if(checkLogin()){
            $assignArr = array(
                "calendar" => 1,//是否选中
            );
            $this->assign($assignArr);
            $this->display();
        }
    }
    //邀请码页面
    public function invitationCode(){
        if(checkLogin()){
            $assignArr = array(
                "invitationCode" => 1,//是否选中
            );
            $this->assign($assignArr);
            $this->display();
        }


    }



}
