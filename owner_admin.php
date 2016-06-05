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


                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-shopping-cart green-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php propertyowner($varowner,$varreal)?>" data-fgColor="#a8c77b" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php
                                        
                          
                                     propertyowner($varowner,$varreal) ?></div>
                                    <div class="title">Total Properties</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-comments-alt gray-color"></i>
                                    </div>
                                    <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php unit_propertyowner($varowner,$varreal)?>"  data-fgColor="#b9baba" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php unit_propertyowner($varowner,$varreal)?></div>
                                    <div class="title">Total Unit</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-eye-open purple-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php lease_propertyowner($varowner,$varreal)?>" data-fgColor="#c8abdb" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php lease_propertyowner($varowner,$varreal)?></div>
                                    <div class="title">Total Lease Property</div>
                                </div>

                            </div>
                        </div>


                   
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
                                     <th class="hidden-phone">Property Type</th>
                                     <th class="hidden-phone">Land #</th>
                                     <th class="hidden-phone">Instr #</th>
                                     <th class="hidden-phone">Address</th>
                                     <th class="hidden-phone">More Info</th>
                                </tr>
                            </thead>
                                   <tbody>
                               <?php
                               $propertyUnit = viewproperty($varowner,$varreal);
                               for ($i = 0; $i < count($propertyUnit); $i++) {

                                  ?>                                           
                                <td><?php  echo $propertyUnit[$i]['id'];?></td>
                                <td><?php  echo $propertyUnit[$i]['propty_name'];?></td>     
                                <td><?php    
                                  $viewpropertytype = propertytype($propertyUnit[$i]['property_type']);
                                              
                                                     echo $viewpropertytype;  
                                                  ?></td>     
                                <td><?php  echo $propertyUnit[$i]['land_no'];?></td>     
                                <td><?php  echo $propertyUnit[$i]['inst_no'];?></td>   
                                <td><?php  echo $propertyUnit[$i]['address'];?></td> 
                              <td><a href="javascript:void(0);" data-cid="<?php echo $varreal?>" data-property="<?php echo $propertyUnit[$i]['id'] ?>" data-owner="<?php echo $varowner;?>" onclick="unitcall(this)">View Detail </a></td>

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
