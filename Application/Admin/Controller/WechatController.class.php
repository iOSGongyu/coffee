<?php
namespace Admin\Controller;

use Think\Controller;

class WechatController extends CommonController {
    public function lists() {
        if(checkLogin()){
            $assignArr = array(
                "leftWechatManager" => 1,//是否选中
                "leftWechatList" => 1,//菜单列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{

                $district=M('tag');
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }

                $count = $district->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $district->create();
                $data3=$district->limit($Page->firstRow.','.$Page->listRows)->select();



                $this->assign('wechatList',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }

    }
    public function wechatAdd() {
        if(checkLogin()){
            $assignArr = array(
                "leftWechatManager" => 1,//是否选中
                "leftWechatAdd" => 1,//菜单列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $news=M('news');//实例化商圈表
                $caseModel=M('case');
                $casetag=$caseModel->field('id,title')->select();
                $districtName=$news->field('id,title')->select();
                    //dump($districtName);
                $this->assign('districtName',$districtName);
                $this->assign('casetag',$casetag);
                $this->assign($assignArr);
                $this->display();

            }
        }
    }
    public function wechatUpdate(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $union = M("union");
            $id=I('get.id');
            $wechat=$union->where("id = {$id}")->select();
            $this->assign('wechat',$wechat);
            $this->display();
        }
    }

}