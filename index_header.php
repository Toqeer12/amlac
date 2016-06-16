<!doctype html>
 
<?php

 if(isset($_SESSION['language'])=='' && ($_SESSION['rtl']==''))
 {
     $_SESSION['rtl']='rtl';
     $_SESSION['language']='English';
 }
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  


?>


<html>
<head>
<meta charset="utf-8">
 
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_default.css" rel="stylesheet" id="style_color" />
 
 <!--  <link rel="stylesheet" href="dist/magnific-popup.css"> -->

   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
 
</head>

<body>


<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="main_page.php">
 
				    <img style="margin-top: -15px;height: 90px;" src="images/amlac.png" alt="Admin Lab" onError="this.src='img/Amlacnew.png';"/>
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
 

					</ul>
 
              
              
    </div>


                    <!-- END  NOTIFICATION -->

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
					<!-- END TOP NAVIGATION MENU -->
				</div>

		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>

 
 
   <!-- ie8 fixes -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>

<script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
 
 
</body>
</html>