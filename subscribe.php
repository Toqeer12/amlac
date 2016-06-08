<!DOCTYPE html>
<?php 

session_start();

?>

<html lang="en"> <!--<![endif]-->
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
<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php include 'header_sub.php';?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>> 
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
 
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
 
<?php 
include 'header_menu_sub.php';

?>
			<!-- END SIDEBAR MENU -->
		</div>
      <!-- BEGIN PAGE -->
      <div id="main-content" <?php echo $_SESSION['rtl'];?>>
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
      
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN INLINE NOTIFICATIONS widget-->
                  <div class="widget">
 
                     <div class="widget-body">
                        <div class="row-fluid">
                           <div class="pricing-title">
                               <h2>30 days Free Trial on All Accounts</h2>
                               <h4>No risk. No hidden fees. Cancel at anytime. </h4>
                           </div>
                        </div>
                        <div class="row-fluid" <?php echo $_SESSION['rtl'];?>>
                           <div class="span3">
                              <div class="pricing-table">
                                  <div class="pricing-head">
                                      <h3> Micro </h3>
                                      <h4>
                                          <span class="note">$</span>20 <span>Per Month</span></h4>
                                  </div>
                                  <ul>
                                      <li><strong>Free</strong> setup</li>
                                      <li><strong>1</strong> Website</li>
                                      <li><strong>2</strong> Projects</li>
                                      <li><strong>1GB</strong> Storage</li>
                                      <li><strong>$0</strong> Google Adwords Credit</li>
                                  </ul>
                                  <div class="price-actions">
                                      <a class="btn" href="javascript:;" onclick="payment()">Purchase Now</a>
                                  </div>
                              </div>
                           </div>
                       <!--   <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table">
                                   <div class="pricing-head">
                                       <h3> Starter </h3>
                                       <h4>
                                           <span class="note">$</span>30 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>5</strong> Website</li>
                                       <li><strong>10</strong> Projects</li>
                                       <li><strong>15GB</strong> Storage</li>
                                       <li><strong>$30</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>
                           </div>
                           <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table green">
                                   <div class="pricing-head ">
                                       <h3> Business </h3>
                                       <h4>
                                           <span class="note">$</span>60 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>10</strong> Website</li>
                                       <li><strong>20</strong> Projects</li>
                                       <li><strong>Unlimited</strong> Storage</li>
                                       <li><strong>$50</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>
                           </div>
                           <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table">
                                   <div class="pricing-head">
                                       <h3> Enterprise </h3>
                                       <h4>
                                           <span class="note">$</span>120 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>20</strong> Website</li>
                                       <li><strong>30</strong> Projects</li>
                                       <li><strong>Unlimited</strong> Storage</li>
                                       <li><strong>$100</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>-->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END INLINE NOTIFICATIONS widget-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->       
      </div>
      <!-- BEGIN PAGE -->     
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
   
   
   
   <script>
       
       function payment()
       {
           alert("Please Contact To Admin For Upgrade You Package");
       }
       
       </script>
</body>
<!-- END BODY -->
</html>
