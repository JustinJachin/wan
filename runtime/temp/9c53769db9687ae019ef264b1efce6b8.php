<?php /*a:5:{s:71:"E:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\index\index.html";i:1558083929;s:70:"E:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\public\top.html";i:1558074794;s:73:"E:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\public\header.html";i:1558076564;s:71:"E:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\public\menu.html";i:1558076634;s:69:"E:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\public\js.html";i:1558075280;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kharna-Admin Dashboard</title>

<!--Favicon -->
<link rel="icon" href="/../static/img/favicon.ico" type="image/x-icon"/>

<!--Bootstrap.min css-->
<link rel="stylesheet" href="/../static/plugins/bootstrap/css/bootstrap.min.css">

<!--Icons css-->
<link rel="stylesheet" href="/../static/css/icons.css">

<!--Style css-->
<link rel="stylesheet" href="/../static/css/style.css">

<!--mCustomScrollbar css-->
<link rel="stylesheet" href="/../static/plugins/scroll-bar/jquery.mCustomScrollbar.css">

<!--Sidemenu css-->
<link rel="stylesheet" href="/../static/plugins/toggle-menu/sidemenu.css">

<!--Chartist css-->
<link rel="stylesheet" href="/../static/plugins/chartist/chartist.css">
<link rel="stylesheet" href="/../static/plugins/chartist/chartist-plugin-tooltip.css">

<!--Full calendar css-->
<link rel="stylesheet" href="/../static/plugins/fullcalendar/stylesheet1.css">

<!--&lt;!&ndash;morris css&ndash;&gt;-->
<!--<link rel="stylesheet" href="/../static/plugins/morris/morris.css">-->
	<block name="topCss">
		<!--morris css-->
		<link rel="stylesheet" href="/../static/plugins/morris/morris.css">
	</block>
</head>

<body class="app ">

<div id="spinner"></div>

<div id="app">
	<div class="main-wrapper" >
		<nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="index.html">
        <img src="/../static/img/brand/logo.png" class="header-brand-img" alt="Kharna-Admin  logo">
    </a>
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                <img src="/../static/img/avatar/avatar-1.jpeg.jpg" alt="profile-user" class="rounded-circle w-32">
                <div class="d-sm-none d-lg-inline-block"><?php echo htmlentities(app('session')->get('admin_name')); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="profile.html" class="dropdown-item has-icon">
                    <i class="ion ion-android-person"></i> Profile
                </a>
                <a href="#" class="dropdown-item has-icon">
                    <i class="ion-ios-redo"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
		<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="/../static/img/avatar/avatar-1.jpeg.jpg" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-white app-sidebar__user-name mt-5"><?php echo htmlentities(app('session')->get('admin_name')); ?></span><br>
                    <span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
                </span>
            </a>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="index.html"><span>Dashboard 01</span></a></li>
                <li><a class="slide-item" href="index2.html"><span>Dashboard 02</span></a></li>
                <li><a class="slide-item" href="index3.html"><span>Dashboard 03</span></a></li>
            </ul>
        </li>
        <li>
            <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Widgets</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="elements.html" class="slide-item"> Elements</a></li>
                <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                <li><a href="toastr.html" class="slide-item"> Toastr</a></li>
                <li><a href="calender.html" class="slide-item"> Calendar</a></li>
                <li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
                <li><a href="modals.html" class="slide-item"> Modals</a></li>
                <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                <li><a href="users.html" class="slide-item"> Users List</a></li>
                <li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
                <li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="icons-ion.html" class="slide-item"> Ion Icons</a></li>
                <li><a href="icons-fontawesome.html" class="slide-item"> Font Awesome</a></li>
                <li><a href="icons-feather.html" class="slide-item"> Feather Awesome</a></li>
                <li><a href="icons-materialdesign.html" class="slide-item"> Material Design</a></li>
                <li><a href="icons-themify.html" class="slide-item"> Themify</a></li>
                <li><a href="icons-simpleline.html" class="slide-item"> Simple line</a></li>
                <li><a href="icons-pe7.html" class="slide-item"> pe7</a></li>
                <li><a href="icons-flag.html" class="slide-item"> Flag Icons</a></li>
                <li><a href="icons-weather.html" class="slide-item"> Weather Icons</a></li>
                <li><a href="icons-typicons.html" class="slide-item"> Typicons</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="table.html" class="slide-item">Basic Tables</a></li>
                <li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="formelements.html" class="slide-item"> Form Elements</a></li>
                <li><a href="formadvanced.html" class="slide-item"> Advanced Form</a></li>
                <li><a href="formeditor.html" class="slide-item"> Form Editor</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
                <li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
                <li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
                <li><a href="echart.html" class="slide-item"> ECharts</a></li>
                <li><a href="chartist.html" class="slide-item"> Chartist</a></li>
                <li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
                <li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="maps.html" class="slide-item"> Google Maps</a></li>
                <li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="profile.html" class="slide-item"> Profile</a></li>
                <li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
                <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                <li><a href="shop.html" class="slide-item"> Shop</a></li>
                <li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
                <li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
                <li><a href="register.html" class="slide-item"> Register</a></li>
                <li><a href="login.html" class="slide-item"> Login</a></li>
                <li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
                <li><a href="reset.html" class="slide-item"> Reset Password</a></li>
                <li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
                <li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
                <li><a href="404.html" class="slide-item"> 404</a></li>
                <li><a href="505.html" class="slide-item"> 505</a></li>
                <li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
            </ul>
        </li>
    </ul>
</aside>
		<block name="bodsy">
			<div class="app-content">
				<section class="section">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
						<li class="breadcrumb-item active text-" aria-current="page">Dashboard 01</li>
					</ol>

					<div class="row">
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">675</h4>
												<small class="text-muted ">Posts</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart1" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">875</h4>
												<small class="text-muted">Clicks</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart2" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">976</h4>
												<small class="text-muted">Shares</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart3" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">418</h4>
												<small class="text-muted">Remarks</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart4" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row ">
						<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Monthly Sales</h4>
								</div>
								<div class="card-body">
									<div id="bar-chart" class="overflow-hidden" > </div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Yearly Template Sales</h4>
								</div>
								<div class="card-body">
									<div id="sales-chart" class="overflow-hidden"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Account Retention</h4>
								</div>
								<div class="card-body">
									<div id="index" class="overflow-hidden h-400 mx-auto text-center " ></div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-xl-8 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="pt-0 pb-0 pl-3 pr-3 card-body">
									<div class="row">
										<div class="col-xs-12 col-lg-5 cover-image weather-radius text-center position-relative transparent" data-image-src="/../static/img/weather.jpg">
											<div class="weather-shade">
												<i class="wi wi-day-sleet text-white"></i>
											</div>
											<div class="card-body mt-5 pt-5">
												<i class="vl_weather-day-rain text-light  mt-5 pt-5 d-block"></i>
											</div>
											<div class="bg-transparent border-0 text-light  pt-4">
												<h3 class="weight300">Sunny Day</h3>
											</div>
										</div>
										<div class="col-xs-12 col-lg-7 widgetb p-0">
											<div class="card-body p-4">
												<h4 class="mb-0">MONDAY <br/>
													<span class="text-muted h5"> 22  October</span>
												</h4>
												<div class="fs-45 text-primary pt-4 ">
													10<sup>o</sup>
													<span class="h3 "></span>
												</div>
											</div>
											<div class="card-footer bg-white text-center ">
												<div class="row">
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">TUE</h6>
														<i class="fe fe-cloud-rain"></i>
														<p class="mb-0 text-muted">18<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">WED</h6>
														<i class="fe fe-cloud"></i>
														<p class="mb-0 text-muted">22<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">THU</h6>
														<i class="fe fe-cloud-snow"></i>
														<p class="mb-0 text-muted">15<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">FRI</h6>
														<i class="fe fe-cloud-rain"></i>
														<p class="mb-0 text-muted">19<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">SAT</h6>
														<i class="fe fe-cloud"></i>
														<p class="mb-0 text-muted">29<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">SUN</h6>
														<i class="fe fe-cloud-snow"></i>
														<p class="mb-0 text-muted">17<sup>o</sup>c</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div id="calendar-1"></div>
							</div>
						</div>
					</div>

				</section>
			</div>
		</block>
	</div>
</div>
<!--Jquery.min js-->
<script src="/../static/js/jquery.min.js"></script>

<!--popper js-->
<script src="/../static/js/popper.js"></script>

<!--Tooltip js-->
<script src="/../static/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="/../static/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="/../static/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="/../static/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--Sidemenu js-->
<script src="/../static/plugins/toggle-menu/sidemenu.js"></script>

<!--mCustomScrollbar js-->
<script src="/../static/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- ECharts -->
<script src="/../static/plugins/echarts/dist/echarts.js"></script>

<!--Min Calendar -->
<script src="/../static/plugins/fullcalendar/calendar.min.js"></script>
<script src="/../static/plugins/fullcalendar/custom_calendar.js"></script>

<!--Morris js-->
<script src="/../static/plugins/morris/morris.min.js"></script>
<script src="/../static/plugins/morris/raphael.min.js"></script>

<!--Scripts js-->
<script src="/../static/js/scripts.js"></script>

<!--Dashboard js-->
<script src="/../static/js/dashboard.js"></script>
<script src="/../static/js/apexcharts.js"></script>
<block name="js"></block>
</body>
</html>








