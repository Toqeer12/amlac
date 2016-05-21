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
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
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
                     Properties Overview
                    
                  </h3>

                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->                     
                      <?php 
          require('connect.php');
		  $sqlserivce_classes=mysql_query("select Count(*) as total from add_property Where cid='".$_SESSION['Id']."'");
		  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
				{
				$rowsqlserivce_classes['total'];
				?>
			
		 
            <div class="row-fluid">
                            <a class="icon-btn span2" href="#">
                                <i class="icon-group"></i>
                                <div>Property</div>
                                <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>
     		<?php
				}
						  $sqlserivce_classes=mysql_query("select Count(*) as total from real_state_unit Where status='unrented' And cid='".$_SESSION['Id']."'");
						  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
							{
							$rowsqlserivce_classes['total'];
							?>
						
							
                            <a class="icon-btn span2" href="#">
                                <i class="icon-barcode"></i>
                                <div>Units</div>
                                <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>            	
     		<?php
				}
					  $sqlserivce_classes=mysql_query("select Count(*) as total from rent_property Where cid='".$_SESSION['Id']."'");
						  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
							{
							$rowsqlserivce_classes['total'];
							?>
			  
                            <a class="icon-btn span2" href="#">
                                <i class="icon-bar-chart"></i>
                                <div>Leases</div>
                                <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>
				<?php
							}
				?>
     
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
                                 <th>Property Name</th>
                                 <th>Property Address</th>
                                 <th>Number of Free Units</th>
                              
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
					    $sql= "SELECT * From add_property where cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{	
                               ?>
                              <tr>
                                 <td><?php echo $member['id']?></td>
                                 <td><a href="prop_info.php?id=<?php echo $member['id'] ?>"><?php echo $member['propty_name']?></a></td>
                                 <td><?php echo $member['address']?></td>
                                 <?php 
										$sql= "SELECT *  From real_state_unit WHERE property_name='".$member['id']."' And status='unrented' And cid='".$_SESSION['Id']."'";   
                        				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        				if($result)
                        					 {
      					  						 if(mysql_num_rows($result) >= 0) 
                            						{?>
														<td><?php echo  mysql_num_rows($result);?></td>
                              </tr>
                                      		  <?php }
						 					 }
							}
					  }?>
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
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Unit</th>
                                    <th>Property</th>
                                    <th>Type</th>
                                    <th>Renter Name</th>
                                </tr>
                                </thead>
                    <?php 
						$sql= "SELECT * From real_state_unit where cid='".$_SESSION['Id']."'";   
                        $result4=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
						
					while($member=mysql_fetch_array($result4))
					{		?> 
                    <tbody>
                                <tr>
                                    <td><?php echo $member['id'];?></td>
                                    <td><?php echo $member['block_no'];?></td>
										<?php
                                       			 $sql= "SELECT *  From add_property WHERE id='".$member['property_name']."' And cid='".$_SESSION['Id']."'";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
												if($result)
												 {
														   if(mysql_num_rows($result) >= 0) 
															{
																$member2 = mysql_fetch_assoc($result);?>
													
																	<td><a href="unit_info.php?unit=<?php echo $member['block_no'] ?>&id=<?php echo $member2['id'] ?>"><?php echo $member2['propty_name'];?></a></td>
																	<?php
																	$sql= "SELECT *  From property_type WHERE id='".$member['property_type']."'";   
																	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
																	if($result)
																	 {
																	   if(mysql_num_rows($result) >= 0) 
																			{
																			$member5 = mysql_fetch_assoc($result);?>
																			<td class="hidden-phone"><?php echo $member5['prop_type'] ?></td>
																			<?php
																	
																			}
																	  }
																	
																	?>
																	  <?php
																		$sql= "SELECT *  From rent_property WHERE property_name='".$member['property_name']."' And unit='".$member['block_no']."' And cid='".$_SESSION['Id']."' ";   
																		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
																		if($result)
																		 {
																		   if(mysql_num_rows($result) >= 0) 
																			{
																				$member1 = mysql_fetch_assoc($result);?>
																			 <?php
																					$sql= "SELECT *  From clients WHERE id='".$member1['renter']."' And cid='".$_SESSION['Id']."'";   
																					$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
																					if($result)
																					 {
																							 if(mysql_num_rows($result) >= 0) 
																								{
																										$member4 = mysql_fetch_assoc($result);?>
																										<td><span><?php echo $member4['real_name']?></span></td>
																							 <?php
																								}
																					 }
																			}
																		}
													?>
												</tr>	
                            
											<?php 
								
													 
																}
													}
					         
						 }?>
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
