<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

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
<head>
   <meta charset="utf-8" />
   <title>Basic Tables</title>
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
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->

   <?php 
   include 'header.php';?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid"  <?php echo $_SESSION['rtl'];?>> 
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
         <div class="sidebar-toggler hidden-phone"></div>
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
      <div id="main-content"  <?php echo $_SESSION['rtl'];?>>
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
                     Properties Overview
                    
                  </h3>

                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->                     
                      <?php 
          require('connect.php');

						  $sqlserivce_classes=mysql_query("select Count(*) as total from rent_property where cid='".$_SESSION['Id']."'");
						  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
							{
							$rowsqlserivce_classes['total'];
							?>
						
							
                            <a class="icon-btn span2" href="leaseview.php">
                                <i class="icon-barcode"></i>
                                <div>Lease</div>
                                <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>            	
     		<?php
				}
					  $sqlserivce_classes=mysql_query("select Count(renter) as total from rent_property Where cid='".$_SESSION['Id']."'");
						  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
							{
							$rowsqlserivce_classes['total'];
							?>
			  
                            <a class="icon-btn span2" href="#">
                                <i class="icon-bar-chart"></i>
                                <div>Renter</div>
                                <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>
				<?php
							}
				?>
     
                        </div>     
            <div class="row-fluid">
           
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
                                 <th>Lease #</th>
                                 <th>Renter</th>
                                 <th>Rent Start Date</th>
                                 <th>Duration</th>
                                 <th>Price</th> 
                                 <th>Status</th>
                                 <th>View</th>
                                 
                               
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
					    $sql= "SELECT * From rent_property Where cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{	
                               ?>
                              <tr>
                                 <td><?php echo $member['id']?></td>
                                  <td><?php 
                        $sql= "SELECT * From clients Where id='".$member['renter']."'";   
                        $resultcl=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($resultcl)
                         {
                             $member3=mysql_fetch_array($resultcl);
                                  echo $member3['real_name'];
                                  
                         }       
                                  ?>
                                  
                                  
                                  
                                  
                                  </td>
                                   <td><?php echo $member['start_date']?></td>
                                    <td><?php echo $member['duration']?></td>
                                     <td><?php echo $member['payment']?></td>
                                      <td><?php echo $member['id']?></td>
                                 <td><a href="job_title.php?id=<?php echo $member['owner'] ?>&property=<?php echo $member['property_name']?>&unit=<?php echo $member['unit']?>&renter=<?php echo $member['renter']?>"">View</a></td>
                                 
                  
                              </tr>
                                      		  <?php 
                        
							}
					  }?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
        
             
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER  
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
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
</body>
<!-- END BODY -->
</html>
