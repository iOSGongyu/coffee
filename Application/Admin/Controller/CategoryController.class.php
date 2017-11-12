<?php

namespace Admin\Controller;

use Think\Controller;

class CategoryController extends CommonController {

    public function lists() {
        if(checkLogin()){
            $assignArr = array(
                "leftCategoryManager" => 1,//是否选中
                "leftCategoryList" => 1,//菜单列表是否选中
            );

            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $Category = M("category");
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');

                if($search==''){

                    $count = $Category->count();// 查询满足要求的总记录数
                    $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                    $show = $Page->show();// 分页显示输出
                    $Category->create();
                    $data3 = $Category->field("id,CategoryName,IsShowNav,isCase,time")->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3 = $Category->where("Categoryname like '%{$search}%'")->field("id,CategoryName,isCase,IsShowNav,time")->limit($Page->firstRow.','.$Page->listRows)->select();
                }
                $this->assign('categoryData',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出

                $this->assign($assignArr);

                $this->display();

            }
        }
    }
    public function categoryAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftCategoryManager" => 1,//是否选中
                "leftCategoryAdd" => 1,//菜单列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{

            $this->display();
            }
        }


    }
    public function del(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $Category = M("category");
            $did=I('get.id');
            $where['ParentId']=$did;
                if($Category->delete($did) > 0){
                    echo "<script>alert('删除成功')</script>";
                    echo "<script>location.href='lists'</script>";
                }else{
                    echo "<script>alert('error')</script>";
                    echo "<script>history.back()</script>";
                }

        }

    }
    //修改
    public function categoryUpdate(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../index/index'</script>";
        }else{
            $Category = M("category");
            $id=I('get.id');
            $CategoryUpdate=$Category->where("id= {$id}")->select();
            $this->assign('CategoryUpdate',$CategoryUpdate);
            $this->display();

        }

    }
   
}
