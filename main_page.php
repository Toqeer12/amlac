<!DOCTYPE html>

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
<!DOCTYPE html>
 
<head>
    <meta charset="utf-8" />
    <title> Admin Lab Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
 
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_responsive.css" rel="stylesheet" />
    <link href="css/style_default.css" rel="stylesheet" id="style_color" />
    <link rel="stylesheet" href="codebase/dhtmlxscheduler.css">
 
 
 
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    
            <style media="screen">
 
         .loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/ajax-loader.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top" onload="init();">
    <!-- BEGIN HEADER -->
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <?php  include 'header.php';?>
    </div>
 
    <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>       
        <div id="sidebar" class="nav-collapse collapse">          
                  <?php include 'header_menu.php';?>       
            </div>
        <div id="main-content" <?php echo $_SESSION['rtl'];?>>       
            <div class="container-fluid">          
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">Dashboard</h3>
                    </div>
                </div>
                <div class="loader"></div>
        <div id="page" class="dashboard">
            <div class="row-fluid circle-state-overview">
                 <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                           <div class="stats-circle turquoise-color">
                                <i class="icon-user"></i>
                          </div>
                           <p><strong><?php $var = $_SESSION['Id']; echo SpecIdProperty($var);?></strong>  Total Properties </p>
                      </div>
                 </div>
                  <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                       <div class="circle-wrap">
                            <div class="stats-circle red-color">
                                    <i class="icon-tags"></i>
                            </div>
                                <p> <strong><?php $var = $_SESSION['Id']; echo spec_unit_property($var);?></strong> Total Units </p>      
                       </div>
                  </div>
                 <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                              <div class="stats-circle green-color">
                                    <i class="icon-shopping-cart"></i>
                             </div>
                              <p> <strong><?php $var = $_SESSION['Id'];echo spec_owner($var)?></strong> Total Owner</p>
                      </div>
                </div>
                 <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                           <div class="stats-circle purple-color">
                                 <i class="icon-eye-open"></i>
                            </div>
                             <p><strong><?php $var =  $_SESSION['Id'];echo spec_lease_property($var);?></strong>Total Renter </p>
                     </div>               
                 </div>
           </div>
            <div class="row-fluid">
                 <div class="span8">
                      <div id="scheduler_here" class="dhx_cal_container" style='width:600px; height:500px;  '>
                                    <div class="dhx_cal_navline">
                                        <div class="dhx_cal_prev_button">&nbsp;</div>
                                        <div class="dhx_cal_next_button">&nbsp;</div>
                                        <!--<div class="dhx_cal_today_button"></div>-->
                                        <div class="dhx_cal_date"></div>
                                        <!--<div class="dhx_minical_icon" id="dhx_minical_icon" onclick="show_minical()">&nbsp;</div>-->
                                        <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                                        <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                                         <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div> 
                                    </div>
                                        <div class="dhx_cal_header"> </div>
                                        <div class="dhx_cal_data"> </div>
                            </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
 
	<script src="js/scripts.js"></script>
 
    <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
	<script src="codebase/dhtmlxscheduler.js"></script>
    
    
    
    
     <script type="text/javascript" charset="utf-8">
     	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
	$(document).ready(function(){

  $("*").dblclick(function(e){

    e.preventDefault();

  });

});

	function init() 
    {
        
        scheduler.config.xml_date="%Y-%m-%d %H:%i";
        scheduler.init('scheduler_here', new Date(),"month");
        scheduler.load("data.php"); 

	}
	</script>
</body>
<!-- END BODY -->
</html>