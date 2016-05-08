<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.3
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<?php
session_start();

if($_SESSION['exp']=='invalid'){
header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}
?>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title> Admin Lab Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />

	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
<?php

include 'header.php';
include 'session.php';

 /*?>    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="index.html">
                    <img src="img/logo.png" alt="Admin Lab" />
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="arrow"></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
                    <ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-warning">7</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>You have 7 new notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Server #3 overloaded.
                                        <span class="small italic">34 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-warning"><i class="icon-bell"></i></span>
                                        Server #10 not respoding.
                                        <span class="small italic">1 Hours</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                        Application error.
                                        <span class="small italic">10 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->

                    </ul>
                </div>
                <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <!-- END SUPPORT -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/avatar1_small.jpg" alt="">
                                <span class="username">Mosaddek Hossain</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                                <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div><?php */?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
<?php 
include 'header_menu.php';

?>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
                        <!-- BEGIN THEME CUSTOMIZER-->
                        <div id="theme-change" class="hidden-phone">
                            <i class="icon-cogs"></i>
                            <span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
                            </span>
                        </div>
                        <!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Dashboard
							<small>statistics and more</small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="#">Admin Lab</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
                            <li class="pull-right search-wrap">
                                <form class="hidden-phone" action="search_result.html">
                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search">
                                        <i class="icon-search"></i>
                                    </div>
                                </form>
                            </li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
                    <!--BEGIN NOTIFICATION-->
                    <div class="alert alert-info">
                        <button data-dismiss="alert" class="close">×</button>
                         Welcome to the <strong>Admin Lab</strong> Theme. Please don't forget to check all the pages!
                    </div>
                    <!--END NOTIFICATION-->
                    <!-- BEGIN OVERVIEW STATISTIC BARS-->
                    <div class="row-fluid circle-state-overview">
                        <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle turquoise-color">
                                    <i class="icon-user"></i>
                                </div>
                                <p>
                                    <strong>+30</strong>
                                    New Users
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle red-color">
                                    <i class="icon-tags"></i>
                                </div>
                                <p>
                                    <strong>+970</strong>
                                    Sales
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle green-color">
                                    <i class="icon-shopping-cart"></i>
                                </div>
                                <p>
                                    <strong>+320</strong>
                                    New Order
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle gray-color">
                                    <i class="icon-comments-alt"></i>
                                </div>
                                <p>
                                    <strong>+530</strong>
                                    Comments
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle purple-color">
                                    <i class="icon-eye-open"></i>
                                </div>
                                <p>
                                    <strong>+430</strong>
                                    Unique Visitor
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle blue-color">
                                    <i class="icon-bar-chart"></i>
                                </div>
                                <p>
                                    <strong>+230</strong>
                                    Updates
                                </p>
                            </div>
                        </div>


                    </div>
                    <!-- END OVERVIEW STATISTIC BARS-->

                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN MAILBOX PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                <h4><i class="icon-envelope"></i> Mailbox</h4>
                                <div class="tools pull-right mtop7 mail-btn">
                                    <div class="btn-group">
                                        <a class="btn btn-small element" data-original-title="Share" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-share-alt"></i>
                                        </a>

                                        <a class="btn btn-small element" data-original-title="Report" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-exclamation-sign">
                                            </i>
                                        </a>
                                        <a class="btn btn-small element" data-original-title="Delete" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-trash">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-small element" data-original-title="Move to" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-folder-close">
                                            </i>
                                        </a>
                                        <a class="btn btn-small element" data-original-title="Tag" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-tag">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-small element" data-original-title="Prev" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-chevron-left">
                                            </i>
                                        </a>
                                        <a class="btn btn-small element" data-original-title="Next" href="#" data-toggle="tooltip" data-placement="top">
                                            <i class="icon-chevron-right">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="widget-body">
                                <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>
                                        <th style="width:3%">
                                            <input type="checkbox" class="no-margin">
                                        </th>
                                        <th style="width:17%">
                                            Sent by
                                        </th>
                                        <th class="hidden-phone" style="width:55%">
                                            Subject
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:12%">
                                            Labels
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:12%">
                                            Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Dulal khan
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Senior Creative Designer
                                            </strong>
                                            <small class="info-fade">
                                                Vector Lab
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-info">
                                                    Read
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            Yesterday
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Mosaddek Hossain
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Senior UI Engineer
                                            </strong>
                                            <small class="info-fade">
                                                Vector Lab International
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-success">
                                                    New
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            Today
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Sumon Ahmed
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Manager
                                            </strong>

                                            <small class="info-fade">
                                                ABC International
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label">
                                                    Imp
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            Yesterday
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Rafiqul Islam
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Verify your email
                                            </strong>

                                            <small class="info-fade">
                                                lorem ipsum dolor imit
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-info">
                                                    Read
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            18-04-2013
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Dkmosa
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Statement for January 2012
                                            </strong>
                                            <small class="info-fade">
                                                Director
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-success">
                                                    New
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            10-02-2013
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Mosaddek
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                You're In!
                                            </strong>
                                            <small class="info-fade">
                                                Frontend developer
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label">
                                                    Imp
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            21-01-2013
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="no-margin">
                                        </td>
                                        <td>
                                            Dulal khan
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Support
                                            </strong>
                                            <small class="info-fade">
                                                XYZ Interactive
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-info">
                                                    New
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            19-01-2013
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <!-- END MAILBOX PORTLET-->
                        </div>
                    </div>
                    <!-- BEGIN OVERVIEW STATISTIC BARS-->
                    <div class="row-fluid metro-overview-cont">
                        <div data-desktop="span2" data-tablet="span4" class="span2 responsive">
                            <div class="metro-overview turquoise-color clearfix">
                                <div class="display">
                                    <i class="icon-group"></i>
                                    <div class="percent">+55%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">530</div>
                                    <div class="title">New Users</div>
                                </div>
                                <div class="progress progress-info">
                                    <div style="width: 55%" class="bar"></div>
                                </div>
                            </div>
                        </div>
                        <div data-desktop="span2" data-tablet="span4" class="span2 responsive">
                            <div class="metro-overview red-color clearfix">
                                <div class="display">
                                    <i class="icon-tags"></i>
                                    <div class="percent">+36%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">5440 $</div>
                                    <div class="title">Monthly Sales</div>
                                    <div class="progress progress-warning">
                                        <div style="width: 36%" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-desktop="span2" data-tablet="span4" class="span2 responsive">
                            <div class="metro-overview green-color clearfix">
                                <div class="display">
                                    <i class="icon-shopping-cart"></i>
                                    <div class="percent">+46%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">1000</div>
                                    <div class="title">New Orders</div>
                                    <div class="progress progress-success">
                                        <div style="width: 46%" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-desktop="span2" data-tablet="span4 fix-margin" class="span2 responsive">
                            <div class="metro-overview gray-color clearfix">
                                <div class="display">
                                    <i class="icon-comments-alt"></i>
                                    <div class="percent">+26%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">170</div>
                                    <div class="title">Comments</div>
                                    <div class="progress progress-warning">
                                        <div style="width: 26%" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-desktop="span2" data-tablet="span4" class="span2 responsive">
                            <div class="metro-overview purple-color clearfix">
                                <div class="display">
                                    <i class="icon-eye-open"></i>
                                    <div class="percent">+72%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">1130</div>
                                    <div class="title">Unique Visitor</div>
                                    <div class="progress progress-danger">
                                        <div style="width: 72%" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-desktop="span2" data-tablet="span4" class="span2 responsive">
                            <div class="metro-overview blue-color clearfix">
                                <div class="display">
                                    <i class="icon-bar-chart"></i>
                                    <div class="percent">+20%</div>
                                </div>
                                <div class="details">
                                    <div class="numbers">170</div>
                                    <div class="title">Updates</div>
                                    <div class="progress progress-success">
                                        <div style="width: 20%" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OVERVIEW STATISTIC BARS-->
					<div class="row-fluid">
						<div class="span8">
							<!-- BEGIN SITE VISITS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bar-chart"></i> Line Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="site_statistics_loading">
										<img src="img/loading.gif" alt="loading" />
									</div>
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END SITE VISITS PORTLET-->
						</div>
                        <div class="span4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-book"></i> Active Pages</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Categories</td>
                                            <td><strong>8790</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Clothing</td>
                                            <td><strong>7052</strong></td>
                                        </tr>
                                        <tr>
                                            <td>About</td>
                                            <td><strong>6577</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Us</td>
                                            <td><strong>5760</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Blog</td>
                                            <td><strong>4876</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Prices</td>
                                            <td><strong>3866</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Information</td>
                                            <td><strong>1876</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN SERVER LOAD PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-umbrella"></i> Live Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div id="load_statistics_loading">
                                        <img src="img/loading.gif" alt="loading" />
                                    </div>
                                    <div id="load_statistics_content" class="hide">
                                        <div id="load_statistics" class="chart"></div>
                                        <div class="btn-toolbar no-bottom-space clearfix">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-mini">Web</button><button class="btn btn-mini">Database</button><button class="btn btn-mini">Static</button>
                                            </div>
                                            <div class="btn-group pull-right" data-toggle="buttons-radio">
                                                <button class="btn btn-mini active">Asia</button><button class="btn btn-mini">
                                                <span class="visible-phone">Eur</span>
                                                <span class="hidden-phone">Europe</span>
                                            </button><button class="btn btn-mini">USA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SERVER LOAD PORTLET-->
                        </div>
					</div>
<form name="frmUser" method="post" action="">
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN EXAMPLE TABLE widget-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>View User</h4>
                                        <span class="tools">
                                            <a href="javascript:;" class="icon-chevron-down"></a>
                                            <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                    <th>Username</th>
                                    <th class="hidden-phone">Email</th>
                                    <th class="hidden-phone">Company</th>
                                    <th class="hidden-phone">Designation</th>
                                    <th class="hidden-phone"></th>
                                </tr>
                                </thead>
                                <tbody>
                               			<?php 
			require('connect.php');

		$sql = "SELECT * FROM `new_user` Where c_id='$id'";
	$result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?><td><input type="checkbox" name="users[]" value="<?php echo $row['Id']; ?>"></td>
  <?php
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
   echo "<td>" . $row['Comapny'] . "</td>";
    echo "<td>" . $row['Designation'] . "</td>";
  echo "</tr>";
}

 ?>
                                </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE widget-->
                        </div>
                    </div>

</form>
					<div class="row-fluid">
						<div class="span7 responsive" data-tablet="span7 fix-margin" data-desktop="span7">
							<!-- BEGIN CALENDAR PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-calendar"></i> Calendar</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="calendar" class="has-toolbar"></div>
								</div>
							</div>
							<!-- END CALENDAR PORTLET-->
						</div>
                        <div class="span5">
                            <!-- BEGIN PROGRESS BARS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i> Progress Bars</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <span class="fc-header-title"><h2>Basic</h2></span>
                                    <div class="progress">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-success">
                                        <div style="width: 60%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-warning">
                                        <div style="width: 80%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-danger">
                                        <div style="width: 45%;" class="bar"></div>
                                    </div>

                                </div>
                            </div>
                            <!-- END PROGRESS BARS PORTLET-->
                            <!-- BEGIN ALERTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-bell-alt"></i> Alerts</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="alert">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Warning!</strong> Your monthly traffic is reaching limit.
                                    </div>
                                    <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Success!</strong> The page has been added.
                                    </div>
                                    <div class="alert alert-info">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Info!</strong> You have 198 unread messages.
                                    </div>
                                    <div class="alert alert-error">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Error!</strong> The daily cronjob has failed.
                                    </div>
                                </div>
                            </div>
                            <!-- END ALERTS PORTLET-->
                        </div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	    </div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
        <div id="footer">
            2013 &copy; Admin Lab Dashboard.
            <div class="span pull-right">
                <span class="go-top"><i class="icon-arrow-up"></i></span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.blockui.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->
        <script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="assets/flot/jquery.flot.js"></script>
        <script src="assets/flot/jquery.flot.resize.js"></script>

        <script src="assets/flot/jquery.flot.pie.js"></script>
        <script src="assets/flot/jquery.flot.stack.js"></script>
        <script src="assets/flot/jquery.flot.crosshair.js"></script>

        <script src="js/jquery.peity.min.js"></script>
        <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>

        <script src="js/scripts.js"></script>
        <script>
            jQuery(document).ready(function() {
                // initiate layout and plugins
                App.setMainPage(true);
                App.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>