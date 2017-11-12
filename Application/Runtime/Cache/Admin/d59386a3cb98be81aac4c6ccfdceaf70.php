<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <title>二当家的CMS后台系统</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="<?php echo ($url_admin); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/ace.min.css" />
    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo ($url_admin); ?>assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="<?php echo ($url_admin); ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="<?php echo ($url_admin); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo ($url_admin); ?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default" id="navbar">
<script type="text/javascript">
    try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

<div class="navbar-container" id="navbar-container">
<div class="navbar-header pull-left">
    <a href="#" class="navbar-brand">
        <small>
            <i class="icon-leaf"></i>
            二当家的 Admin
        </small>
    </a><!-- /.brand -->
</div><!-- /.navbar-header -->

<div class="navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
<li class="grey">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-tasks"></i>
        <span class="badge badge-grey">4</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-ok"></i>
            4 Tasks to complete
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Software Update</span>
                    <span class="pull-right">65%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:65%" class="progress-bar "></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Hardware Upgrade</span>
                    <span class="pull-right">35%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Unit Testing</span>
                    <span class="pull-right">15%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Bug Fixes</span>
                    <span class="pull-right">90%</span>
                </div>

                <div class="progress progress-mini progress-striped active">
                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                See tasks with details
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="purple">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-bell-alt icon-animated-bell"></i>
        <span class="badge badge-important">8</span>
    </a>

    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-warning-sign"></i>
            8 Notifications
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                    <span class="pull-right badge badge-info">+12</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="btn btn-xs btn-primary icon-user"></i>
                Bob just signed up as an editor ...
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                    <span class="pull-right badge badge-success">+8</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                    <span class="pull-right badge badge-info">+11</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                See all notifications
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="green">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-envelope icon-animated-vertical"></i>
        <span class="badge badge-success">5</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-envelope-alt"></i>
            5 Messages
        </li>

        <li>
            <a href="#">
                <img src="<?php echo ($url_admin); ?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="<?php echo ($url_admin); ?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="<?php echo ($url_admin); ?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="inbox.html">
                See all messages
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="<?php echo ($url_admin); ?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

        <i class="icon-caret-down"></i>
    </a>

    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
        <li>
            <a href="#">
                <i class="icon-cog"></i>
                Settings
            </a>
        </li>

        <li>
            <a href="#">
                <i class="icon-user"></i>
                Profile
            </a>
        </li>

        <li class="divider"></li>

        <li>
            <a href="#" onclick="logout();">
                <i class="icon-off"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul><!-- /.ace-nav -->
</div><!-- /.navbar-header -->
</div><!-- /.container -->
</div>
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>
                <div class="sidebar" id="sidebar">
<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'fixed')
    } catch (e) {
    }
</script>
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div>
<!-- #sidebar-shortcuts -->

<ul class="nav nav-list" id="sidebar-nav">
<li class="sidebar-dashboard <?php if($leftSadebarActive == 1): ?>active open<?php endif; ?>">
    <a href="http://www.cms2.cn/Admin/index/">
        <i class="icon-dashboard"></i>
        <span class="menu-text"> 控制面板 </span>
    </a>
</li>

<li class="sidebar-user-manage <?php if($leftUsersManager == 1): ?>active open<?php endif; ?>" style="display: none;">
    <a href="#" class="dropdown-toggle">
        <i class="green icon-user bigger-120"></i>
        <span class="menu-text">用户管理 </span>
        <b class="arrow icon-angle-down"></b>
    </a>
    <ul class="submenu" >
        <li <?php if($leftUsers == 1): ?>class="active open"<?php endif; ?>>
            <a href="#" class="dropdown-toggle">
                <i class="icon-double-angle-right"></i>
                查看用户
                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li <?php if($leftAgentUserList == 1): ?>class="active"<?php endif; ?>>
                    <a href="javascript:void(0);" onclick="changeagentUserRecords()">
                        <i class="icon-leaf"></i>
                        代理商用户列表
                    </a>
                </li>
                <li <?php if($commonUserList == 1): ?>class="active"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
                    <a href="javascript:void(0);" onclick="changecommonUserRecords()">
                        <i class="icon-comments"></i>
                        普通用户列表
                    </a>
                </li>

                <li <?php if($expand == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-pencil"></i>
                        拓展功能
                 <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li <?php if($leftInvitationLists == 1): ?>class="active"<?php endif; ?>>
                            <a href="javascript:void(0);" onclick="changeinvitationRecords()">
                                <i class="icon-plus"></i>
                                邀请码列表
                            </a>
                        </li>

                        <li <?php if($leftInvitationAdd == 1): ?>class="active"<?php endif; ?>>
                            <a href="http://www.cms2.cn/Admin/User/invitationAdd">
                                <i class="icon-eye-open"></i>
                                添加邀请码
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


    </ul>
</li>

<li <?php if($leftCategoryManager == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
    <a href="#" class="dropdown-toggle">
        <i class="icon-file-alt"></i>
			<span class="menu-text">
			分类管理
			</span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li <?php if($leftCategoryList == 1): ?>class="active"<?php endif; ?>>
            <a href="javascript:void(0);" onclick="changeCategoryRecords()">
                <i class="icon-double-angle-right"></i>
                分类列表
            </a>
        </li>

        <li <?php if($leftCategoryAdd == 1): ?>class="active"<?php endif; ?>>
            <a href="http://www.cms2.cn/Admin/Category/categoryAdd">
                <i class="icon-double-angle-right"></i>
                添加分类
            </a>
        </li>
    </ul>
</li>

<!--<li <?php if($leftLearnManager == 1): ?>class="active open"<?php endif; ?>>-->
<li <?php if($leftLearnManager == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 案例管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li <?php if($leftLearnList == 1): ?>class="active"<?php endif; ?>>
        <a href="javascript:void(0);" onclick="changeLearnRecords()">
            <i class="icon-double-angle-right"></i>
            案例列表
        </a>
        </li>

        <li <?php if($leftLearnAdd == 1): ?>class="active"<?php endif; ?>>
            <a href="http://www.cms2.cn/Admin/Learn/learnInformationAdd">
                <i class="icon-double-angle-right"></i>
                添加案例
            </a>
        </li>
    </ul>
</li>

<li <?php if($leftWechatManager == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
<a href="#" class="dropdown-toggle">
    <i class="icon-file-alt"></i>
			<span class="menu-text">
			tag管理
			</span>

    <b class="arrow icon-angle-down"></b>
</a>

<ul class="submenu">
    <li <?php if($leftWechatList == 1): ?>class="active"<?php endif; ?>>
    <a href="javascript:void(0);" onclick="changeWechatRecords()">
        <i class="icon-double-angle-right"></i>
        tag列表
    </a>
    </li>

    <li <?php if($leftWechatAdd == 1): ?>class="active"<?php endif; ?>>
    <a href="http://www.cms2.cn/Admin/Wechat/wechatAdd">
        <i class="icon-double-angle-right"></i>
        添加tag
    </a>
    </li>

</ul>
</li>

<li <?php if($leftNewsManager == 1): ?>class="active open"<?php endif; ?>  >
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 新闻管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li <?php if($leftNews == 1): ?>class="active open"<?php endif; ?>>
        <a href="#" class="dropdown-toggle">
        <i class="icon-pencil"></i>

        查看新闻
        <b class="arrow icon-angle-down"></b>
        </a>

            <ul class="submenu">
                <li <?php if($leftNewsList == 1): ?>class="active"<?php endif; ?>>
                <a href="javascript:void(0);" onclick="changenewsRecords()">
                <i class="icon-eye-open"></i>
                新闻列表
                </a>
                </li>

                <!--<li <?php if($leftNoticeList == 1): ?>class="active"<?php endif; ?>>-->
                <!--<a href="javascript:void(0);" onclick="changenoticeRecords()">-->
                <!--<i class="icon-eye-open"></i>-->
                <!--公告列表-->
                <!--</a>-->
                <!--</li>-->

                <!--<li <?php if($leftActivityList == 1): ?>class="active"<?php endif; ?>>-->
                <!--<a href="javascript:void(0);" onclick="changeactivityRecords()">-->
                    <!--<i class="icon-eye-open"></i>-->
                    <!--活动列表-->
                <!--</a>-->
                <!--</li>-->
            </ul>
        </li>

        <li <?php if($leftNewsAdd == 1): ?>class="active"<?php endif; ?>>
            <a href="http://www.cms2.cn/Admin/News/newsAdd">
                <i class="icon-double-angle-right"></i>
                添加新闻
            </a>
        </li>


    </ul>
</li>

<li <?php if($leftOrderManager == 1): ?>class="active open"<?php endif; ?> style="display:none;">
    <a href="#" class="dropdown-toggle">
        <i class="icon-shopping-cart"></i>
        <span class="menu-text"> 订单管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li <?php if($leftOrder == 1): ?>class="active"<?php endif; ?>>
            <a href="javascript:void(0);" onclick="changeOrderRecords()">
                <i class="icon-double-angle-right"></i>
                订单列表
            </a>
        </li>


    </ul>
</li>
<li <?php if($leftAdminUserManager == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
    <a href="#" class="dropdown-toggle">
        <i class="icon-star orange"></i>
        <span class="menu-text"> 网站管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li <?php if($leftAdminUserList == 1): ?>class="active"<?php endif; ?>>
            <a href="javascript:void(0);" onclick="changeWebRecords()">
                <i class="icon-double-angle-right"></i>
                管理员列表
            </a>
        </li>
        <li <?php if($leftAdminUserAdd == 1): ?>class="active"<?php endif; ?> >
            <a href="http://www.cms2.cn/Admin/Web/userAdd" class="dropdown-toggle">
                <i class="icon-plus"></i>
                添加管理员
            </a>
        </li>

        <li <?php if($leftAdminMessageList == 1): ?>class="active"<?php endif; ?> >
        <a href="javascript:void(0);" class="dropdown-toggle" onclick="changeMessageRecords()">
            <i class="icon-plus"></i>
            留言列表
        </a>
        </li>
        <li <?php if($leftAdminSeo == 1): ?>class="active open"<?php endif; ?> <?php if($_SESSION['role'] != 0): ?>style="display:none"<?php endif; ?>>
        <a href="#" class="dropdown-toggle">
            <i class="icon-pencil"></i>
            SEO功能
            <b class="arrow icon-angle-down"></b>
        </a>
            <ul class="submenu">
                <li <?php if($leftAdminSeoLists == 1): ?>class="active"<?php endif; ?>>
                <a href="http://www.cms2.cn/Admin/Seo/lists" >
                    <i class="icon-plus"></i>
                    SEO列表
                </a>
                </li>

                <li <?php if($leftAdminSeoAdd == 1): ?>class="active"<?php endif; ?>>
                <a href="http://www.cms2.cn/Admin/Seo/seoAdd">
                    <i class="icon-eye-open"></i>
                    添加SEO
                </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li <?php if($calendar == 1): ?>class="active"<?php endif; ?>>
    <a href="http://www.cms2.cn/Admin/Other/calendar">
        <i class="icon-calendar"></i>
        <span class="menu-text">
		Calendar
		<span class="badge badge-transparent tooltip-error"title="2&nbsp;Important&nbsp;Events">
		<i class="icon-warning-sign red bigger-130"></i></span>
		</span>
    </a>
</li>
</ul>
<!-- /.nav-list -->

<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>

<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed')
    } catch (e) {
    }
</script>
</div>
<script>
    function changeagentUserRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/User/agentUserList';
            }
        })
    }
    function changecommonUserRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/User/commonUserList';
            }
        })
    }
    function changeinvitationRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/User/invitationLists';
            }
        })
    }
    function changeCategoryRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                if(rs==1){
                    location.href='http://www.cms2.cn/Admin/Category/lists';
                }
         })
    }
            function changeLearnRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Learn/lists';
                    }
                })
            }

            function changeWechatRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Wechat/lists';
                    }
                })
            }
            function changeBrandRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Wechat/brandLists';
                    }
                })
            }

    function changenoticeRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/News/noticeLists';
            }
        })
    }
    function changeactivityRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/News/activityList';
            }
        })
    }
    function changenewsRecords(){
        var records = 10;
        var data={"records":records};
        $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
            if(rs==1){
                location.href='http://www.cms2.cn/Admin/News/lists';
            }
        })
    }
            function changeOrderRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Order/lists';
                    }
                })
            }
            function changeWebRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Web/userList';
                    }
                })
            }
            function changeMessageRecords(){
                var records = 10;
                var data={"records":records};
                $.get('http://www.cms2.cn/Admin/Ajax/changeRecords',data,function(rs){
                    if(rs==1){
                        location.href='http://www.cms2.cn/Admin/Web/messageLists';
                    }
                })
            }
</script>




                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Calendar</li>
                        </ul><!-- .breadcrumb -->

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="icon-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- #nav-search -->
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Full Calendar
                                <small>
                                    <i class="icon-double-angle-right"></i>
                                    with draggable and editable events
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="space"></div>

                                        <div id="calendar"></div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="widget-box transparent">
                                            <div class="widget-header">
                                                <h4>Draggable events</h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <div id="external-events">
                                                        <div class="external-event label-grey" data-class="label-grey">
                                                            <i class="icon-move"></i>
                                                            My Event 1
                                                        </div>

                                                        <div class="external-event label-success" data-class="label-success">
                                                            <i class="icon-move"></i>
                                                            My Event 2
                                                        </div>

                                                        <div class="external-event label-danger" data-class="label-danger">
                                                            <i class="icon-move"></i>
                                                            My Event 3
                                                        </div>

                                                        <div class="external-event label-purple" data-class="label-purple">
                                                            <i class="icon-move"></i>
                                                            My Event 4
                                                        </div>

                                                        <div class="external-event label-yellow" data-class="label-yellow">
                                                            <i class="icon-move"></i>
                                                            My Event 5
                                                        </div>

                                                        <div class="external-event label-pink" data-class="label-pink">
                                                            <i class="icon-move"></i>
                                                            My Event 6
                                                        </div>

                                                        <div class="external-event label-info" data-class="label-info">
                                                            <i class="icon-move"></i>
                                                            My Event 7
                                                        </div>

                                                        <label>
                                                            <input type="checkbox" class="ace ace-checkbox" id="drop-remove" />
                                                            <span class="lbl"> Remove after drop</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div><!-- /.main-content -->

                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                    </div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="default" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div>
                </div><!-- /#ace-settings-container -->
            </div><!-- /.main-container-inner -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo ($url_admin); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo ($url_admin); ?>assets/js/typeahead-bs2.min.js"></script>

        <!-- page specific plugin scripts -->

        <script src="<?php echo ($url_admin); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo ($url_admin); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo ($url_admin); ?>assets/js/fullcalendar.min.js"></script>
        <script src="<?php echo ($url_admin); ?>assets/js/bootbox.min.js"></script>

        <!-- ace scripts -->

        <script src="<?php echo ($url_admin); ?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo ($url_admin); ?>assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->

        <script type="text/javascript">
            jQuery(function($) {

                /* initialize the external events
                 -----------------------------------------------------------------*/

                $('#external-events div.external-event').each(function() {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    };

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 999,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    });

                });




                /* initialize the calendar
                 -----------------------------------------------------------------*/

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();


                var calendar = $('#calendar').fullCalendar({
                    buttonText: {
                        prev: '<i class="icon-chevron-left"></i>',
                        next: '<i class="icon-chevron-right"></i>'
                    },
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            className: 'label-important'
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            className: 'label-success'
                        },
                        {
                            title: 'Some Event',
                            start: new Date(y, m, d - 3, 16, 0),
                            allDay: false
                        }]
                    ,
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');
                        var $extraEventClass = $(this).attr('data-class');


                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        if ($extraEventClass)
                            copiedEventObject['className'] = [$extraEventClass];

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                    ,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {

                        bootbox.prompt("New Event Title:", function(title) {
                            if (title !== null) {
                                calendar.fullCalendar('renderEvent',
                                        {
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },
                                true // make the event "stick"
                                        );
                            }
                        });


                        calendar.fullCalendar('unselect');

                    }
                    ,
                    eventClick: function(calEvent, jsEvent, view) {

                        var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
                        form.append("<input class='middle' autocomplete=off type=text value='" + calEvent.title + "' /> ");
                        form.append("<button type='submit' class='btn btn-sm btn-success'><i class='icon-ok'></i> Save</button>");

                        var div = bootbox.dialog({
                            message: form,
                            buttons: {
                                "delete": {
                                    "label": "<i class='icon-trash'></i> Delete Event",
                                    "className": "btn-sm btn-danger",
                                    "callback": function() {
                                        calendar.fullCalendar('removeEvents', function(ev) {
                                            return (ev._id == calEvent._id);
                                        })
                                    }
                                },
                                "close": {
                                    "label": "<i class='icon-remove'></i> Close",
                                    "className": "btn-sm"
                                }
                            }

                        });

                        form.on('submit', function() {
                            calEvent.title = form.find("input[type=text]").val();
                            calendar.fullCalendar('updateEvent', calEvent);
                            div.modal("hide");
                            return false;
                        });


                        //console.log(calEvent.id);
                        //console.log(jsEvent);
                        //console.log(view);

                        // change the border color just for fun
                        //$(this).css('border-color', 'red');

                    }

                });


            })
        </script>
    </body>
</html>