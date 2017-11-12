<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends CommonController {

    public function index() {

        $this->display();
    }
    public function login(){
        $key = '$maiclub$';
        $user = I('get.user');
        $passwd = md5($key.I('get.passwd'));
        $User = M("admin"); // 实例化User对象
        $where['user']=$user;
        $where['passwd']=$passwd;
        $rs =  $User->where($where)->find();
        if($rs){
            echo 1;
            session('uid',$rs['id']);
            session('role',$rs['role']);
            session('uname',$rs['user']);
        }else{
            echo 0;
        }
    }
    public function error404() {
        $this->assign('nopage', L("nopage"));
        $this->assign('jumpWords', L("merchant_detail_jump_words", array("jumpurl" => __APP__ . "/" . LANG_SET)));
        $this->error(L("merchants_no"));
    }

    public function logout() {
        session("uid", null);
        session("uname", null);
        $uid = session('uid');
        if(empty($uid)){
            echo 1;
        }else{
            echo 0;
        }
    }
}
