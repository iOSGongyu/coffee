<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController {

    //首页
    public function index() {
        //首页导航
        $categoryModel=M('category');
        $categoryList=$categoryModel->where("isCase = 2")->select();
        //首页新闻
        $newsModel=M('news');
        $newsList=$newsModel->order("id desc")->limit(5)->select();
//dump($newsList);

        //案例
        $caseModel=M('case');
        $caseList=$caseModel->table("sucai_case cas,sucai_category cat")->where("cat.id = cas.categoryid")->field('cas.id,cas.title,cas.describe,cas.img,cas.createTime,cat.categoryname')->order('id desc')->limit(3)->select();

        $this->assign("categoryList",$categoryList);//首页导航
        $this->assign("newsList",$newsList);//首页新闻
        $this->assign("caseList",$caseList);//首页案例列表

        $this->display();
    }
    public function error404() {
        $this->assign('nopage', L("nopage"));
        $this->assign('jumpWords', L("merchant_detail_jump_words", array("jumpurl" => __APP__ . "/" . LANG_SET)));
        $this->error(L("merchants_no"));
    }
}
