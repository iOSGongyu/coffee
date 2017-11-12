<?php

namespace Admin\Controller;

use Think\Controller;

class SeoController extends CommonController {
    public function lists(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminSeo" => 1,//新增用户是否选中
                "leftAdminSeoLists" => 1,//新增用户是否选中

            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $seo=M('seo');
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
//                var_dump($search);

                if($search==''){
                $count = $seo->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $seo->create();
                $data3=$seo->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3=$seo->where("alias like '%{$search}%' || title like '%{$search}%' || keywords like '%{$search}%'")->limit($Page->firstRow.','.$Page->listRows)->select();

                }


                $this->assign('seoList',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
    public function seoAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminSeo" => 1,//新增用户是否选中
                "leftAdminSeoAdd" => 1,//新增用户是否选中

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
    //新闻修改
    public function seoUpdate(){
        if(checkLogin()){
            $assignArr = array(
                "leftAdminUserManager" => 1,//是否选中
                "leftAdminSeo" => 1,//新增用户是否选中
                "leftAdminSeoAdd" => 1,//新增用户是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $did=I('get.id');
                $seo=M('seo');
                $seoDetail=$seo->where("id = {$did}")->select();
                $this->assign('seoDetail',$seoDetail);
                $this->assign($assignArr);
                $this->display();
            }
        }
    }

}