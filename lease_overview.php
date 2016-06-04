<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

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
<?php include 'header_menu.php';?>
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
                  <h3 class="page-title">
                     Properties Overview
                    
                  </h3>
               </div>
            </div>             
                      <?php 
          require('connect.php');

						  $sqlserivce_classes=mysql_query("select Count(*) as total from rent_property where cid='".$_SESSION['Id']."'");
						  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
							{
							$rowsqlserivce_classes['total'];
							?>			
                            <a class="icon-btn span2" href="leaseview.php">
                                <i class="icon-barcode"></i>
                                <div><?php GetProperty('lease',$_SESSION['rtl']);?></div>
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
                               <div><?php GetProperty('renter',$_SESSION['rtl']);?></div>
                            <span class="badge badge-important"><?php echo $rowsqlserivce_classes['total'];?></span>
                            </a>
				<?php
							}
				?>
     
                        </div>     
            <div class="row-fluid">
               <div class="square-state">
                  <div class="widget">     
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Latest Property</h4>
                     </div>
                     <div class="widget-body">
                          <div class="loader"></div>

                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th><?php GetProperty('lease',$_SESSION['rtl']);?>#</th>
                                 <th><?php GetProperty('renter',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('rentstartdate',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('durationcontract',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('price',$_SESSION['rtl']);?></th> 
                                 <th><?php GetProperty('status',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 	$var=$_SESSION['Id'];
			                    $loadrent = LoadRentedProperty($var);
                                for($i=0; $i < count($loadrent); $i++)
                                {    
                                ?>
                              <tr>
                                        <td><?php echo $loadrent[$i]['id']?></td>
                                        <td><?php echo RenterName($loadrent[$i]['renter'])?></td>
                                        <td><?php echo $loadrent[$i]['start_date']?></td>
                                        <td><?php echo $loadrent[$i]['duration']?></td>
                                        <td><?php echo $loadrent[$i]['payment']?></td>
                                        <td><?php echo $loadrent[$i]['id']?></td>
                                 <td><a href="job_title.php?id=<?php echo $loadrent[$i]['owner'] ?>&property=<?php echo $loadrent[$i]['property_name']?>&unit=<?php echo $loadrent[$i]['unit']?>&renter=<?php echo $loadrent[$i]['renter']?>""><?php GetProperty('view',$_SESSION['rtl']);?></a></td>
                              </tr>
                     <?php  
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
      <script src="js/scripts.js"></script>
 
   <script src="js/jquery.blockui.js"></script>
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>

   <script>
          $(window).load(function() {
	$(".loader").fadeOut("slow");
})
      
   </script>
</body>
<!-- END BODY -->
</html>
