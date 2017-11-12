<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo ($url_ali); ?>css/web_style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($url_ali); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($url_ali); ?>css/flash.css" rel="stylesheet" type="text/css" />
    <title><?php echo ($seo['title']); ?></title>
    <meta name="keywords" content="<?php echo ($seo['keywords']); ?>" />
    <meta name="description" content="<?php echo ($seo['desc']); ?>" />
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/menus.js"></script>

    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/dd_belatedpng.js"></script>

    <script type="text/javascript" >
        DD_belatedPNG.fix('img,.div');
    </script>
    <![endif]-->
</head>
<body class="IndexBgColor">
<div class="head" id="Head">
    <div class="heads">
        <div class="HeadTopLeft"></div>
        <div class="HeadTopRight"></div>
        <div class="logo">
            <a href="index.html"><img src="<?php echo ($url_ali); ?>images/logo.jpg" alt="" border="0" /></a>
        </div>
        <div class="banner">
            <img src="<?php echo ($url_ali); ?>images/banner.jpg" alt="" />
        </div>
        <div class="nav">
            <ul>
                <li class="cur"><a href="/index/">网站首页</a></li>
                <li><a href="/jianshe/">网站建设</a></li>
                <li><a href="/case/">经典案例</a></li>
                <li><a href="/service/">服务范围</a></li>
                <li><a href="/news/">新闻观点</a></li>
                <li><a href="/client/">服务客户</a></li>
                <li><a href="/about/">关于我们</a></li>
            </ul>
            <div class="curBg"></div>
            <div class="cls"></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {

        // $("#orderedlist li:last").hover(function() {
        sumli=$(".ZyMenu ul>li").length;
        allWidth=($(".ZyMenu ul>li").width()+10)*sumli;
        $(".ZyMenu ul").width(allWidth);
        //	alert(allWidth);



        $(window).scroll(function() {

            if($(window).scrollTop()>=450){

                $("#nav").fadeIn(200);
            }else{
                $("#nav").fadeOut(150);
            }
        });




        $(".VieList").hover(function() {

            $(this).css("border-bottom","1px #00ABB1 dashed");

        }, function() {
            $(this).css("border-bottom","1px #D2D2D2 dashed");
        });

    });




</script>
<div class="Zyflash" style="background:url(<?php echo ($url_ali); ?>images/customers.jpg) no-repeat center bottom;"></div>
<div class="ZyTitle">
    <div class="lefts">
        <div class="leftEn">
            serve our customers
        </div>
        <div class="leftCh">
            服务客户
        </div>
    </div>
    <div class="rights">
        <div class="Rsreachs">
            <img src="<?php echo ($url_ali); ?>images/search.gif" />
            <div class="Rsearch">
                <input name="" type="text" />
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function() {

            $(".Rsreachs").mouseover(function() {
                $(this).children("div").stop(true,false).animate({width:"300",opacity:"1"},300);
            });
            /*
             $(".Rsreachs").mouseout(function(){
             $(this).children("div").stop(true,false).animate({width:"0",opacity:"0"},300);
             });
             */




        });


    </script>
</div>
<div class="ZyMenu">
    <ul>
        <li><a href="/a/fuwukehu/kehuliebiao/">客户列表</a></li>
        <li><a href="/a/fuwukehu/kehudeshengyin/">客户的声音</a></li>
    </ul>
</div>
<!--案例-->
<!--//  浮动菜单 //-->
<div id="nav" class="MenuSction">
    <div class="MeBodys">
        <div class="ClassNames">
            服务客户
        </div>
        <ul>
            <li><a href="/a/fuwukehu/kehuliebiao/">客户列表</a></li>
            <li><a href="/a/fuwukehu/kehudeshengyin/">客户的声音</a></li>
        </ul>
    </div>
</div>
<!---->
<!---->
<div class="KeBody">
    <div class="KeBodyTop">
        <h1>我们，因您而在</h1>
        <div class="en">
            Without you,We wouldn't be here.
        </div>
        <div class="coms">
            事实胜于雄辩，某某网络作为广西省内最具规模和实力的网络公司，目前己经服务1000余家客户，桂林本土知名企业、政府单位及大型商务项目纷纷选择了我们，其客户遍布全国各省，由于我们的用户数量正在以每月数十家递增，所以更多客户列表请联系本公司客户心索取（以下所有客户均与人腾签订合同，请勿抄袭、复制）
        </div>
    </div>
    <div class="KelistBody">
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-1506202009540-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-1506202009362V.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194P50-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194K10-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194I70-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194H40-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194G00-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-150620194A70-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-1506201946350-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-1506201946220-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>
        <div class="Kelist">
            <a href="javascript:" rel="nofollow" title=""><img src="<?php echo ($url_ali); ?>images/1-1506201946060-L.jpg" onerror="this.src='/include/noPic.jpg'" /></a>
        </div>

        <div class="Kelist">
            <div class="KeMore">
                <a href="#"><img src="<?php echo ($url_ali); ?>images/mores.gif" border="0" /></a>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="bottoms"></div>
<div class="ZyFooter">
    <div class="ZyFooterMenus">
        <a href="/">首页</a> |
        <a href="/jianshe/">网站建设</a> |
        <a href="/case/">经典案例</a> |
        <a href="/service/">服务范围</a> |
        <a href="/news/">新闻观点</a> |
        <a href="/client/">服务客户</a> |
        <a href="/about/">关于我们</a>
    </div>
</div>
<div class="footer">
    <div class="footers">
        公司地址：海南市二七区 联系电话：0371-88888888 （上班时间：星期一至星期六） 传真：0371-88888888 上海织梦CMS网络科技有限公司！技术支持
        <a href="http://www.dedecms.com">织梦CMS</a>&copy; 版权所有 ZonTenNetwork All Rights Reserved 豫ICP备12345678号
    </div>
</div>
<a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#F60&amp;text=分享到"></script>
</body>
</html>