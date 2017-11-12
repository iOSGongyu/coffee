<?php

namespace Admin\Controller;

use Think\Controller;

class LearnController extends CommonController {

    public function lists() {
       // $role=I('session.role');
            if(checkLogin()){
            $assignArr = array(
                "leftLearnManager" => 1,//是否选中
                "leftLearnList" => 1,//菜单列表是否选中
              //  "role" => $role,//管理员权限
            );
                $role=I('session.role');
                if($role != 0){
                    echo"<script>alert('您没有权限')</script>";
                    echo "<script>location.href= '../Index/index'</script>";
                }else{
                    $District=M('district');

                    $records=I('cookie.records');
                    if($records == ''){
                        $records =10;
                    }
                    $search=I('post.search');
//                var_dump($search);

                    if($search==''){
                    $count = $District->table('sucai_category cat,sucai_district dis')->where('cat.id=dis.categoryId')->count();// 查询满足要求的总记录数
                    $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                    $show = $Page->show();// 分页显示输出
                    $District->create();
                    $data3=$District->table('sucai_category cat,sucai_case cas')->where('cat.id=cas.categoryId')->field('cat.CategoryName,cat.id cid,cas.id casid,cas.title,cas.img,cas.detail,cas.createTime,cas.describe')->order('cid')->limit($Page->firstRow.','.$Page->listRows)->select();

                    }else{
                        $data3=$District->table('sucai_category cat,sucai_case cas')->where("cat.id=cas.categoryId &&(cat.CategoryName like '%{$search}%' || cas.title like '%{$search}%')")->field('cat.CategoryName,cat.id cid,cas.id casid,cas.title,cas.img,cas.detail,cas.createTime,cas.describe')->limit($Page->firstRow.','.$Page->listRows)->select();
                    }

                    $this->assign('districtlist',$data3);
                    $this->assign('num',$Page->listRows);
                    $this->assign('count',$count);
                    $this->assign('page',$show);// 赋值分页输出
                    $this->assign($assignArr);
                    $this->display();
                }
        }

    }
    public function learnInformationAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftLearnManager" => 1,//是否选中
                "leftLearnAdd" => 1,//菜单列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $categoryModel=M('category');
                $categoryList=$categoryModel->where('isCase = 1')->field('id,categoryname')->select();
                $this->assign('categoryList',$categoryList);
                $this->assign($assignArr);
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
        $District = M("case");
        $did=I('get.id');
        if($District->delete($did) > 0){
            echo "<script>alert('删除成功')</script>";
            echo "<script>location.href='lists'</script>";
        }else{
            echo "<script>alert('error')</script>";
            echo "<script>history.back()</script>";
        }
    }
    }
    public function learninformationUpdate(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
        $did=I('get.id');
        $Category = M("category");
        $categoryData=$Category->field("id,CategoryName,time")->select();
        $District = M("case");
        $districtlist=$District->table('sucai_category cat,sucai_case cas')->where("cat.id=cas.categoryId and cas.id={$did}")->field('cat.CategoryName,cat.id cid,cas.id casid,cas.title,cas.img,cas.detail,cas.createTime,cas.describe')->select();

        $this->assign('categoryData',$categoryData);
        $this->assign('districtlist',$districtlist);
        $this->display();
        }
    }

   
}
