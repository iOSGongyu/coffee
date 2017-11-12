<?php

namespace Home\Controller;

use Think\Controller;

class NewsController extends CommonController {
    //新闻页面
    public function index(){
        $categoryModel=M('category');
        $categoryList=$categoryModel->where('isCase = 0')->select();

        $newMolde=M('news');
        $newsList=$newMolde->table('sucai_news new,sucai_category cat')->where("new.categoryId = cat.id")->field('new.id,new.title,new.createTime,new.newsImg,new.describe,new.clickNum,cat.categoryname')->select();
        //dump($newsList);
        foreach ($newsList as $val){
            $tagModel=M('tag');
            $tagList=$tagModel->where("caseid= {$val['id']} and type= 0")->select();
            $tagLists[]=$tagList;
           // dump($tagList);
        }
        //dump($tagLists);
        $this->assign("newsList",$newsList);
        $this->assign("categoryList",$categoryList);
        $this->display();
    }
    //新闻详情页面
    public function newsDetail(){
        $id=I('get.id');
        $newsModel=M('news');
        $newsDetail=$newsModel->table('sucai_news new,sucai_category cat')->where("new.categoryid = cat.id and new.id = {$id}")->field('new.id,new.title,new.createTime,new.details,new.clickNum,cat.categoryname')->select();
        //文章tag
        $tagModel=M('tag');
        $tagList=$tagModel->where("caseId = {$id} and type = 0")->select();
        //推荐阅读
        $newsTuijian=$newsModel->field("id,newsImg,clicknum,createtime,title")->order("clicknum desc")->limit(4)->select();
        //上一篇
        $newsPre=$newsModel->where("id < {$id}")->field("id")->order('id desc')->limit(1)->select();
        //下一篇
        $newsNext=$newsModel->where("id > {$id}")->field("id")->order('id asc')->limit(1)->select();


        $this->assign("newsDetail",$newsDetail);
        $this->assign("tagList",$tagList);//文章tag
        $this->assign("newsTuijian",$newsTuijian);//推荐文章
        $this->assign("newsPre",$newsPre);//上一篇
        $this->assign("newsNext",$newsNext);//下一篇
        $this->display();

    }



}
