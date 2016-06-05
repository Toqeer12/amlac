<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
 
<?php
session_start();
include 'session.php';
  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}
    
    ?>
<head>
   <meta charset="utf-8" />
   <title><?php echo $var?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
<?php

include 'css_header.php';

?>
 
   <style>
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
<body class="fixed-top">
   <!-- BEGIN HEADER -->

   <?php 
   include 'header.php';?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
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
      <div id="main-content" <?php echo $_SESSION['rtl'];?>>
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
                <?php GetProperty('propertyover',$_SESSION['rtl']);?>                    
                  </h3>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->                     
                     
            <div class="row-fluid">
                            <a class="icon-btn span2" href="#">
                                <i class="icon-group"></i>
                                <div><?php GetProperty('properties',$_SESSION['rtl']);?></div>
                                <span class="badge badge-important"><?php echo PropertyCount($_SESSION['Id']);?></span>
                            </a>
	                        <a class="icon-btn span2" href="#">
                                <i class="icon-barcode"></i>
                                <div><?php GetProperty('unitss',$_SESSION['rtl']);?></div>
                                 <span class="badge badge-important"><?php echo UnitCount($_SESSION['Id']);?></span>
                            </a>            	
			    <a class="icon-btn span2" href="#">
                       <i class="icon-bar-chart"></i>
                         <div><?php GetProperty('lease',$_SESSION['rtl']);?></div>
                            <span class="badge badge-important"><?php echo LeaseCount($_SESSION['Id']);?></span>
                </a>
			 
     
                        </div>     
            <div class="row-fluid">
               <div class="span6" <?php echo $_SESSION['rtl'];?>>
                  <!-- BEGIN SAMPLE TABLE widget-->
               <div class="square-state">
 
                  <div class="widget">
                  
                     <div class="widget-title">
                     
                     
                        <h4><i class="icon-reorder"></i>Latest Property</h4>
                     </div>
                     <div class="widget-body">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th><?php GetProperty('propertyname',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('address',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('numfreeunit',$_SESSION['rtl']);?></th>
                              
                              </tr>
                           </thead>
                           <tbody>
                                
					    <?php 		
                          $var=$_SESSION['Id'];

                        $selectproperty = SelectProperty($var);
                        echo count($selectproperty);
                        for($i=0; $i < count($selectproperty); $i++)
                        { ?>
                        <tr>
                                 <td><?php echo $selectproperty[$i]['id'];?></td>
                                 <td><a href="prop_info.php?id=<?php echo $selectproperty[$i]['id'] ?>"><?php echo $selectproperty[$i]['propty_name']?></a></td>
                                 <td><?php echo $selectproperty[$i]['address']?></td>
                                 <td><?php echo NumFreeUnit($selectproperty[$i]['id'],$var);?></td>

					<?php  }?>
                      
                            </tr>                      
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
        
            </div>        <div class="span6">
                    <!-- BEGIN SAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Latest Unit</h4>
                        </div>
                        <div class="widget-body">
                            <div class="loader"></div>

                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php GetProperty('unitss',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('properties',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('propertytype',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('renter',$_SESSION['rtl']);?></th>
                                </tr>
                                </thead>
                                <tr>
                    <?php 
                      $var=$_SESSION['Id'];

                  
                    $realstateunit=Real_State_Unit_2($var);                    
                    for($i=0; $i< count($realstateunit); $i++)
					{		?> 
                    <tbody>                                
                                    <td><?php echo $realstateunit[$i]['id'];?></td>
                                    <td><?php echo $realstateunit[$i]['block_no'];?></td>
	                                <td><a href="unit_info.php?unit=<?php echo $realstateunit[$i]['block_no'] ?>&id=<?php echo $realstateunit[$i]['id'] ?>"><?php 
                                    $var2=$realstateunit[$i]['property_name'];
                                    echo Property_View($var2,$var);?></a>
                                    </td>
                                    <td class="hidden-phone"><?php echo Property_Type_overview($var) ?></td>
                                    <td><span><?php echo Property_Renter($realstateunit[$i]['property_name'],$realstateunit[$i]['block_no'],$var)?></span></td>
                                	<?php 									         
					}?>
                                     </tr>	
                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE widget-->
                </div>

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
 
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/scripts.js"></script>
 
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   
   <script>
          	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
      jQuery(document).ready(function() {       
         // initiate layout and plugins
       });
   </script>
</body>
<!-- END BODY -->
</html>
