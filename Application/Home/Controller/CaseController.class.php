<?php
namespace Home\Controller;

use Think\Controller;

class CaseController extends CommonController {
    public function index(){
        $categoryModel=M('category');
        $categoryList=$categoryModel->where('isCase = 1')->select();
        $cid=I('get.cid');
        $caseModel=M('case');

        if($cid ==''){
            $count = $caseModel->table("sucai_case cas,sucai_category cat")->where("cat.id = cas.categoryid")->count();// 查询满足要求的总记录数
        }else{
            $count = $caseModel->table("sucai_case cas,sucai_category cat")->where("cat.id = cas.categoryid and categoryId = {$cid}")->count();// 查询满足要求的总记录数
        }
        $Page = new  \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show = $Page->show();// 分页显示输出
        $caseModel->create();
        if($cid == ''){
            $data3=$caseModel->table("sucai_case cas,sucai_category cat")->where("cat.id = cas.categoryid")->field('cas.id,cas.title,cas.describe,cas.img,cas.createTime,cat.categoryname')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
            $data3=$caseModel->table("sucai_case cas,sucai_category cat")->where("cat.id = cas.categoryid and categoryId = {$cid}")->field('cas.id,cas.title,cas.describe,cas.img,cas.createTime,cat.categoryname')->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        $this->assign('caseLists',$data3);
        $this->assign('num',$Page->listRows);
        $this->assign('count',$count);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("categoryList",$categoryList);
        $this->display();
    }
    public function casedetail(){
        $id=I('get.id');
        $caseModel=M('case');
        $caseList=$caseModel->table('sucai_case cas,sucai_category cat')->where("cas.categoryId = cat.id and cas.id = {$id}")->field('cas.id,cas.title,cas.detail,cat.categoryname')->select();
        $tagModel=M('tag');
        $tagList=$tagModel->where("caseId = {$id} and type = 1")->select();
        //dump($caseList);
        //上一篇
        $casePre=$caseModel->where("id < {$id}")->field("id")->order('id desc')->limit(1)->select();
        //下一篇
        $caseNext=$caseModel->where("id > {$id}")->field("id")->order('id asc')->limit(1)->select();
        //dump($caseNext);
        $seo=M('seo');
        $indexseo = $seo->where("alias = 'casedetail'")->field("title,keywords,desc")->select();
        $this->assign('seo',$indexseo[0]);
        $this->assign('caseList',$caseList);
        $this->assign('tagList',$tagList);
        $this->assign("casePre",$casePre);
        $this->assign("caseNext",$caseNext);
        $this->display();
    }
}