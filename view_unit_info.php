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
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
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

   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
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
		<div id="main-content" <?php echo $_SESSION['rtl'];?>>
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
        
                    </div>
         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                     <div class="loader"></div>
                        <div class="widget-body">                          
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                     <th><?php GetProperty('serno',$_SESSION['rtl']);?></th>
                                     <th><?php GetProperty('propertyname',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('unitnum',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('insurance',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('annualrent',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('comisionamount',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"><?php GetProperty('status',$_SESSION['rtl']);?></th>
                                </tr>
                            </thead>
                                   <tbody>
                               <?php
                               $propertyUnit = viewpropertyUnitowner($varowner,$varreal);
                               for ($i = 0; $i < count($propertyUnit); $i++) {

                                  ?>                                           
                                <td><?php  echo $propertyUnit[$i]['id'];?></td>
                                <td><?php  echo propertyname($propertyUnit[$i]['property_name']);?></td>     
                                <td><?php  echo $propertyUnit[$i]['block_no'];?></td>     
                                <td><?php  echo $propertyUnit[$i]['ins_amount'];?></td>     
                                <td><?php  echo $propertyUnit[$i]['annul_lease'];?></td>   
                                <td><?php  echo $propertyUnit[$i]['comission_amount'];?></td>   
                                <td><?php  echo $propertyUnit[$i]['status'];?></td> 

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
