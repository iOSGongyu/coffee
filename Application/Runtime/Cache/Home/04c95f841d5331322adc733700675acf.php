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
    <div class="category btn-group">
        <a href="/case/" class="btn btn-default">全部</a>
        <?php if(is_array($categoryList)): foreach($categoryList as $key=>$row1): ?><a href="/case?cid=<?php echo ($row1["id"]); ?>" class="btn btn-default"><?php echo ($row1["categoryname"]); ?></a><?php endforeach; endif; ?>
    </div>
</section>
<section class="caselist content">
    <ul class="items list-inline">
        <?php if(is_array($caseLists)): foreach($caseLists as $key=>$rowcase): ?><li> <a href="/casedetail?id=<?php echo ($rowcase["id"]); ?>" target="_blank"> <img src="/Public/Uploads/<?php echo ($rowcase["img"]); ?>" alt="<?php echo ($rowcase["title"]); ?>" /> <p><?php echo ($rowcase["categoryname"]); ?><br /><strong><?php echo ($rowcase["title"]); ?></strong><br /><?php echo ($rowcase["describe"]); ?></p></a> </li><?php endforeach; endif; ?>
    </ul>
    <div id="Paging" class="paging">
        <div class="qzPagination">
            <?php echo ($page); ?>
        </div>
    </div>
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