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
    try{ace.settings.check('main-container' , 'fixed')}catch(e){}
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
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>
        </li>

        <li>
            <a href="#">Tables</a>
        </li>
        <li class="active">Simple &amp; Dynamic</li>
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
        案例管理
        <small>
            <i class="icon-double-angle-right"></i>
           添加案例
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">

        <form class="form-horizontal" role="form" enctype="multipart/form-data" action="http://www.cms2.cn/Admin/Ajax/uploads" method="post" id="addBussiness">

            <div class="form-group">
                <div class="chosen-container chosen-container-multi" >
                    <label for="form-field-select-1" class="col-sm-3 control-label no-padding-right">分类：</label>
                    <div class="col-sm-2">
                        <select id="categorySelect" class="form-control" name="categoryId">
                            <?php if(is_array($categoryList)): foreach($categoryList as $key=>$row): ?><option value="<?php echo ($row["id"]); ?>"><?php echo ($row["categoryname"]); ?></option><?php endforeach; endif; ?>
                        </select>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="form-field-1" class="col-sm-3 control-label no-padding-right">标题：</label>

                <div class="col-sm-4">
                    <input type="text" class="col-xs-10 col-sm-6" placeholder="标题" name="title" id="title">
                </div>
            </div>
            <div class="form-group">
                <label for="form-field-1" class="col-sm-3 control-label no-padding-right">描述：</label>

                <div class="col-sm-4">
                    <input type="text" class="col-xs-10 col-sm-6" placeholder="描述" name="describe" id="describe">
                </div>
            </div>

            <div class="form-group">
                <label for="form-field-1" class="col-sm-3 control-label no-padding-right">图片：</label>

                <div class="col-sm-4" style='width:300px'>
                    <input type="file" id="id-input-file-1" name="img"/>
                </div>
            </div>


            <div class="form-group">
                <label for="form-field-1" class="col-sm-3 control-label no-padding-right">内容：</label>
                <div class="wysiwyg-editor" id="editor1" name="editor1">
                    
                </div>
                <input type='hidden' name='businessInfo' id='businessInfo' value=''>
            </div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button type="button" class="btn btn-info" onclick="copyContentToHidden();">
                        <i class="icon-ok bigger-110"></i>
                        添加
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button type="reset" class="btn">
                        <i class="icon-undo bigger-110"></i>
                        重置
                    </button>
                </div>
            </div>

        </form>
    </div>
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

<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document) document.write("<script src='<?php echo ($url_admin); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo ($url_admin); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="<?php echo ($url_admin); ?>assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="<?php echo ($url_admin); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/flot/jquery.flot.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->

<script src="<?php echo ($url_admin); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/ace.min.js"></script>
        <!--通用Js-->
<script src="<?php echo ($url_admin); ?>js/common.js"></script>
</body>
</html>
    <!-- inline scripts related to this page -->
<script src="<?php echo ($url_admin); ?>assets/js/ace-extra.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/markdown/markdown.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/jquery.hotkeys.min.js"></script>
<!--<script src="<?php echo ($url_admin); ?>assets/js/bootstrap-wysiwyg.min.js"></script>-->
<script src="<?php echo ($url_admin); ?>assets/js/uncompressed/bootstrap-wysiwyg.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/bootbox.min.js"></script>
<script src="<?php echo ($url_admin); ?>assets/js/ace-elements.min.js"></script>
    <script type="text/javascript">
            jQuery(function($){

                function showErrorAlert (reason, detail) {
                    var msg='';
                    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
                    else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
                            '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
                }

                //$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

                //but we want to change a few buttons colors for the third style
                $('#editor1').ace_wysiwyg({
                    toolbar:
                            [
                                'font',
                                null,
                                'fontSize',
                                null,
                                {name:'bold', className:'btn-info'},
                                {name:'italic', className:'btn-info'},
                                {name:'strikethrough', className:'btn-info'},
                                {name:'underline', className:'btn-info'},
                                null,
                                {name:'insertunorderedlist', className:'btn-success'},
                                {name:'insertorderedlist', className:'btn-success'},
                                {name:'outdent', className:'btn-purple'},
                                {name:'indent', className:'btn-purple'},
                                null,
                                {name:'justifyleft', className:'btn-primary'},
                                {name:'justifycenter', className:'btn-primary'},
                                {name:'justifyright', className:'btn-primary'},
                                {name:'justifyfull', className:'btn-inverse'},
                                null,
                                {name:'createLink', className:'btn-pink'},
                                {name:'unlink', className:'btn-pink'},
                                null,
                                {name:'insertImage', className:'btn-success'},
                                null,
                                'foreColor',
                                null,
                                {name:'undo', className:'btn-grey'},
                                {name:'redo', className:'btn-grey'}
                            ],
                    'wysiwyg': {
                        fileUploadError: showErrorAlert
                    }
                }).prev().addClass('wysiwyg-style2');



                $('#editor2').css({'height':'200px'}).ace_wysiwyg({
                    toolbar_place: function(toolbar) {
                        return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar).children(0).addClass('inline');
                    },
                    toolbar:
                            [
                                'bold',
                                {name:'italic' , title:'Change Title!', icon: 'icon-leaf'},
                                'strikethrough',
                                null,
                                'insertunorderedlist',
                                'insertorderedlist',
                                null,
                                'justifyleft',
                                'justifycenter',
                                'justifyright'
                            ],
                    speech_button:false
                });


                $('[data-toggle="buttons"] .btn').on('click', function(e){
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    var toolbar = $('#editor1').prev().get(0);
                    if(which == 1 || which == 2 || which == 3) {
                        toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
                        if(which == 1) $(toolbar).addClass('wysiwyg-style1');
                        else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
                    }
                });




                //Add Image Resize Functionality to Chrome and Safari
                //webkit browsers don't have image resize functionality when content is editable
                //so let's add something using jQuery UI resizable
                //another option would be opening a dialog for user to enter dimensions.
                if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {

                    var lastResizableImg = null;
                    function destroyResizable() {
                        if(lastResizableImg == null) return;
                        lastResizableImg.resizable( "destroy" );
                        lastResizableImg.removeData('resizable');
                        lastResizableImg = null;
                    }

                    var enableImageResize = function() {
                        $('.wysiwyg-editor')
                                .on('mousedown', function(e) {
                                    var target = $(e.target);
                                    if( e.target instanceof HTMLImageElement ) {
                                        if( !target.data('resizable') ) {
                                            target.resizable({
                                                aspectRatio: e.target.width / e.target.height,
                                            });
                                            target.data('resizable', true);

                                            if( lastResizableImg != null ) 
                                            lastResizableImg = target;
                                        }
                                    }
                                })
                                .on('click', function(e) {
                                    if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
                                        destroyResizable();
                                    }
                                })
                                .on('keydown', function() {
                                    destroyResizable();
                                });
                    }

                    enableImageResize();

                    /**
                     //or we can load the jQuery UI dynamically only if needed
                     if (typeof jQuery.ui !== 'undefined') enableImageResize();
                     else );
				} else	enableImageResize();
			});
		}
                     */
                }


            });

</script>
<script type="text/javascript">
    jQuery(function($) {
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false
        }).on('change', function(){
        });
    });
</script>
<script>
    function copyContentToHidden(){
        var infoContent = $("#editor1").html();//获取editor里内容
        var businessInfo = $("#businessInfo").val(infoContent);//把获取到的内容赋值给hidden隐藏域

        $("#addBussiness").submit();

    }
</script>