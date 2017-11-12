<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8" />
    <title>首页 - 二当家的CMS企业管理系统</title>
    <meta name="description" content="二当家的CMS企业管理系统,上海网站建设领跑者,高端网站制作品牌服务商,荣获网页设计联盟金牌企业大奖,7年专注高端网站建设、手机移动网站建设、微网站制作,服务器运维,为企业客户的互联网应用提供一站式服务解决方案." />
    <meta name="keywords" content="网站建设,上海网站建设,网站制作,上海网站制作,网站设计,上海网站设计,网页设计,上海网页设计,上海网站建设公司,二当家的CMS企业管理系统" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />

    <link href="<?php echo ($url_ali); ?>css/bootstrap.min.css" rel="stylesheet" />

    <link href="<?php echo ($url_ali); ?>css/index.min.css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="<?php echo ($url_ali); ?>js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="<?php echo ($url_ali); ?>js/jquery.min.js"></script>
    <script src="<?php echo ($url_ali); ?>js/index.min.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.html"><img src="<?php echo ($url_ali); ?>images/logo.png" alt="上海网站建设_网站制作_二当家的CMS企业管理系统" class="img-responsive ori" /></a>
    </div>
    <nav class="menu">
        <ul class="list-inline">
            <?php if(is_array($categoryList)): foreach($categoryList as $key=>$rowcate): ?><li><a><?php echo ($rowcate["categoryname"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </nav>
    <div class="hotline">
        <a href="tel:13671989456" title="网站建设免费咨询热线"><span>13671989456</span></a>
        <u></u>
    </div>
    <div class="menu-icon">
        <a href="tel:13671989456" title="点击直拨网站建设热线"><span class="glyphicon glyphicon-earphone"></span></a>
        <span class="glyphicon glyphicon-th-large"></span>
    </div>
</header>
<div class="welcome">
    <p><u>Loading . . .</u></p>
</div>
<section class="video">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide nth1">
                <div class="box">
                    <div class="left"></div>
                    <div class="right">
                        <span>年专注，网站建设</span>
                        <i></i>
                        <p>始于 2008 - 2015 展望未来<br />专注于设计体验，专业于解决方案</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide nth2">
                <div class="box">
                    <span>设计控，也醉了</span>
                    <i></i>
                    <p>不是非要高大上，只是醉心于设计<br />我们想，再上一个好案例</p>
                </div>
            </div>
            <div class="swiper-slide nth3">
                <div class="box">
                    <div class="top">
                        技术派，论研发
                    </div>
                    <div class="mid"></div>
                    <div class="bottom">
                        我说，业界没有最好的技术，只有最棒的技术开发者
                        <br />定制研发，为您的客户和团队
                    </div>
                </div>
            </div>
            <div class="swiper-slide nth4">
                <div class="box">
                    <div class="top">
                        <span>先入为主，布局未来</span>
                        <i></i>
                    </div>
                    <div class="bottom">
                        全面布局
                        <u>PC</u>端与
                        <u>移动</u>端
                        <br />抢占头等商机
                        <br />基于
                        <u>Html5</u>响应式布局，智能识别多种终端设备
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="innerBox">
        <div class="news">
            <span>NEWS :</span>
            <a href="/news/" title="更多文章动态" class="more" target="_blank">more</a>
            <ul>
                <?php if(is_array($newsList)): foreach($newsList as $key=>$rownews): ?><li><a href="/newsDetail?id=<?php echo ($rownews["id"]); ?>" target="_blank" title="<?php echo ($rownews["title"]); ?>"><?php echo ($rownews["title"]); ?> ...</a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="guide"></div>
        <a class="movedown"></a>
    </div>
</section>
<section class="business">
    <div class="box">
        <div class="caption">
            <i></i>
            <span>我们能做什么</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
            <li class="pc"> <i></i><strong>高端定制网站</strong> <p>企业高端定制网站设计<br />彰显品牌形象</p> </li>
            <li class="mobi"> <i></i><strong>移动网站建设</strong> <p>定制手机网站 / 微网站制作<br />布局移动互联网</p> </li>
            <li class="sys"> <i></i><strong>业务系统研发</strong> <p>基于 B/S 架构的系统研发<br />让业务办公轻松自如</p> </li>
            <li class="app"> <i></i><strong>APP应用程序</strong> <p>基于 iOS / Android 应用开发<br />掌控智能终端时代</p> </li>
            <li class="host"> <i></i><strong>服务器运维</strong> <p>我们不只提供云硬件和网络<br />更加注重技术运维</p> </li>
        </ul>
    </div>
</section>
<section class="cases">
    <div class="box">
        <div class="caption">
            <i></i>
            <span>案例欣赏</span>
            <br class="clear" />
        </div>
        <div class="swiper-container items">
            <div class="swiper-wrapper">
                <?php if(is_array($caseList)): foreach($caseList as $key=>$rowcase): ?><div class="swiper-slide">
                        <a href="/casedetail?id=<?php echo ($rowcase["id"]); ?>" target="_blank"> <img src="/Public/Uploads/<?php echo ($rowcase["img"]); ?>" alt="<?php echo ($rowcase["title"]); ?>" /> <p><?php echo ($rowcase["categoryname"]); ?><br /><strong><?php echo ($rowcase["titlr"]); ?></strong><br /><?php echo ($rowcase["describe"]); ?></p></a>
                    </div><?php endforeach; endif; ?>
            </div>
        </div>
        <a href="/case/" title="欣赏更多网站建设案例" class="more" target="_blank">MORE</a>
    </div>
</section>
<section class="clients">
    <div class="box">
        <div class="caption">
            <i></i>
            <span>他们与二当家的CMS企业管理系统长期合作</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
            <li class="cctv"><span>CCTV影响力视频网站建设</span></li>
            <li class="unicom"><span>中国联通电信卡网站制作</span></li>
            <li class="tsinghua"><span>清华大学国际预科学院网站建设</span></li>
            <li class="cas"><span>中科院力学研究所网站设计</span></li>
            <li class="sipo"><span>国家知识产权局网站建设</span></li>
            <li class="apple"><span>中航苹果官方网站设计</span></li>
            <li class="das"><span>一汽大众汽车门户网站建设</span></li>
            <li class="hunantv"><span>湖南卫视全媒体网站建设</span></li>
            <li class="sino"><span>中环球船务官方网站制作</span></li>
            <li class="report"><span>中国报道信息门户网站建设</span></li>
            <li class="gedu"><span>环球雅思教育门户网站制作</span></li>
            <li class="bgg"><span>京粮集团网站建设</span></li>
            <li class="bsec"><span>北赛电工官方网站设计</span></li>
            <li class="huadan"><span>华丹乳业官方网站建设</span></li>
            <li class="zd"><span>中东集团网站制作</span></li>
        </ul>
    </div>
</section>
<section class="quality">
    <div class="box">
        <div class="caption">
            <i></i>
            <span>不同媒介，同样精彩</span>
            <br class="clear" />
        </div>
        <div class="swiper-container items">
            <div class="swiper-wrapper">
                <div class="swiper-slide nth1">
                    <ul class="list-inline">
                        <li class="mobi"><span>响应式手机网站建设</span></li>
                        <li class="pad"><span>响应式平板网站建设</span></li>
                        <li class="pc"><span>响应式PC网站建设</span></li>
                    </ul>
                    <p>触及视觉灵魂的设计趋势<br />精心布局的用户体验<br />毫无顾忌地通过任何终端<br />呈现在客户的眼前</p>
                </div>
                <div class="swiper-slide nth2">
                    <ul class="list-inline">
                        <li class="ie"><span>兼容微软IE浏览器的网页设计</span></li>
                        <li class="chrome"><span>兼容谷歌Chrome浏览器的网站设计</span></li>
                        <li class="firefox"><span>兼容火狐Firefox浏览器的网页设计</span></li>
                        <li class="safari"><span>兼容苹果Safari浏览器的网站设计</span></li>
                    </ul>
                    <p>Html5 + CSS3 响应式布局<br />卓越的浏览器兼容性<br />因为高端，所以出众</p>
                </div>
                <div class="swiper-slide nth3">
                    <ul class="list-inline">
                        <li class="windows"><span>跨windows平台网站制作</span></li>
                        <li class="ios"><span>跨ios平台网站制作</span></li>
                        <li class="andriod"><span>跨andriod平台网站制作</span></li>
                    </ul>
                    <p>基于 B/S 架构的网站建设<br />无障碍的跨平台应用<br />无须用户下载安装即可使用<br />云端管理，轻松维护</p>
                </div>
            </div>
        </div>
        <a href="http://www.erdangjiade.com/" class="lookall" target="_blank">你以为看到了网站的全部？</a>
    </div>
</section>
<section class="marketing">
    <div class="box">
        <div class="caption">
            <i></i>
            <span>整合营销，抢占商机</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
            <li class="se"> <i></i><strong>搜索引擎</strong> <p>SEO 优化<br />搜索引擎竞价</p> </li>
            <li class="weixin"> <i></i><strong>微信营销</strong> <p>公众账号 / 微网站<br />微盟 ( 微社区 )</p> </li>
            <li class="weibo"> <i></i><strong>微博营销</strong> <p>企业蓝V认证<br />官方微博接入网站</p> </li>
            <li class="sms"> <i></i><strong>消息推送</strong> <p>短信平台接口<br />Email 推送</p> </li>
            <li class="pay"> <i></i><strong>在线支付</strong> <p>支付宝、银联<br />Paypal 接口</p> </li>
            <li class="bbs"> <i></i><strong>论坛聚人</strong> <p>独立开发<br />会员打通</p> </li>
        </ul>
    </div>
</section>
<section class="aboutus">
    <ul class="menu">
        <li>思想</li>
        <li>关于</li>
        <li>荣誉</li>
    </ul>
    <div class="swiper-container items">
        <div class="swiper-wrapper">
            <div class="swiper-slide nth1">
                <strong>厚积薄发</strong>
                <p>登上峰顶，不是为了饱览风光，是为了寻找更高的山峰<br />日出东方，告别了昨天的荣耀，将光芒照向更远的地方<br />一路上，我们更在意如何积累和沉淀</p>
                <u>下一秒，让你看，我们到底有多强</u>
            </div>
            <div class="swiper-slide nth2">
                <strong>二当家的CMS企业管理系统科技</strong>
                <p>成立于2008年，坐落于上海中关村科技园区，是中国优秀的互联网服务提供商。自成立以来，专注于高端网站建设、移动互联应用、B/S架构系统研发、云服务器部署和运维，为企业客户的互联网应用提供一站式服务。</p>
                <p>我们始终坚持以客户需求为导向，为追求用户体验设计，提供有针对性的项目解决方案，二当家的CMS企业管理系统人将不断地超越自我，挑战险峰！</p>
            </div>
            <div class="swiper-slide nth3">
                <strong>放下荣誉，放眼未来</strong>
                <ul>
                    <li>2009年<u>-</u>荣获海淀区创新企业</li>
                    <li>2010年<u>-</u>设计联盟评选为金牌设计企业</li>
                    <li>2010年<u>-</u>荣获中关村高新技术企业</li>
                    <li>2011年<u>-</u>成功注册 &quot; 二当家的CMS企业管理系统 &quot; 商标，树立品牌</li>
                    <li>2013年<u>-</u>已拥有自主知识产权，国家软件著作权达12项之多</li>
                </ul>
            </div>
        </div>
    </div>
    <table class="exp">
        <tbody>
        <tr>
            <td><u>611</u>位企业客户信赖之选</td>
            <td><u>267</u>上市/集团企业设计作品</td>
            <td><u>2010</u>年度金牌设计企业</td>
            <td><u>12</u>项国家软件著作权</td>
            <td><u>96%</u>以上的客户续费率</td>
        </tr>
        </tbody>
    </table>
</section>
<section class="contact">
    <div class="box">
        <div class="above">
            <div class="wechat">
                <img src="<?php echo ($url_ali); ?>images/wechat_code.jpg" alt="扫描关注二当家的CMS企业管理系统微信公众账号" />
            </div>
            <div class="left">
                <a href="tel:13671989456" title="网站制作咨询热线" class="tel"></a>
                <p>中国<u>&middot;</u>上海<u></u>中关村科技园<br />联系电话：13671989456<u>/</u>13671989456<br />地址：海淀区上地东路盈创动力E座905<br />邮编：100085<a href="/job/saleman.html" target="_blank" class="job">[ 工作机会 ]</a></p>
            </div>
            <div class="right">
                Email：826096331@qq.com
                <br />中文域名：二当家的CMS企业管理系统.中国

            </div>
        </div>
    </div>
</section>
<div class="dock">
    <ul class="icons">
        <li class="up"><i></i></li>
        <li class="im"> <i></i><p>网站建设咨询<br />在线沟通，请点我<a href="http://qiao.baidu.com/v3/?module=default&amp;controller=im&amp;action=index&amp;ucid=989741&amp;type=n&amp;siteid=4805" target="_blank">在线咨询</a></p> </li>
        <li class="tel"> <i></i><p>建站咨询热线：<br />13671989456<br />售后电话：<br />13671989456</p> </li>
        <li class="wechat"> <i></i><p><img src="<?php echo ($url_ali); ?>images/wechat_code.jpg" alt="扫描关注网站建设微信公众账号" /></p> </li>
        <li class="down"><i></i></li>
    </ul>
    <a class="switch"></a>
</div>
</body>
</html>