<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends CommonController {

    public function index() {
        if(checkLogin()){
            $assignArr = array(
                "leftSadebarActive" => 1,//是否选中
            );
            $this->assign($assignArr);
            $this->display();
        }
    }
    public function login(){

        $this->display();
    }
    public function userAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftUserManager" => 1,//是否选中
                "leftUserAdd" => 1,//新增用户是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
            $this->assign($assignArr);
            $this->display();
            }
        }
    }
    public function userList(){
        if(checkLogin()){
            $assignArr = array(
                "leftUserManager" => 1,//是否选中
                "leftUserList" => 1,//左侧用户列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
            $this->assign($assignArr);
            $this->display();
            }
        }
    }
}
