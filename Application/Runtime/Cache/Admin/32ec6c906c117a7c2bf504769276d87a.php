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
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">二当家的</span>
									<span class="white">后台系统</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger" id="errorMessage">
												<i class="icon-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" id="user" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" id="passwd"/>
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="button" class="width-35 pull-right btn btn-sm btn-primary" onclick="login();">
															<i class="icon-key"></i>
															Login
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													I want to register
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															Send Me!
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												Back to login
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="icon-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															Reset
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															Register
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->
        
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
    <script>
       function login(){
           var user = $('#user').val();
           var passwd = $('#passwd').val();
           var data = {"user":user,"passwd":passwd};
           $.get('http://www.cms2.cn/Admin/Login/login',data,function(rs){
               if(rs==1){
                   location.href='http://www.cms2.cn/Admin/Index/index';
               }else{
                   var errorMessage = '<i class="icon-wrench icon-animated-wrench bigger-125"></i><font color="red">用户名或密码不正确哦</font>';
                   $("#errorMessage").html(errorMessage);
               }
           });
       }
    </script>