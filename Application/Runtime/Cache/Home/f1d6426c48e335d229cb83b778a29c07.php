<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($seo['title']); ?></title>
    <meta name="keywords" content="<?php echo ($seo['keywords']); ?>"/>
    <meta name="description" content="<?php echo ($seo['desc']); ?>"/>
    <link href="<?php echo ($url_ali); ?>css/web_style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($url_ali); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($url_ali); ?>css/flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($url_ali); ?>css/service.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="<?php echo ($url_ali); ?>js/menus.js"></script>
    <script src="<?php echo ($url_ali); ?>js/core.js"></script>
    <script src="<?php echo ($url_ali); ?>js/public.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="j<?php echo ($url_ali); ?>s/dd_belatedpng.js"></script>
    <script type="text/javascript" >
        DD_belatedPNG.fix('img,.div');
    </script>
    <![endif]-->
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




        });




    </script>
</head>
<body>
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
                <li><a href="/index/">网站首页</a></li>
                <li><a href="/jianshe/">网站建设</a></li>
                <li><a href="/case/">经典案例</a></li>
                <li  class="cur"><a href="/service/">服务范围</a></li>
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




    });




</script>
<div class="Zyflash" style="background:url(<?php echo ($url_ali); ?>images/service.jpg) no-repeat center bottom;"></div>
<div class="SerAllClass">
    <div class="SerAllTop">
        首创［策略+创意+技术］建站模式，充分考虑用户体验、网站特色、内容梳理、反术匹配等全方位的品质，
        <br /> 提供适合企业属性又有创新亮点的商端网站。
    </div>
    <div class="SerAllBots">
        <ul class="service_bd">
            <li class="current">
                <div class="box">
                    <div class="img1"></div>
                    <div class="title">
                        <h2>高端网站建设</h2> website
                    </div>
                </div>
                <div class="des"></div> </li>
            <li>
                <div class="box">
                    <div class="img2"></div>
                    <div class="title">
                        <h2>移动端应用定制</h2> Mobile development
                    </div>
                </div>
                <div class="des"></div> </li>
            <li>
                <div class="box">
                    <div class="img3"></div>
                    <div class="title">
                        <h2>企业视觉设计</h2> visual design
                    </div>
                </div>
                <div class="des"></div> </li>
            <li>
                <div class="box">
                    <div class="img4"></div>
                    <div class="title">
                        <h2>整合营销/推广</h2> Marketing promotion
                    </div>
                </div>
                <div class="des"></div> </li>
            <li>
                <div class="box">
                    <div class="img5"></div>
                    <div class="title">
                        <h2>电商服务运营</h2> Electrictiy service
                    </div>
                </div>
                <div class="des"></div> </li>
            <li>
                <div class="box">
                    <div class="img6"></div>
                    <div class="title">
                        <h2>增值服务</h2> Value-added
                    </div>
                </div>
                <div class="des"></div> </li>
            <i class="service_arrow"></i>
        </ul>
    </div>
</div>
<div class="SerAllLine service_main">
    <div class="item" style="left: 0px;">
        <div class="SerAllcom">
            <a href="/a/wangzhanjianshe" title="点击了解移动互联网/APP应用定制详情">
                <div class="SerAllcomLeft">
                    <img src="<?php echo ($url_ali); ?>images/serimg2.jpg" width="473" height="413" border="0" />
                </div>
                <div class="SerAllcomRight">
                    <h1>高端网站建设</h1> 从专业的角度将网站的个性、创意、品牌及理念准确的传达给您的受众，根据网站定位方向结合企业VI视觉系统，通过设计师的精心设计，为客户定制高端品牌网站，拒绝模版式网站开发。
                    <br />
                    <br /> -集团与上市公司网站建设
                    <br /> -政府事业单位电子政务建设
                    <br /> -企业网站开发
                    <br /> -电子商务平台开发
                    <br /> -社区门户网站开发
                    <br /> -企业产品推广型网站开发
                </div></a>
        </div>
    </div>
    <div class="item" style="left: 100%;">
        <div class="SerAllcom">
            <div class="SerAllcomLeft">
                <img src="<?php echo ($url_ali); ?>images/f_r4_c4.jpg" />
            </div>
            <div class="SerAllcomRight">
                <h1>移动互联网/APP应用定制</h1> 某某网络在移动互联时代，以优秀的创意与产品执行为品牌客户进一步延伸与受众的触点，加强
                <br /> 品牌互动性及消费者的深度连接的能力，移动互联网的时代，抢先一步把您的生意做到手机上，手机网站、APP、微网站、微信商城、智能客服及营销推送等一体化移动营销解决方案！挖掘亿万手机用户商机！。
                <br />
                <br /> -手机网站开发
                <br /> -IOS开发 iphone/iPad平台
                <br /> -Android移动应用开发（手机网站安卓平台）
                <br /> -微信公众平台二次开发及微网站二次开发
                <br /> -移动设备终端APP应用策划及制作
                <br /> -WebApp设计开发
            </div>
        </div>
    </div>
    <div class="item" style="left: 100%;">
        <div class="SerAllcom">
            <div class="SerAllcomLeft">
                <img src="<?php echo ($url_ali); ?>images/f_r4_c4.jpg" />
            </div>
            <div class="SerAllcomRight">
                <h1>企业视觉形象设计</h1> 企业形象推广的目标，应该首先是创造一个统一有效的视觉形象，即提供受众识别统一性的视觉符号系统。统一的企业形象在认同上对其产品、服务的品质和可靠性等带来相当大的好处。它不仅仅提供一个令人印象深刻的符号，而且随着产品、服务的使用和认同，它还具有惊人的市场竞争力。无疑，这一符号系统的执行具有统一性、长期性的传播优势。
                <br />
                <br />- 网络产品包装设计
                <br /> - 网站专题包装设计
                <br /> - 网站banner图片设计
                <br /> - 交互动画设计
                <br /> - logo/VI设计 - 平面设计
            </div>
        </div>
    </div>
    <div class="item" style="left: 100%;">
        <div class="SerAllcom">
            <div class="SerAllcomLeft">
                <img src="<?php echo ($url_ali); ?>images/serimg4.jpg" />
            </div>
            <div class="SerAllcomRight">
                <h1>网络整合营销</h1> 运用全面、行之有效的网络营销方式，助力企业赢得线上品牌竞争力。精准定位目标客户，制作专业推广文案，多种网站推广手段进行全方位网络覆盖。
                <br />
                <br /> - 搜索引擎营销
                <br /> - 微平台营销（微信、微博等)
                <br /> - 口碑营销（论坛、社区等）
                <br /> - 网络广告投放计划
                <br /> - 百度产品(知道、百科等)
                <br /> - 3000多家商城平台推广
                <br /> - SEO搜索排名
            </div>
        </div>
    </div>
    <div class="item" style="left: 100%;">
        <div class="SerAllcom">
            <div class="SerAllcomLeft">
                <img src="<?php echo ($url_ali); ?>images/f_r4_c4.jpg" />
            </div>
            <div class="SerAllcomRight">
                <h1>移动端应用定1制</h1> 某某网络在移动互联时代，以优秀的创意与产品执行为品牌客户进一步延伸与受众的触点，加强
            </div>
        </div>
    </div>
    <div class="item" style="left: 100%;">
        <div class="SerAllcom">
            <div class="SerAllcomLeft">
                <img src="<?php echo ($url_ali); ?>images/f_r4_c4.jpg" />
            </div>
            <div class="SerAllcomRight">
                <h1>移动端应用定1制</h1> 某某网络在移动互联时代，以优秀的创意与产品执行为品牌客户进一步延伸与受众的触点，加强
            </div>
        </div>
    </div>
    <a class="prev" href="#" style="display: none;"></a>
    <a class="next" href="#" style="display: block;"></a>
</div>
<div class="SerComs">
    <div class="SerComsBody">
        <ul>
            <li class="ser2">
                <div class="tis">
                    111111
                </div> <h3>营销结果导向</h3> <h2>营销</h2>
                <div class="tnod">
                    01
                </div> </li>
            <li class="ser3">
                <div class="tis">
                    全新UE用户体验设计和网站流程优化，让用户最方便、最快捷的进行网站浏览和功能操作
                </div> <h3>用户体验为主</h3> <h2>体验</h2>
                <div class="tnod">
                    02
                </div> </li>
            <li class="ser5">
                <div class="tis">
                    111111
                </div> <h3>营销结果导向</h3> <h2>品质</h2>
                <div class="tnod">
                    03
                </div> </li>
            <li class="ser7">
                <div class="tis">
                    为客户网站提供SEO搜索引擎优化推广，让您的关键词免费获得更多搜索和展示的机会
                </div> <h3>网站重在运营</h3> <h2>运营</h2>
                <div class="tnod">
                    04
                </div> </li>
        </ul>
    </div>
    <script type="text/javascript">

        $(function(){
            $(".SerComsBody ul>li").hover(function(){
                $(this).find(".tis").stop().animate({bottom:"0px"});

                if ($(this).index()<2){
                    $(this).find(".tnod").animate({"font-size":"80px",bottom:"40px","left":"460"},300);
                }else{
                    $(this).find(".tnod").animate({"font-size":"80px",bottom:"40px"},300);
                }


            }, function(){
                $(this).find(".tis").stop().animate({bottom:"-238px"});
                if ($(this).index()<2){
                    $(this).find(".tnod").animate({"font-size":"60px",bottom:"20px","left":"480"},300);
                }else{
                    $(this).find(".tnod").animate({"font-size":"60px",bottom:"20px"},300);
                }

            });

            /*服务导航*/
            $(".current").find(".des").stop().animate({opacity: '1'},500);
            $(".SerAllBots ul>li").click(function(){
                var lis=$(".SerAllBots ul>li").length;
                for(var i=0;i<lis;i++){
                    if (i==$(this).index()){
                        $(".SerAllBots ul>li").eq(i).children(".des").stop().animate({opacity: '1'},500);
                    }else{

                        $(".SerAllBots ul>li").eq(i).children(".des").stop().animate({opacity: '0'},500);
                    }
                }

            });


        });



    </script>
</div>
<div class="SerBottom">
    <div class="SerBottomTop">
        <h1>我们不问您要怎么做，我们只问您的目标是什么</h1> 让浏览者喜欢，让客户受益，让艺术与商业完美结合
    </div>
    <div class="SerBottomBottom">
        <div class="title">
            项目流程
        </div>
        <div class="smaTitle">
            我们与你一超推进项目并协作，共同达到目标
        </div>
        <div class="Bobodys">
            <img src="<?php echo ($url_ali); ?>images/r13_c8.jpg" />
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