<!DOCTYPE html>

<?php
 session_start();
                                $varowner=$_SESSION['Id'];
                                $varreal=$_SESSION['cid'];
 

?>
  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Managed Tables</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_responsive.css" rel="stylesheet" />
    <link href="css/style_default.css" rel="stylesheet" id="style_color" />
    <link rel="stylesheet" href="codebase/dhtmlxscheduler.css">
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
    include 'header_admin.php';
     
    ?>

   <div id="container" class="row-fluid"  <?php echo $_SESSION['rtl'];?>>
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
		<div id="main-content"  <?php echo $_SESSION['rtl'];?>>
			<div class="container-fluid" >
				<div class="row-fluid">
					<div class="span12">
  
						<h3 class="page-title">
							<?php GetProperty('dashboard',$_SESSION['rtl']);?>
				 
						</h3>
					
					</div>
				</div>

				<div id="page" class="dashboard">
 

                          <div class="row-fluid circle-state-overview">
                 <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                           <div class="stats-circle turquoise-color">
                                <i class="icon-user"></i>
                          </div>
                           <p><strong><?php propertyowner($varowner,$varreal)?></strong>  Total Properties </p>
                      </div>
                 </div>
                <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                           <div class="stats-circle turquoise-color">
                                <i class="icon-user"></i>
                          </div>
                           <p><strong><?php unit_propertyowner($varowner,$varreal)?></strong>  Total Unit </p>
                      </div>
                 </div>
                <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                      <div class="circle-wrap">
                           <div class="stats-circle turquoise-color">
                                <i class="icon-user"></i>
                          </div>
                           <p><strong><?php lease_propertyowner($varowner,$varreal)?></strong>Total Lease Property</p>
                      </div>
                 </div>
 
  </div>
   <div class="loader"></div>
         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-body">                          
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                     <th><?php GetProperty('serno',$_SESSION['rtl']);?></th>
                                     <th><?php GetProperty('propertyname',$_SESSION['rtl']);?> </th>
                                     <th class="hidden-phone"><?php GetProperty('propertytype',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('propertyno',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('deedno',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('address',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('moreinfo',$_SESSION['rtl']);?></th>
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
    <script src="js/scripts.js"></script>
      
    
    <script type="text/javascript">
       	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
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
