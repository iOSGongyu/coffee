<?php

namespace Home\Controller;

use Think\Controller;

class OtherController extends CommonController {
    //新闻页面
    public function jianshe(){
        $seo=M('seo');
        $indexseo = $seo->where("alias = 'jianshe'")->field("title,keywords,desc")->select();
        $this->assign('seo',$indexseo[0]);
        $this->display();
    }
    public function about(){
        $seo=M('seo');
        $indexseo = $seo->where("alias = 'about'")->field("title,keywords,desc")->select();
        $this->assign('seo',$indexseo[0]);
        $this->display();
    }
    public function client(){
        $seo=M('seo');
        $indexseo = $seo->where("alias = 'client'")->field("title,keywords,desc")->select();
        $this->assign('seo',$indexseo[0]);
        $this->display();
    }
    public function service(){
        $seo=M('seo');
        $indexseo = $seo->where("alias = 'service'")->field("title,keywords,desc")->select();
        $this->assign('seo',$indexseo[0]);
        $this->display();
    }



}
