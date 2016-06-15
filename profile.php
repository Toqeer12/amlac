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
<head>
   <meta charset="utf-8" />
   <title>Profile</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
<?php

include 'css_header.php';

?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->

       <!-- END TOP NAVIGATION BAR -->
   <?php 
   
   include 'header.php';?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
            <?php 
            include 'header_menu.php';  ?>
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

                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       <?php 
                       GetProperty('profile',$_SESSION['rtl']);?> </h3>
 
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
                                     <div class="loader"></div>
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
                                        <td class="span2"><?php GetProperty('name',$_SESSION['rtl']);?></td>
                                    <td>
                                        <?php echo $register[$i]['full_name']?>
                                   </td>   
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('cname',$_SESSION['rtl']);?></td>
                                        <td>
                                             <?php echo $register[$i]['comp_name']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('email',$_SESSION['rtl']);?></td>
                                        <td>
                                            <?php echo $register[$i]['email']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('city',$_SESSION['rtl']);?></td>
                                        <td>
                                          <?php echo $register[$i]['city']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('phoneno',$_SESSION['rtl']);?></td>
                                        <td>
                                             <?php echo $register[$i]['phone_no']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('regdate',$_SESSION['rtl']);?></td>
                                        <td>
                                             <?php echo $register[$i]['reg_date']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"><?php GetProperty('expdate',$_SESSION['rtl']);?></td>
                                        <td>
                                            <?php echo $register[$i]['exp_date']?>
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="span2"><?php GetProperty('notify',$_SESSION['rtl']);?></td>
                                        <td>
                                     <form  <?php echo $_SESSION['rtl'];?>>
                                        <div>
                                            <input type="radio" name="fruit" value="10"  id="a10" >
                                          <?php GetProperty('b10',$_SESSION['rtl']);?>
                                        </div>
                                        <div>
                                            <input type="radio" name="fruit" value="20" id="a10"  >  
                                           <?php GetProperty('b20',$_SESSION['rtl']);?>
                                        </div>
                                          <div>
                                            <input type="radio" name="fruit" value="30"   id="a10"  >
                                            <?php GetProperty('b30',$_SESSION['rtl']);?>
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
    </div>
      <div id="footer">
       2016 &copy; Arrowtec LLC.


   </div>
     <script src="js/scripts.js"></script>
 
   <script src="js/jquery.blockui.js"></script>
 
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   
   
<script type="text/javascript">
     $(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
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
            $().toastmessage('showSuccessToast', "Notification is Updated Successfully");
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