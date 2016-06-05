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
   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
   <link href="build/toastr.css" rel="stylesheet" type="text/css" />

    
    <style type="text/css">


#modalload {
  margin: 0 auto;
  padding: 0.5em;
  width: 800px;
  height:500px;
  background: #eee;
  font-size: 8px;}
  </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top" onLoad="callme()">
   <!-- BEGIN HEADER -->

       <!-- END TOP NAVIGATION BAR -->
   
   <?php 
   include 'header.php';?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
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
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->                          
                            			    <?php 		
					    $sql= "SELECT * From add_property WHERE id='".$_GET['id']."'";   
                        $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result)
                         {
                    
                            if(mysql_num_rows($result) > 0) 
                            {
                                $member = mysql_fetch_assoc($result);?>
                                 <h3 class="page-title">
                    <?php echo $member['propty_name']?>
                  </h3>

						<?php }
								 }?>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid ">
       

               <div class="row-fluid ">
                  <div class="span12">
                     <!-- BEGIN INLINE TABS PORTLET-->
                     <div class="widget">
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab">General Information</a></li>
                                       <li><a href="#tab_1_2" data-toggle="tab">Property Units</a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab">Property Expenses</a></li>
                                       <li><a href="#tab_1_4" data-toggle="tab">Leases</a></li>
                                       <li><a href="#tab_1_5" data-toggle="tab">Financial Activity</a></li>
                                       <li><a href="#tab_1_6" data-toggle="tab">Documents</a></li>
                                    </ul>
                                    <div class="tab-content">
          <div class="tab-pane active" id="tab_1_1">
                                     
                                     <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Basic Information </strong>
                        <?php 		$sql= "SELECT * From add_property WHERE id='".$_GET['id']."' ";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> Property Name</th>
                                                 <th class="hidden-phone"> <?php echo $member['propty_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > Property Id	</th>
                                                 <td><?php echo $member['id']; ?></td>            
                                              </tr>
                                              <tr>
                                              	 <th> Address</th>
                                                 <td><?php echo $member['address']; ?></td>
                                       
                                              </tr>
                                              <tr>
                                                 <th>Type</th>
                                                 <?php 
												 $sql= "SELECT * From property_type WHERE id='".$member['property_type']."' ";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
												if($result)
												 {
								
													if(mysql_num_rows($result) > 0) 
													{
														$member2 = mysql_fetch_assoc($result);?>
                                                        <td><?php echo $member2['prop_type']; ?></td>
                                                        <?php
													}
												 }?>
                                 
                                              </tr>
                                              <tr>     
                                                 <th >For Property</th>
                                                 <td><?php echo $member['about_him'] ?></td>
                                              </tr>
                                           </thead>
                                           </tbody>
                        </table>
                                </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
               
                <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Owner Information </strong>
                        <?php 		$sql= "SELECT * From clients WHERE id='".$member['owner_id']."' ";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member3 = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> Owner Name</th>
                                                 <th class="hidden-phone"> <?php echo $member3['real_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > Personal Id Number</th>
                                                 <td><?php echo $member3['emi_id']; ?></td>            
                                              </tr>
                                              <tr>
                                              	 <th> Mobile Number</th>
                                                 <td><?php echo $member3['mob_no']; ?></td>
                                       
                                              </tr>
                                       
                                              <tr>     
                                                 <th >Property No</th>
                                                 <td><?php echo $member['land_no'] ?></td>
                                              </tr>
                                                        <tr>     
                                                 <th >Deed No</th>
                                                 <td><?php echo $member['inst_no'] ?></td>
                                              </tr>
                                                        <tr>     
                                                 <th >Deed Date</th>
                                                 <td><?php echo $member['date_inst'] ?></td>
                                              </tr>
                                           </thead>
                                           </tbody>
                        </table>
              
  
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
                  
               </div>
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Financial  Information </strong>
                
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> Total Expense</th>
                                                 <th class="hidden-phone"> <?php echo $member3['real_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > Total Income</th>
                                                 <td><?php echo $member3['emi_id']; ?></td>            
                                              </tr>
                         
                                           </thead>
                                           </tbody>
                        </table>
              
  
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
                  
               </div>
        <input type="hidden" id="cmnd_status" name="cmnd_status" placeholder="" value="location1">
       <div id="map-canvas" style="width: 90%; height: 320px;left:1px;right:1px;border: 1px solid;border-radius: 5px;box-shadow: -5px 5px 5px 1px #888888;">
        <input type="text" id="latitude" value="<?php echo $member['lat'] ?>"/>
       <input type="text" id="longitude" value="<?php echo $member['longi']?>"/></div>        
  
                       </div>
          <div class="tab-pane" id="tab_1_2">
                      <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->            
                  <div class="widget" style="width: 200%;">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered dataTable">
                             <thead>
                             <tr>
                                 <th> Unit Number</th>
                                 <th class="hidden-phone"> Type</th>
                               
                                 <th>Annual Rent Amount</th>
                                 <th>Status</th>
                                 <th>View</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                             </tr>
                             </thead>
                             <tbody >
                             
                              <?php 		$sql= "SELECT * From real_state_unit WHERE property_name='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  			echo "<tr>";
								  	?>
								  	<?php
								  
									  echo "<td>" . $row['block_no'] . "</td>";
									  $sql= "SELECT * From property_type WHERE id='".$member['property_type']."' ";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
												if($result)
												 {
								
													if(mysql_num_rows($result) > 0) 
													{
														$member2 = mysql_fetch_assoc($result);
													 	 echo "<td>" .$member2['prop_type']. "</td>";
													 	 echo "<td>" . $row['annul_lease'] . "</td>";
													 	 echo "<td>" . $row['status'] . "</td>";  
														 echo "<td></td>";
														 echo "<td></td>";
														  echo "<td>Delete</td>";
														 echo "</tr>"; 
									  }
									  	 }
									}
								}
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div> 
                                       </div>
          <div class="tab-pane" id="tab_1_3">
                                   <div class="widget">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
 <button type="button" class="btn btn-primary" data-property="<?php echo $_GET['id'];?>" data-owenername="<?php echo $member3['real_name']; ?>" data-propertyname="<?php echo $member['propty_name'];?>"onClick="property_bill(this)">Add Property Bill</button>       
   <?php }
				 }
										}
									 }?>
					<br>
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"> Type</th>
                                 <th> Bill Number</th>
                                 <th>Amount</th>
                                 <th>Statement</th>
                                  <th>Date</th>
                             </tr>
                             </thead>
                             
                              <?php 		$sql= "SELECT * From property_expense WHERE property='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  echo "<tr>";
										  ?>
										  <?php
										  
										  echo "<td>" . $row['id'] . "</td>";
										  echo "<td>" . $row['type'] . "</td>";
										  echo "<td>" . $row['bill'] . "</td>";
										  echo "<td>" . $row['amount'] . "</td>";
										  echo "<td>" . $row['notes'] . "</td>";
										  echo "<td>" . $row['datee']. "</td>";
										  echo "</tr>"; }
									 }
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
                                       </div>
          <div class="tab-pane" id="tab_1_4">
                    <div class="widget">
                                           <div class="widget-title">
                                             <h4>Advance Table</h4>
                                          </div>
                                   <div class="widget-body">
                     				<table class="table table-striped table-bordered dataTable">
                                	<strong> Lease Unit </strong>
                                   	<tbody style="border: 1px solid black;"> 
                                        <thead>
                                        
                                          <tr>
                                             <th>Lease Unit</th>
                                             <th class="hidden-phone"> Type</th>
                                               <th class="hidden-phone"> Amount</th>
                                                 <th class="hidden-phone"> Commission</th>
                                               
                                          </tr>
                                          <tr>                   
                                                   <?php 	
                                            $sql= "SELECT * From rent_property WHERE property_name='".$_GET['id']."'";   
                                            $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                            if($result)
                                             {
                                        
                                                if(mysql_num_rows($result) > 0) 
                                                {
                                                    $member = mysql_fetch_assoc($result);
                                                        $var=$member['property_name'];
                                                    $sql= "SELECT * From real_state_unit WHERE property_name='$var'";   
                                            $result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                            if($result2)
                                             {
                                        
                                                if(mysql_num_rows($result2) > 0) 
                                                {
                                                    $member2= mysql_fetch_assoc($result2);?>
                                                     <td><?php echo $member2['block_no']; ?></td>
                                                             
                                                                   <?php 
                                                                   $ptype=$member2['property_type'];
                                                                    $sql= "SELECT * From property_type WHERE id='$ptype'";   
                                                                    $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                                                    if($result)
                                                                     {
                                                                
                                                                        if(mysql_num_rows($result) > 0) 
                                                                        {
                                                                            $member = mysql_fetch_assoc($result);?>
                                                                            <td><?php echo $member['prop_type']; ?></td>
                                                                    <?php	}
                                                                     }
                                                                    ?>
                                           <td><?php echo $member2['annul_lease']; ?></td> 
                                           <td><?php echo $member2['comission']; ?></td>
                                              
                                          </tr>
                                                         <?php }
                                             }
                                                }
                                             }?>
                                       </thead>
                                   </tbody>
                         		</table>
                             </div>
                          </div>
            </div>
 
           <div class="tab-pane" id="tab_1_6">
                    <div class="widget">
                                          <div class="widget-title">
                                             <h4>Advance Table</h4>
                                          </div>
                              <div class="widget-body">
                     				<button type="button" id="buttonload" class="btn btn-primary">Upload Documents</button>   
                             </div>
                             
                    <div id='preview3'>
        
                                  <?php 
                                  require('db.php');
                               $sqlserivce_classes=mysql_query("select * from user_uploads where user_id_fk='".$_GET['id']."'");
                        while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                        {
                        $data=$rowsqlserivce_classes['image_name'];
                        ?>
                        <img src="<?php echo 'images/'.$data; ?> " style="height: 100px; width: 150px;" />
                        <?php
                        
                        }
                        
                        ?>
                        
                    </div>
                          </div>
            </div>    
            
            
                                        <div class="tab-pane" id="tab_1_5">
                    <div class="widget">
                                           <div class="widget-title">
                                             <h4>Advance Table</h4>
                                          </div>
                                   <div class="widget-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"> Date</th>
                                 <th> Amount</th>                             
                                 <th>Statement</th>
                                  <th>Note</th>
                             </tr>
                             </thead>
                             
                              <?php 		$sql= "SELECT * From property_expense WHERE property='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  echo "<tr>";
										  ?>
										  <?php
										  
										  echo "<td>" . $row['id'] . "</td>";
										  echo "<td>" . $row['type'] . "</td>";
										  echo "<td>" . $row['bill'] . "</td>";
										  echo "<td>" . $row['amount'] . "</td>";
										  echo "<td>" . $row['notes'] . "</td>";
										  echo "<td>" . $row['datee']. "</td>";
										  echo "</tr>"; }
									 }
									 ?>
                      
                             </tbody>
                         </table>
                             </div>

                    </div>
            </div>              
                                
                                 <!--END TABS-->
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
      
      
      
      
      
      
      
      
      
      
<div id="modalload" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
      
                  <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
 
                      <div class="widget-body form">
  <form action="uploads.php?id=0" enctype="multipart/form-data"  method="post">
<h3> Upload Logo</h3>


<input name="uploadedimage" type="file">
<input name="propid" type="hidden" value="<?php echo $_GET['id']?>">
<input name="Upload Now" type="submit" value="Upload Image">


</form>
                      </div>
                  </div>
               </div>
            </div>
      
      
      
</div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.

   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="toastr.js"></script>
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

   <script type="text/javascript">
   
   
$(document).ready(function() {
 

   
  $('#buttonload').magnificPopup({
    type: 'inline',
    items: {src: '#modalload'},
    preloader: false,
    modalload: true
  });
});
</script>
   <script>
   debugger;
    var map;
    var marker;
    var infowindowPhoto = new google.maps.InfoWindow();
    var latPosition;
    var longPosition;
    var a=$("#latitude").val();
				var b=$("#longitude").val();
    function initialize() {

        var mapOptions = {
            zoom: 19,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
           // center: new google.maps.LatLng(10,10)
        };
    
        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        
        initializeMarker();
    }
    
    function initializeMarker() {
    
        if (navigator.geolocation) {
           
            navigator.geolocation.getCurrentPosition(function (position) {
                
		 
                var pos = new google.maps.LatLng( a, b);
    
  
    
                marker = new google.maps.Marker({
                    position: pos,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
                
                map.setCenter(pos);
     
            });
        }
    }
    

    
    initialize();
function property_bill(obj)
{
		debugger;
	var a=obj.getAttribute("data-property");
	var b=obj.getAttribute("data-owenername");
	var c=obj.getAttribute("data-propertyname");


window.location="property_bill.php?ownername="+b+"&propertyname="+c+"&propertyId="+a;
}
	
	</script>
    
   
</body>
<!-- END BODY -->
</html>