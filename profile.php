<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->


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
   <title>Profile</title>
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
   <link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
    <link href="build/toastr.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php 
   
   include 'header.php';?>
       <!-- END TOP NAVIGATION BAR -->
 
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
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
include 'raw_detail.php';
?>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->

                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       Profile
                     <small>simple profile page</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Extra</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Profile</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                    <img src="img/profile-pic.jpg" alt="">
                                </div>
              
                            </div>
                            <div class="span6">
                                  <input id="clid" type="hidden" value="<?php echo $_SESSION['Id']?>"/>
                                 <?php 
                                   $cid  = $_SESSION['Id'];
                                  $register = registered_user($cid);
                                  
                                  for ($i = 0; $i < count($register); $i++) {?>
                                <h4><?php echo $register[$i]['full_name'] ?><br/> </h4>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                    <tbody>
                                        
                              
                                    <tr class="">
                                        <td class="span2"> Name :</td>
                                        <td>
                                           <?php echo $register[$i]['full_name']?>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="span2">Company Name :</td>
                                        <td>
                                             <?php echo $register[$i]['comp_name']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Email :</td>
                                        <td>
                                            <?php echo $register[$i]['email']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Nationality :</td>
                                        <td>
                                          <?php echo $register[$i]['city']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Phone # :</td>
                                        <td>
                                             <?php echo $register[$i]['phone_no']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Registerd Date :</td>
                                        <td>
                                             <?php echo $register[$i]['reg_date']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Expiry Date :</td>
                                        <td>
                                            <?php echo $register[$i]['exp_date']?>
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="span2"> Notify :</td>
                                        <td>
                                     <form>
                                        <div>
                                            <input type="radio" name="fruit" value="10"  id="a10" >
                                            Before 10 Days
                                        </div>
                                        <div>
                                            <input type="radio" name="fruit" value="20" id="a10"  >  
                                            Before 20 Days
                                        </div>
                                          <div>
                                            <input type="radio" name="fruit" value="30"   id="a10"  >
                                            Before 30 Days
                                            <div id="log"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <?php } ?>
                                    </tbody>
                                </table>
                                

                            

                                 
                              
               
                            </div>
 
                            <div class="space5"></div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
 
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="js/jquery.blockui.js"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>

   <script src="js/table-editable.js"></script>
   
<script type="text/javascript">
 
$('input[name=fruit]').click(function() {
     debugger;
     var cid=$("#clid").val();
     var ab=$('input[name=fruit]:checked').val();
    var dataString = 'cid='+ cid + '&notify='+ ab;
    $.ajax({
		url : "client_validate.php?id=117",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{  debugger;
		   if(result.id=='0')
           {
            $().toastmessage('showErrorToast', "Property Already in Lease");
           }
		 
   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
            debugger;
	 			alert("error");
		}
		});	
 });
 


</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>