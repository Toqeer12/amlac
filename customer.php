<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php
session_start();
  $_SESSION['rtl']='rtl';

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
   <title>Tabs & Accordions</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
    <link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
	<?php
    include 'header.php';
    
    ?>
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
      <div id="main-content">
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
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">

               <div class="row-fluid ">
                   <div class="span12">
                       <!-- BEGIN INLINE TABS PORTLET-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i>Inline Tabs</h4>
                       </div>
                           <div class="widget-body">
                               <div class="row-fluid">
                                   <div class="span6">
                                       <!--BEGIN TABS-->
                                       <div class="tabbable tabbable-custom tabs-left">
                                           <!-- Only required for left/right tabs -->
                                           <ul class="nav nav-tabs tabs-left">
                                               <li class="active"><a href="#tab_3_1" data-toggle="tab">All Tenants</a></li>
                                               <li><a href="#tab_3_2" data-toggle="tab">Owners</a></li>
                                               <li><a href="#tab_3_3" data-toggle="tab">Renters</a></li>
                                               <li><a href="#tab_3_4" data-toggle="tab">Vendor</a></li>
                                           </ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_3_1">
<p> All Tenants</p>
  <div class="row-fluid">
               <div class="span6" style="width: 1000px;">
                  <!-- BEGIN SAMPLE TABLE widget-->
               <div class="square-state">
 
                  <div class="widget" style="width: 500px;" >
                     <div class="widget-body">
                        <table class="table table-hover" style="width: 500px;">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Customer Name</th>
                                 <th>Personal Id Number</th>
                                 <th>Mobile Number</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
					    $sql= "SELECT * From clients where cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{	
                               ?>
                              <tr>
                                 <td><?php echo $member['id']?></td>
                                 <td><a href="customer_info.php?id=<?php echo $member['id']?>"><?php echo $member['real_name'] ?></a></td>
                                 <td><?php echo $member['emi_id']?></td>
								 <td><?php echo $member['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $member['id'];?>"> Edit</a></td>
                                 <td> <a href="#" data-id="<?php echo $member['id']?>" onclick="customercall(this)">Delete</a></td>
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
            </div>
            </div>
                                              
 <div class="tab-pane" id="tab_3_2">
 <p>Owner</p>
  <div class="row-fluid">
               <div class="span6" style="width: 1000px;">
                  <!-- BEGIN SAMPLE TABLE widget-->
               <div class="square-state">
 
                  <div class="widget" style="width: 500px;" >
                     <div class="widget-body">
                        <table class="table table-hover" style="width: 500px;">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Customer Name</th>
                                 <th>Personal Id Number</th>
                                 <th>Mobile Number</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
					    $sql= "SELECT DISTINCT owner_id FROM `add_property` where cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{						   
                                     $sql= "SELECT * From clients where id='".$member['owner_id']."'";   
                                     $result6=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                    if($result6)
                                      {
                    
                                    	while($member2=mysql_fetch_array($result6))
							                {	
                               ?>
                              <tr>
                                 <td><?php echo $member2['id']?></td>
                                 <td><?php echo $member2['real_name'] ?></td>
                                 <td><?php echo $member2['emi_id']?></td>
								 <td><?php echo $member2['mob_no']?></td>
                               <td><a href="update_client.php?id=<?php echo $member2['id'];?>"> Edit</a></td>
                                 <td> Delete </td>
                            </tr>
                      <?php
							}
                                      }
                            }
					  }?>
                
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
        
            </div> 
            </div>
                                               </div>
<div class="tab-pane" id="tab_3_3">
<p>Renter</p>
 <div class="row-fluid">
               <div class="span6" style="width: 1000px;">
                  <!-- BEGIN SAMPLE TABLE widget-->
               <div class="square-state">
 
                  <div class="widget" style="width: 500px;" >
                     <div class="widget-body">
                        <table class="table table-hover" style="width: 500px;">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Customer Name</th>
                                 <th>Personal Id Number</th>
                                 <th>Mobile Number</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
					    $sql= "SELECT DISTINCT renter FROM `rent_property` where cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{						   
                                     $sql= "SELECT * From clients where id='".$member['renter']."'";   
                                     $result6=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                    if($result6)
                                      {
                    
                                    	while($member2=mysql_fetch_array($result6))
							                {	
                               ?>
                              <tr>
                                 <td><?php echo $member2['id']?></td>
                                 <td><?php echo $member2['real_name'] ?></td>
                                 <td><?php echo $member2['emi_id']?></td>
								 <td><?php echo $member2['mob_no']?></td>
                              <td><a href="update_client.php?id=<?php echo $member2['id'];?>"> Edit</a></td>
                                 <td> Delete </td>
                            </tr>
                      <?php
							}
                                      }
                            }
					  }?>
                
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
        
            </div> 
            </div>
                                               </div>
                                                   <div class="tab-pane" id="tab_3_4">
                                                   <p>Vendor</p>
 <div class="row-fluid">
               <div class="span6" style="width: 1000px;">
                  <!-- BEGIN SAMPLE TABLE widget-->
               <div class="square-state">
 
                  <div class="widget" style="width: 500px;" >
                     <div class="widget-body">
                        <table class="table table-hover" style="width: 500px;">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Customer Name</th>
                                 <th>Personal Id Number</th>
                                 <th>Mobile Number</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
				   
                                     $sql= "SELECT * From clients where vendor='1'";   
                                     $result6=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                    if($result6)
                                      {
                    
                                    	while($member2=mysql_fetch_array($result6))
							                {	
                               ?>
                              <tr>
                                 <td><?php echo $member2['id']?></td>
                                 <td><?php echo $member2['real_name'] ?></td>
                                 <td><?php echo $member2['emi_id']?></td>
								 <td><?php echo $member2['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $member2['id'];?>"> Edit</a></td>
                                 <td> Delete </td>
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
            </div>
                                               </div>
                                           </div>
                                      
                                       <!--END TABS-->
                                   </div>
                                   <div class="space10 visible-phone"></div>
                            
                               </div>
                           </div>
                       </div>
                       <!-- END INLINE TABS PORTLET-->
                   </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER--> 
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.

   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <script type="text/javascript">
    debugger;
       function customercall(obj)
       {   
           
           debugger;
           var ob=obj.getAttribute("data-id");
           var dataString= 'deleteId=' + ob;  
      $.ajax({
		url : "client_validate.php?id=109",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
            if(result.delid=='1')
            {
                   $().toastmessage('showSuccessToast', "Record is Delete Successfully");	
            }
            else {
                   $().toastmessage('showErrorToast', "Record Cannot be Deleted");	
            }
		 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 				debugger;
				}
		});	
		
       }

       </script>
</body>
<!-- END BODY -->
</html>