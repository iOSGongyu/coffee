<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8" />
    <title><?php echo ($seo['title']); ?></title>
    <meta name="keywords" content="<?php echo ($seo['keywords']); ?>"/>
    <meta name="description" content="<?php echo ($seo['desc']); ?>"/>
    <meta name="description" content="二当家的企业网站管理系统,上海网站建设领跑者,高端网站制作品牌服务商,荣获网页设计联盟金牌企业大奖,7年专注高端网站建设、手机移动网站建设、微网站制作,服务器运维,为企业客户的互联网应用提供一站式服务解决方案." />
    <meta name="keywords" content="网站建设,上海网站建设,网站制作,上海网站制作,网站设计,上海网站设计,网页设计,北京网页设计,上海网站建设公司,二当家的企业网站管理系统" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />


    <link href="<?php echo ($url_ali); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo ($url_ali); ?>css/inner.min.css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="<?php echo ($url_ali); ?>js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="<?php echo ($url_ali); ?>js/jquery.min.js"></script>
    <script src="<?php echo ($url_ali); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo ($url_ali); ?>js/inner.min.js"></script>
</head>
<body>
<header>
    <div class="box">
        <a href="/index/" title="二当家的企业网站管理系统网站建设与制作"><img src="<?php echo ($url_ali); ?>images/logo_cases.png" alt="二当家的企业网站管理系统设计出品" /></a>
        <div class="wechat">
            <img src="<?php echo ($url_ali); ?>images/wechat_code.jpg" alt="扫描关注网站建设微信公众账号" class="wechat" />
            <p>扫一扫微信二维码<i></i></p>
        </div>
        <nav>
            <ul>
                <li><a href="/">二当家的企业网站管理系统首页</a></li>
                <li><a href="/case/">设计案例</a></li>
                <li><a href="/news/">文章动态</a></li>
            </ul>
        </nav>
    </div>
    <footer>
        高端定制，品牌设计
        <br />二当家的企业网站管理系统出品
        <u>2008 - 2015</u>作品集
        <br />
        <a href="index.html" target="_blank">上海网站建设与制作公司</a>
    </footer>
</header> 

<section class="toolbar">
    <a href="index.html" title="返回首页" class="homelink"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <span class="switch glyphicon glyphicon-th-list"></span>
    <div class="btnList">
        <div class="link btn-group ml">
            <a href="/case/" class="btn btn-default" title="千助网站建设作品集">作品集</a>
        </div>
        <div class="link btn-group">
            <?php if(is_array($casePre)): foreach($casePre as $key=>$casepre): ?><a href="/casedetail?id=<?php echo ($casepre["id"]); ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>PREV</a><?php endforeach; endif; ?>
        </div>
        <div class="link btn-group">
            <?php if(is_array($caseNext)): foreach($caseNext as $key=>$caseNext): ?><a href="/casedetail?id=<?php echo ($caseNext["id"]); ?>" class="btn btn-default">NEXT<span class="glyphicon glyphicon-arrow-right"></span></a><?php endforeach; endif; ?>
        </div>
    </div>
</section>
<section class="caseshow content">
    <?php if(is_array($caseList)): foreach($caseList as $key=>$rowcase): ?><div class="caption">
        项目介绍
    </div>
    <div class="words">
        <h1>[ <?php echo ($rowcase["title"]); ?> ]</h1>
        <span class="rel">网站设计<u>•</u><a href="" target="_blank" title="制造行业网站设计"><?php echo ($rowcase["categoryname"]); ?></a></span>
        <dl class="tags">
            <dt>
                案例标签
                <span class="glyphicon glyphicon-tag"></span>
            </dt>
            <?php if(is_array($tagList)): foreach($tagList as $key=>$rowtag): ?><dd>
                    <a href="" target="_blank"><?php echo ($rowtag["tagname"]); ?></a>
                </dd><?php endforeach; endif; ?>

        </dl>
    </div>
    <div class="caption">
        设计欣赏
    </div>
    <div class="demo">

        <?php echo (html_entity_decode($rowcase["detail"])); ?>
    </div><?php endforeach; endif; ?>

</section>




<div class="dock">
    <ul class="icons">
        <li class="up"><i></i></li>
        <li class="tel"> <i></i><p>建站咨询热线<br />4006-123-011</p> </li>
        <li class="im"> <i></i><p><a href="http://qiao.baidu.com/v3/?module=default&amp;controller=im&amp;action=index&amp;ucid=989741&amp;type=n&amp;siteid=4805" target="_blank">点我，建站咨询</a></p> </li>
    </ul>
</div>
</body>
</html>