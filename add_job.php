<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<?php
session_start();
if(!(isset($_SESSION['user']))){
header("location:index.php");
unset($_SESSION['user']);
}


?>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Form Layouts</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
  <?php
  $_SESSION['Id']; 
  include 'header.php'; /*<div id="header" class="navbar navbar-inverse navbar-fixed-top">

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
			<ul class="sidebar-menu">
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-dashboard"></i></span> User Management
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class=""><a class="" href="user_reg_form.php">Add User</a></li>
                        <li><a class="" href="viewuser.php">View User</a></li>
                        <li class=""><a class="" href="delete_user.php">Delete User</a></li>
                    </ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> Job
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="job_title.php">Job Title</a></li>
						<li><a class="" href="ui_elements_buttons.html">Pay Grades</a></li>
                        <li><a class="" href="jquery_ui.html">Employement Status</a></li>
						<li><a class="" href="ui_elements_tabs_accordions.html">Job Category</a></li>
						<li><a class="" href="ui_elements_typography.html">Work Shifts</a></li>
					
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-cogs"></i></span> Organization
					<span class="arrow"></span>
					</a>
					<ul class="sub">
                        <li><a class="" href="calendar.html">Gernal Information</a></li>
                        <li><a class="" href="grids.html">Location</a></li>
                        <li><a class="" href="charts.html">Structure</a></li>
                      
                    </ul>
				</li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-tasks"></i></span> Qualification
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_layout.html">Skills</a></li>
                        <li><a class="" href="form_component.html">Education</a></li>
                        <li><a class="" href="form_wizard.html">Licenses</a></li>
                        <li><a class="" href="form_validation.html">Language</a></li>
                        <li><a class="" href="dropzone.html">Member Ships </a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="" >
                        <span class="icon-box"><i class="icon-th"></i></span> Nationalities
                      <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.html">Nationality</a></li>
                      <!--  <li><a class="" href="managed_table.html">Managed Table</a></li>
                        <li><a class="" href="editable_table.html">Editable Table</a></li>-->
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class=" icon-qrcode"></i></span> Portlets
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general_portlet.html">General Portlets</a></li>
                        <li><a class="" href="draggable_portlet.html">Draggable Portlets</a></li>
                    </ul>
                </li>

				<li class="has-sub">
	               <a href="javascript:;" class="">
	               <span class="icon-box"><i class="icon-fire"></i></span> Icons
	               <span class="arrow"></span>
	               </a>
	               <ul class="sub">
	                  <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                      <li><a class="" href="glyphicons.html">Glyphicons</a></li>
	               </ul>
	            </li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-map-marker"></i></span> Maps
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="maps_google.html"> Google Maps</a></li>
						<li><a class="" href="maps_vector.html"> Vector Maps</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
					<span class="arrow"></span>
					</a>
                    <ul class="sub">
                        <li><a class="" href="blank.html">Blank Page</a></li>
                        <li><a class="" href="sidebar_closed.html">Sidebar Closed Page</a></li>
                        <li><a class="" href="coming_soon.html">Coming Soon</a></li>
                        <li><a class="" href="blog.html">Blog</a></li>
                        <li><a class="" href="news.html">News</a></li>
                        <li><a class="" href="about_us.html">About Us</a></li>
                        <li><a class="" href="contact_us.html">Contact Us</a></li>
                        <li><a class="" href="email_templates.html">Email Templates</a></li>
                    </ul>
				</li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-glass"></i></span> Extra
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="lock.html">Lock Screen</a></li>
                        <li><a class="" href="profile.html">Profile</a></li>
                        <li><a class="" href="invoice.html">Invoice</a></li>
                        <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                        <li><a class="" href="inbox.html">Inbox</a></li>
                        <li><a class="" href="search_result.html">Search Result</a></li>
                        <li><a class="" href="faq.html">FAQ</a></li>
                        <li><a class="" href="404.html">404 Error</a></li>
                        <li><a class="" href="500.html">500 Error</a></li>
                    </ul>
                </li>
				<li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
			</ul>
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
                  <h3 class="page-title">
                   Add Job 
                   
                  </h3>
                 <!--  <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Form Layouts</a><span class="divider-last">&nbsp;</span></li>
                   </ul>-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                    <!--    <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Form Layouts</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                        </div>-->
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="add_job_validate.php" class="form-horizontal" method="POST">
                  
                     
                        
                                <div class="control-group">
                                    <label class="control-label">Job Title</label>
                                    <div class="controls">
                                        <input name="jtitle" type="text" placeholder="Job Title" class="input-large" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Job Description</label>
                                    <div class="controls">
                                        <textarea name="jdesc" class="input-medium" rows="3"></textarea>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label">Default</label>
                                    <div class="controls">
                                        <input type="file" class="default" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Note</label>
                                    <div class="controls">
                                        <textarea name="note"class="input-large" rows="3"></textarea>
                                    </div>
                                </div>
                       
                         
                                <div class="form-actions">
                                  <input type="submit" id="login-btn" class="btn blue" value="Submit" />
                                    <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
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
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>