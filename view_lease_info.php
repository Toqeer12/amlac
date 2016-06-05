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
  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Managed Tables</title>
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
	<?php
    include 'header_admin.php';
    include 'raw_detail.php';
    
    ?>

   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
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
include 'owner_header_menu.php';

?>
      <!-- END SIDEBAR MENU -->
    </div>
		<div id="main-content">
			<div class="container-fluid" >
				<div class="row-fluid">
					<div class="span12">
  
						<h3 class="page-title">
							Dashboard	
				 
						</h3>
					
					</div>
				</div>

				<div id="page" class="dashboard">
                    <div class="row-fluid circle-state-overview">
                        <?php 
 
                                    $varowner=$_SESSION['Id'];
                                    $varreal=$_SESSION['real_state'];
                        ?>
                    </div>
         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-body">                          
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                     <th>Sr No</th>
                                     <th>Property Name</th>
                                     <th class="hidden-phone">Unit #</th>
                                     <th class="hidden-phone">Writing Contract Date</th>
                                     <th class="hidden-phone">Start Contract Date</th>
                                     <th class="hidden-phone">End Contract Date</th>
                                     <th class="hidden-phone">Duration</th>
                                     <th class="hidden-phone">Schudule Month</th>
                                </tr>
                            </thead>
                                   <tbody>
                               <?php
                               $propertyUnit = viewpropertylease($varowner,$varreal);
                               for ($i = 0; $i < count($propertyUnit); $i++) {

                                  ?>                                           
                                <td><?php  echo $propertyUnit[$i]['id'];?></td>
                                <td><?php  echo propertyname($propertyUnit[$i]['property_name']);?></td>     
                                <td><?php  echo $propertyUnit[$i]['unit'];?></td>     
                                <td><?php  echo $propertyUnit[$i]['write_con_dat'];?></td>     
                                <td><?php  echo $propertyUnit[$i]['start_date'];?></td>   
                                <td><?php  echo $propertyUnit[$i]['ending_date'];?></td>   
                                <td><?php  echo $propertyUnit[$i]['duration'];?></td> 
                                <td><?php  echo $propertyUnit[$i]['schudle_month'];?></td> 

                                </tbody>           
   <?php }?>
                        </table>
                        </div>
                    </div>
                </div>
            </div>

         </div>
     

   </div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="js/jquery.blockui.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>
 	<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="js/scripts.js"></script>
    
    
    <script type="text/javascript">
    
    function unitcall(obj)
    {
        debugger;
        var real_id = obj.getAttribute("data-cid");
        var property_id = obj.getAttribute("data-property");
        var owner_id = obj.getAttribute("data-owner");
    }
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
