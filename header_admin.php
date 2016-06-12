<!doctype html>

<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
include 'session.php';
 
?>

<html>
<head>
<meta charset="utf-8">
<title><?php echo $var?></title>
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_default.css" rel="stylesheet" id="style_color" />
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 

 
</head>

<body>


<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="#">
 
				    <img style="margin-top: -15px;height: 90px;" src="images/amlac.png" alt="Admin Lab" />
				</a>
		 
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
         

					</ul>
					                         <!--       <span class="username"><?php echo $varcom?></span> -->

                </div>
                    <!-- END  NOTIFICATION -->
					
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
 
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.png" alt=""/>
                                <span class="username"><?php echo $var?></span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
  								<li class="divider"></li>
								<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
				 <div class="top-nav ">
                    					           

                    <ul class="nav pull-right top-menu" >

						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.png" alt=""/>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="language_selector.php?id=<?php echo urlencode($actual_link); ?>"><i class="icon-tasks"></i><?php  echo $_SESSION['language'];?></a></li>
							
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>

	 
  <!-- // <script src="js/jquery-1.8.3.min.js"></script> -->
   <script src="js/scripts.js"></script> 
 
    <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
 
</body>
</html>