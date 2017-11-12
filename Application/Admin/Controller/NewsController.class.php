<?php

namespace Admin\Controller;

use Think\Controller;
class NewsController extends CommonController {
	//新闻列表
	public function lists(){

		if(checkLogin()){
            $assignArr = array(
                "leftNewsManager" => 1,//是否选中
                "leftNewsList" =>1,
                "leftNews" => 1,//是否选中
            );

            $news=M('news');
            $records=I('cookie.records');

            if($records == ''){
                $records =10;
            }
                $search=I('post.search');
                   // var_dump($search);

                if($search==''){
                $count = $news->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $news->create();
                $data=$news->table('sucai_category cat,sucai_news new')->where("cat.id=new.categoryId")->field('cat.categoryname,new.newsImg,new.id,new.title,new.describe,new.clicknum,new.details,new.createTime')->limit($Page->firstRow.','.$Page->listRows)->select();
            }else{
                $data=$news->table('sucai_category cat,sucai_news new')->where("cat.id=new.categoryId &&( new.title like '%{$search}%' || new.describe like '%{$search}%') ")->field('cat.categoryname,new.newsImg,new.id,new.title,new.describe,new.clicknum,new.details,new.createTime')->limit($Page->firstRow.','.$Page->listRows)->select();
            }
            $this->assign('num',$Page->listRows);
            $this->assign('vr_data',$data);
            $this->assign('count',$count);
            $this->assign('page',$show);// 赋值分页输出
            $this->assign($assignArr);
            $this->display();
		}

	}


	//新闻添加
	public function newsAdd(){
		if(checkLogin()){
            $assignArr = array(
                "leftNewsManager" => 1,//是否选中
                "leftNewsAdd" => 1,//菜单列表是否选中
            );
            $categoryModel=M('category');
            $categoryList=$categoryModel->where('isCase = 0')->field('id,categoryname')->select();
            $this->assign('categoryList',$categoryList);
            $this->assign($assignArr);
            $this->display();
		}
	}
    public function newsDel(){
    //dump($_GET['id']);
        $news=M('news');
        $did=I('get.id');
        if($news->delete($did)){
            echo "<script>alert('删除成功')</script>";
            echo "<script>location.href='lists'</script>";
        }else{
            echo "<script>alert('error')</script>";
            echo "<script>history.back()</script>";
        }
    }

    //新闻修改
    public function newsUpdate(){
        if(checkLogin()){
            $assignArr = array(
                "leftNewsManager" => 1,//是否选中
                "leftNews" => 1,//菜单列表是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $did=I('get.id');
                $news=M('news');
                $newsDetail=$news->table('sucai_category cat,sucai_news new')->where("cat.id=new.categoryId and new.id = {$did}")->field('cat.CategoryName,new.id,new.title,new.details,new.createTime,new.newsImg,new.describe,new.clickNum')->select();

                $this->assign('newsDetail',$newsDetail);
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
	
}