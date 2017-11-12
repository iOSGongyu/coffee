<?php

namespace Admin\Controller;

use Think\Controller;

class WebController extends CommonController {
    //网站管理中心 添加管理员
    public function userAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminUserAdd" => 1,//新增用户是否选中
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
    /**
     *网站管理中心 管理员列表
     *
     */
    public function userList(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminUserList" => 1,//左侧用户列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $adminModel = M("admin");
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
//                var_dump($search);

                if($search==''){
                $count = $adminModel->table('sucai_brand b,sucai_union u')->where('b.unionid = u.id')->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $adminModel->create();
                $data3 =  $adminModel->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3 =  $adminModel->where("user like '%{$search}%' || roleName like '%{$search}%'")->limit($Page->firstRow.','.$Page->listRows)->select();
                }
                $this->assign('adminUserList',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
    /**
     *网站管理中心 管理员修改
     *
     */
    public function userUpdate(){
        $id=I('get.id');
        $admin=M('admin');
        $data=$admin->where("id={$id}")->select();
        $this->assign("data",$data[0]);
        $this->display();
    }



    /**
     *网站管理中心 Seo网站优化
     *
     */
    public function seo(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminUserList" => 1,//左侧用户列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
            $adminModel = M("seo");
            $adminUserList =  $adminModel->select();
            $this->assign("adminUserList",$adminUserList);
            $this->assign($assignArr);
            $this->display();
            }
        }
    }
    /**
     *网站管理中心 留言列表
     *
     */
    public function messageLists(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminMessageList" => 1,//左侧用户列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $message=M('message');
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
//                var_dump($search);

                if($search==''){
                $count = $message->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $message->create();
                $data3=$message->order('createTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

                }else{
                    $data3=$message->where("name like '%{$search}%' || telephone like '%{$search}%' || email like '%{$search}%' || details like '%{$search}%'")->order('createTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

                }

                $this->assign('messageLists',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }
    }

    //修改
    public function messageUpdate(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $message=M('message');
            $id=I('get.id');
            $messageUpdate=$message->where("id= {$id}")->select();
            $this->assign('messageUpdate',$messageUpdate);
            $this->display();

        }

    }
}
