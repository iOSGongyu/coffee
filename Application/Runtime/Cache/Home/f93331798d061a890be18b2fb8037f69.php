<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8" />
    <title><?php echo ($seo['title']); ?></title>
    <meta name="keywords" content="<?php echo ($seo['keywords']); ?>"/>
    <meta name="description" content="<?php echo ($seo['desc']); ?>"/>
    <meta name="description" content="千助,北京网站建设领跑者,高端网站制作品牌服务商,荣获网页设计联盟金牌企业大奖,7年专注高端网站建设、手机移动网站建设、微网站制作,服务器运维,为企业客户的互联网应用提供一站式服务解决方案." />
    <meta name="keywords" content="网站建设,北京网站建设,网站制作,北京网站制作,网站设计,北京网站设计,网页设计,北京网页设计,北京网站建设公司,千助" />
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
        <a href="/index/" title="千助网站建设与制作"><img src="<?php echo ($url_ali); ?>images/logo_cases.png" alt="千助设计出品" /></a>
        <div class="wechat">
            <img src="<?php echo ($url_ali); ?>images/wechat_code.jpg" alt="扫描关注网站建设微信公众账号" class="wechat" />
            <p>扫一扫微信二维码<i></i></p>
        </div>
        <nav>
            <ul>
                <li><a href="/">千助首页</a></li>
                <li><a href="/case/">设计案例</a></li>
                <li><a href="/news/">文章动态</a></li>
            </ul>
        </nav>
    </div>
    <footer>
        高端定制，品牌设计
        <br />千助出品
        <u>2008 - 2015</u>作品集
        <br />
        <a href="index.html" target="_blank">北京网站建设与制作公司</a>
    </footer>
</header> 

<section class="toolbar">
    <a href="index.html" title="返回首页" class="homelink"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <span class="switch glyphicon glyphicon-th-list"></span>
    <div class="btnList">
        <div class="link btn-group">
            <a href="/news/" class="btn btn-default">文章列表</a>
        </div>
        <div class="link btn-group">
            <?php if(is_array($newsPre)): foreach($newsPre as $key=>$newsPre): ?><a href="/newsDetail?id=<?php echo ($newsPre["id"]); ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>PREV</a><?php endforeach; endif; ?>
        </div>
        <div class="link btn-group">
            <?php if(is_array($newsNext)): foreach($newsNext as $key=>$newsNext): ?><a href="/newsDetail?id=<?php echo ($newsNext["id"]); ?>" class="btn btn-default">NEXT<span class="glyphicon glyphicon-arrow-right"></span></a><?php endforeach; endif; ?>
        </div>
    </div>
</section>
<section class="artshow content">
    <div class="box">
        <?php if(is_array($newsDetail)): foreach($newsDetail as $key=>$rownew): ?><h1><?php echo ($rownew["title"]); ?></h1>
            <span class="rel"> 千助科技<u>•</u><?php echo (date("Y-m-d",$rownew["createtime"])); ?><u>•</u><a href="" target="_blank"><?php echo ($rownew["categoryname"]); ?></a><u>•</u><span class="glyphicon glyphicon-eye-open" title="浏览次数"></span> <?php echo ($rownew["clicknum"]); ?> </span>
            <div class="words">
                <?php echo (html_entity_decode($rownew["details"])); ?>
            </div><?php endforeach; endif; ?>
        <dl class="tags">
            <dt>
                文章关键词
                <span class="glyphicon glyphicon-tag"></span>
            </dt>
            <dd>
                <?php if(is_array($tagList)): foreach($tagList as $key=>$rowtag): ?><a href="#" target="_blank"><?php echo ($rowtag["tagname"]); ?></a><?php endforeach; endif; ?>
            </dd>
        </dl>
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
        </div>
    </div>
    <aside>
        <div class="ad">
            <a href="/index/" title="做网站，找千助" target="_blank"><img src="<?php echo ($url_ali); ?>images/ad.jpg" alt="建网站，找千助，网站建设品牌设计企业" /></a>
        </div>
        <div class="caption">
            <h3>推荐阅读</h3>
        </div>
        <ul class="items">
            <?php if(is_array($newsTuijian)): foreach($newsTuijian as $key=>$tuijian): ?><li> <a href="/newsDetail?id=<?php echo ($tuijian["id"]); ?>" target="_blank" class="thumb"><img src="/Public/Uploads/<?php echo ($tuijian["newsimg"]); ?>" alt="<?php echo ($tuijian["title"]); ?>" /></a> <span class="title"><a href="/newsDetail?id=<?php echo ($tuijian["id"]); ?>" target="_blank" title="<?php echo ($tuijian["title"]); ?>"><?php echo ($tuijian["title"]); ?> ...</a></span> <span class="rel"><?php echo (date("m-d",$tuijian["createtime"])); ?><span class="glyphicon glyphicon-eye-open" title="浏览次数"></span><?php echo ($tuijian["clicknum"]); ?></span> </li><?php endforeach; endif; ?>
        </ul>
    </aside>
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