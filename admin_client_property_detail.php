<!DOCTYPE html> <?php 
session_start();

if ($_SESSION['exp'] == 'invalid') {
    header("location:login.php");
    unset($_SESSION['user']);
    unset($_SESSION['company']);
    unset($_SESSION['Id']);
    unset($_SESSION['fulname']);

}


?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Managed Tables</title>
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
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="fixed-top">
    <!-- BEGIN HEADER -->
    <?php 
include 'admin_header.php';


?>

    <div id="container" class="row-fluid">
        <div id="sidebar" class="nav-collapse collapse">
 
    <?php 
include 'admin_menu.php';


?>

        </div>

        <div id="main-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">

                        <h3 class="page-title">
							Dashboard	
				 
						</h3>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-body">
                          
                                    <table class="table table-striped table-bordered" id="sample_1">
                                          <div class="loader"></div>
                                        <thead>
                                            <tr>
                                                <th>Property Name</th>
                                                <th>Land #</th>
                                                <th class="hidden-phone">Instrument #</th>
                                                <th class="hidden-phone">Address</th>
                                                <th class="hidden-phone">Property Type</th>
                                                <th class="hidden-phone">Year Build</th>
                                                <th class="hidden-phone">Unit Info</th>
                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                     
                                     <?php 
                                     
                
                                                $viewpropertyDetail = viewproperty( );
                                                for ($i = 0; $i < count($viewpropertyDetail); $i++) {


                                                    ?>
                                                                                            <tr>
                                                                                                <td> <?php 
                                                echo $viewpropertyDetail[$i]['propty_name']; // uid
                                                ?></td>
                                                <td>
                                                    <?php echo $viewpropertyDetail[$i]['land_no']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $viewpropertyDetail[$i]['inst_no']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $viewpropertyDetail[$i]['address']; ?>
                                                </td>
                                                <td>
                                                    <?php  
                                                  echo  $viewpropertytype = propertytype($viewpropertyDetail[$i]['property_type']);
                                               
                                                    
                                                 ?>
                                                </td>
                                                <td>
                                                   <?php echo $viewpropertyDetail[$i]['year_build']; ?>
                                                </td>
                                                        <td>
                                                   <a href="javascript:void(0);"  data-property="<?php echo $viewpropertyDetail[$i]['id'] ?>"onclick="unitcall(this)">View Detail </a>
                                                </td>
                                            <tr>
            <?php
                                                }?>
                                            </tr>
                                                    




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div id="result">
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
                var cid=obj.getAttribute("data-cid");
                var propId=obj.getAttribute("data-property");
                $( "#result" ).load("admin_client_prop_unit_detail.php?propId="+propId);
            }
            
            </script>
</body>

</html>