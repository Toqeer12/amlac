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
 
                           <div class="widget-body">
                               <div class="row-fluid">
                                   <div class="span6">
                                       <!--BEGIN TABS-->
                                       <div class="tabbable tabbable-custom tabs-left">
                                           <!-- Only required for left/right tabs -->
                                            <ul class="nav nav-tabs tabs-left">
                                               <li class="active"><a href="#tab_3_1" data-toggle="tab">All Tenants</a></li>
                                               <li><a href="#tab_3_2" data-toggle="tab"><?php GetProperty('owner',$_SESSION['rtl']);?></a></li>
                                               <li><a href="#tab_3_3" data-toggle="tab"><?php GetProperty('renter',$_SESSION['rtl']);?></a></li>
                                               <li><a href="#tab_3_4" data-toggle="tab"><?php GetProperty('vendor',$_SESSION['rtl']);?></a></li>
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
                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                               </tr>
                           </thead>
                           <tbody>
					    <?php 		
                        $cliententent = clientDetail($_SESSION['Id']);
                        for($i=0;$i<count($cliententent); $i++)
                         { ?>
                          <tr>
                                 <td><?php echo $cliententent[$i]['id']?></td>
                                 <td><a href="customer_info.php?id=<?php echo $cliententent[$i]['id']?>"><?php echo $cliententent[$i]['real_name'] ?></a></td>
                                 <td><?php echo $cliententent[$i]['emi_id']?></td>
								 <td><?php echo $cliententent[$i]['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $cliententent[$i]['id'];?>"> Edit</a></td>
                          
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
            </div>
            </div>
 <div class="loader"></div>
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
                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('delete',$_SESSION['rtl']);?></th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
                        $member2 = Dis_Add_Property($_SESSION['Id']);
                        for($i=0;$i<count($member2); $i++)
                         {	
                               ?>
                              <tr>
                                 <td><?php echo $member2[$i]['id']?></td>
                                 <td><?php echo $member2[$i]['real_name'] ?></td>
                                 <td><?php echo $member2[$i]['emi_id']?></td>
								 <td><?php echo $member2[$i]['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $member2[$i]['id'];?>">Edit</a></td>
                                 <td> <a href="#" data-id="<?php echo $member2[$i]['id']?>" data-type="owner" onclick="customercall(this)">Delete</a></td>
                            </tr>
                      <?php
							}
                        ?>
                
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
              <tr>
                                 <th>#</th>
                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('delete',$_SESSION['rtl']);?></th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
                        $renter = Dis_Rent_Property($_SESSION['Id']);
                        for($i=0;$i<count($renter); $i++)
                         {	
                               ?>
                              <tr>
                                 <td><?php echo $renter[$i]['id']?></td>
                                 <td><?php echo $renter[$i]['real_name'] ?></td>
                                 <td><?php echo $renter[$i]['emi_id']?></td>
								 <td><?php echo $renter[$i]['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $renter[$i]['id'];?>">Edit</a></td>
                                 <td> <a href="#" data-id="<?php echo $renter[$i]['id']?>" data-type="renter" onclick="customercall(this)">Delete</a></td>
                            </tr>
                      <?php
							}
                        ?>
                
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
                                  <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('delete',$_SESSION['rtl']);?></th>
                              </tr>
                           </thead>
                           <tbody>
					    <?php 		
				   
            $vendor = viewVendor(1);
            for($i=0; $i < count($vendor); $i++)
            { ?>
                              <tr>
                                 <td><?php echo $vendor[$i]['id']?></td>
                                 <td><?php echo $vendor[$i]['real_name'] ?></td>
                                 <td><?php echo $vendor[$i]['emi_id']?></td>
								 <td><?php echo $vendor[$i]['mob_no']?></td>
                                 <td><a href="update_client.php?id=<?php echo $vendor[$i]['id'];?>"> Edit</a></td>
                                 <td> <a href="#" data-id="<?php echo $vendor[$i]['id']?>" data-type="vendor" onclick="customercall(this)">Delete</a></td>
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
    <script src="js/scripts.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
 
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
 
   <script>
                $(window).load(function() {
	$(".loader").fadeOut("slow");
})
   
 
   </script>
   <script type="text/javascript">
    debugger;
       function customercall(obj)
       {   
           
           debugger;
           var ob=obj.getAttribute("data-id");
           var obtype=obj.getAttribute("data-type");
           var dataString= {deleteId: ob,
                            deletetype:obtype};  
      $.ajax({
		url : "client_validate.php?id=109",
		type: "POST",
		data : JSON.stringify(dataString),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
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