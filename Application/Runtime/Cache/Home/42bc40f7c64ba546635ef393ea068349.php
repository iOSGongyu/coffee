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
    $(function(){
        var news_top = $("#news").offset().top;
        var ser_top = $("#ser").offset().top;
        var con_top = $("#con").offset().top;
        var job_top = $("#job").offset().top;
        var Head_top = $("#AHaed").offset().top;
        //alert(tops);
        $(window).scroll(function(){

            var scroH = $(this).scrollTop();
            if (scroH>80){
                $(".A_nav").css("display","block");
            }else{
                $(".A_nav").css("display","none");
            }


            if(scroH>=job_top){
                set_cur(".job");

            }else if(scroH>=con_top){
                set_cur(".con");

            }else if(scroH>=ser_top){
                set_cur(".ser");
            }else if(scroH>=news_top){
                set_cur(".news");
            }
        });


        $(".A_nav li").click(function() {
            var el = $(this).attr('class');

            $('html, body').animate({
                scrollTop: $("#"+el).offset().top
            });
        });




        function set_cur(n){
            if($(".A_nav li").hasClass("cur")){
                $(".A_nav li").removeClass("cur");
            }
            $(".A_nav li"+n).addClass("cur");
        }
    });

</script>
<ul class="A_nav">
    <li class="AHaed"></li>
    <li class="news"></li>
    <li class="ser"></li>
    <li class="con"></li>
    <li class="job"></li>
</ul>
<div class="Zyflash" style="background:url(<?php echo ($url_ali); ?>images/r2_c1.jpg) no-repeat center bottom;"></div>
<div class="AboutTop" id="news">
    <div class="AboutBody1" id="AboutBody1">
        <div class="why">
            <img src="<?php echo ($url_ali); ?>images/who.png" />
        </div>
        <div class="whyBody">
            某某网络是一家专注于高品质品牌设计和互动整合推广的整合营销公司，以领先的设计水平和技术实力，打造行业品牌、树立某某形象，为客户提供网站建设与视觉设计开发、移动互联产品和品牌整合营销推广、电商产品运营推广、三维互动互联网新技术应用为一体的创新级高端品牌网站建设服务。作为知名强势的网络整包服务公司，我们以领先的互联网技术、优秀的创意设计、独特的品牌营销战略为拥有国际雄心的中国民营企业提供更好的全方位网络品牌解决方案，以客户的口碑塑造某某品牌，携手广大客户，共同发展进步。
        </div>
        <div class="whyLw">
            领悟企业文化的核心 塑造准确的品牌形象
            <br /> 替品牌讲一个好听的故事，就是我们一直在做的事情。
        </div>
        <div class="cpt">
            <img src="<?php echo ($url_ali); ?>images/cpts.png" />
        </div>
        <div class="znw">
            <img src="<?php echo ($url_ali); ?>images/ztes.png" />
        </div>
        <div class="yws1">
            我们的
            <b>愿景</b>：成为最受人尊敬、最具影响力的互联网企业
        </div>
        <div class="yws2">
            我们将以诚实守信的操守、共同发展的理念，长远的眼光建立公司的品牌
        </div>
        <div class="yws3">
            我们的
            <b>使命</b>：提升企业品牌形象获得最大的价值
        </div>
        <div class="yws4">
            以高品质的服务 / 稳健的技术 / 向用户提供丰富 / 可靠的互联网产品
            <br /> 持续关注新的互联网走向 / 积极探索新的用户需求 / 不断为用户提供创新的业务
            <br /> 为企业搭建优秀的网络平台 / 捕捉有效的客户信息 / 促进企业经济的快速发展
        </div>
        <div class="yws5">
            我们的
            <b>价值观</b>：诚信、专注、尽责、创新
        </div>
        <div class="ms">
            <img src="<?php echo ($url_ali); ?>images/mosver.jpg" />
        </div>
    </div>
    <script type="text/javascript" src="js/about.js"></script>
</div>
<div class="AboutCom" id="ser">
    <div class="AboutBody2" id="AboutBody2">
        <div class="titles"></div>
        <div class="titleEn"></div>
        <div class="titleCom"></div>
        <div class="AcBody1">
            <h3 class="co1">十年行业专注</h3> 在过去十年的服务中，我们总结出一套行之有效地售前、售中、售后管理经验，使客户在与我们业务合作的过程中更为通畅、更为合谐。
        </div>
        <div class="AcBody2">
            <h3 class="co2">标准合作流程</h3> 项目的工作繁杂、琐碎、专业，为了让我们的客户拥有轻松的项目实施体验，我们设置了专门的项目管理中心，采用专职的项目经理负责制，为您全程跟进项目。
        </div>
        <div class="AcBody3">
            <h3 class="co3">专业设计团队</h3> 技术团队工作两年以上有10多名，技术创意非凡，他们在技术上有着出色的表现以及丰富的实战经验，根据客户要求，将策划、设计完美结合，让您的网站与众不同。
        </div>
        <div class="AcBody4">
            <h3 class="co4">千家成功案例</h3> 我们以优异的业绩，赢得了河南工信厅海南大学、城际铁路、中粮集团、东方今典集团、长通实业等知名企业及单位的合作。
        </div>
        <div class="AcBody5">
            <h3 class="co5">优秀业务团队</h3> 我们拥有高素质的专业销售团队，在整个合作过程中都会全程跟随，他们将全权代表我们为您处理商务合作上的问题，并调动内部资源为您服务。
        </div>
        <div class="AcBody6">
            <h3 class="co6">完善售后服务</h3> 我们始终秉承“客户为尊，服务到位”的宗旨，售前、售中、售后不间断的服务体系，为客户提供实实在在的“有形服务”，对客户任何建议和评价给予最大的关注。
        </div>
        <div class="no1">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/no1.png" border="0" /></a>
        </div>
        <div class="no2">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/02.png" border="0" /></a>
        </div>
        <div class="no3">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/no3.png" border="0" /></a>
        </div>
        <div class="no4">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/04.png" border="0" /></a>
        </div>
        <div class="no5">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/no5.png" border="0" /></a>
        </div>
        <div class="no6">
            <a href="javascript:"><img src="<?php echo ($url_ali); ?>images/06.png" border="0" /></a>
        </div>
        <div class="Aleft"></div>
    </div>
</div>
<div class="AboutComBottom">
    <div class="AboutBody" id="con">
        <div class="AboutBody4" id="AboutBody3">
            <div class="AheadTitle">
                <img src="<?php echo ($url_ali); ?>images/zonton.png" />
            </div>
            <div class="AheadCom">
                公司核心成员由专业知识型并热爱IT行业的网络技术人员组成，我们的团队是一支育满 活力的强大生力军，热爱工作，热爱生活，具有创新意识的年劝力量，并对于整合相关企业互联网营销业务有独到见解，兢兢业业，协同互助，尽善、尽美。
            </div>
            <div class="team1">
                <img src="<?php echo ($url_ali); ?>images/lys.png" />
                <div class="teamTitle">
                    创意设计师（罗X胜）
                    <br />Design Department
                </div>
            </div>
            <div class="team2">
                <img src="<?php echo ($url_ali); ?>images/jbs.png" />
                <div class="teamTitle">
                    技术工程师（江X斌）
                    <br />Technical engineering
                </div>
            </div>
            <div class="team3">
                <img src="<?php echo ($url_ali); ?>images/wjw.png" />
                <div class="teamTitles">
                    软件开发工程师（王X文）
                    <br />Software development
                </div>
            </div>
            <div class="team4">
                <img src="<?php echo ($url_ali); ?>images/wzl.png" />
                <div class="teamTitle">
                    技术工程师（胡X林）
                    <br />Marketing
                </div>
            </div>
            <div class="team5">
                <img src="<?php echo ($url_ali); ?>images/xgs.png" />
                <div class="teamTitle">
                    电子商务师（王X权）
                    <br />E-commerce division
                </div>
            </div>
            <div class="team6">
                <img src="<?php echo ($url_ali); ?>images/wys.png" />
                <div class="teamTitle">
                    程序开发工程师（王X越）
                    <br />Programmer
                </div>
            </div>
            <div class="team7">
                <img src="<?php echo ($url_ali); ?>images/lls.png" />
                <div class="teamTitle">
                    客户服务（李X琳）
                    <br />Technical engineering
                </div>
            </div>
            <div class="team8 socialicons">
                <img src="<?php echo ($url_ali); ?>images/jj.png" />
                <div class="teamTitle">
                    YOU
                    <br />
                    <font class="Tecoms">优秀源于平凡</font>
                </div>
            </div>
            <div class="team9">
                <img src="<?php echo ($url_ali); ?>images/he.png" />
                <div class="teamTitle">
                    客户服务（唐X清）
                    <br />Account Service
                </div>
            </div>
        </div>
    </div>
</div>
<div class="AboutBottom" id="job">
    <div class="AboutBody3">
        <div class="AboutBodyWoBig" id="bigs">
            <img src="<?php echo ($url_ali); ?>images/wtop.jpg" />
            <img src="<?php echo ($url_ali); ?>images/wtops.jpg" id="Abouts" />
            <div class="wTop">
                <div class="bigfint">
                    0773-5828841
                </div>
                <br /> 海南某某公司
                <br /> 地址：上海市国贸酒店
                <br /> 邮箱：376898816@qq.com
                <br />
                <br /> 网建部
                <br /> 售前咨询：0371-88888888
                <br /> 技术咨询：0371-88888888
                <br /> 售后咨询：0371-88888888
                <br />
                <br /> 设计部：
                <br /> 咨询电话：0371-88888888
                <br />
                <br /> 电商部：
                <br /> 咨询电话：0371-88888888
            </div>
            <div class="wTops">
                <div class="headTop">
                    <div class="headAleft">
                        把您的需求提交给我们，我们将尽快与您联系！
                    </div>
                    <div class="headAright">
                        手机体验版
                    </div>
                </div>
                <form action="#">
                    <div class="forms">
                        <div class="formsLeft">
                            <div class="formsList">
                                <div class="formsL">
                                    阁下尊称
                                </div>
                                <div class="formsR">
                                    <label> <input type="text" name="textfield" /> </label>
                                </div>
                            </div>
                            <div class="formsList">
                                <div class="formsL">
                                    联系电话
                                </div>
                                <div class="formsR">
                                    <label> <input type="text" name="textfield2" /> </label>
                                </div>
                            </div>
                            <div class="formsList">
                                <div class="formsL">
                                    电子邮箱
                                </div>
                                <div class="formsR">
                                    <label> <input type="text" name="textfield" /> </label>
                                </div>
                            </div>
                        </div>
                        <div class="formsRight">
                            <img src="<?php echo ($url_ali); ?>images/ewm.gif" />
                        </div>
                        <div class="inputs">
                            <div class="inputsL">
                                留言信息
                            </div>
                            <textarea name=""></textarea>
                        </div>
                        <div class="and">
                            <input name="image" type="image" src="<?php echo ($url_ali); ?>images/bsut.gif" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="AboutBodyWork" id="smalls">
            <div class="tops">
                您可以随时通过电话或邮件与我们联系，或把您的需求提交给我们
            </div>
            <div class="ans">
                <img src="<?php echo ($url_ali); ?>images/ans.gif" id="ans" />
            </div>
            <div class="Wobodys">
                海南市某某公司
                <br /> 地址：上海市国贸酒店
                <br /> 邮箱：376898816@qq.com
                <br />
                <br /> 网建部
                <br /> 售前咨询：0371-88888888
                <br /> 技术咨询：0371-88888888
                <br /> 售后咨询：0371-88888888
                <br />
                <br /> 设计部：
                <br /> 咨询电话：0371-88888888
                <br />
                <br /> 电商部：
                <br /> 咨询电话：0371-88888888
            </div>
            <div class="Wobodydate">
                我们的工作从周一至周五（8：30am-18:00Pm）
                <br /> 观迎资询我们！
            </div>
        </div>
        <script type="text/javascript">

            $(document).ready(function(){

                $("#ans").click(function() {
                    $("#bigs").css("display","block");
                    $("#smalls").css("display","none");
                });



                $("#Abouts").click(function() {
                    $("#bigs").css("display","none");
                    $("#smalls").css("display","block");
                });


            });
        </script>
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