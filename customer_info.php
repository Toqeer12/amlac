<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php
session_start();
include 'session.php';
$session_id='1';
 
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
   <title><?php echo $var;?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
 <?php 
 
 
 include 'css_header.php';
 ?>
   <style type="text/css">

#modalload2 {
  margin: 0 auto;
  padding: 0.5em;
  width: 400px;
  height: 500px;
  background: #eee;
  font-size: 8px;}
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

       <!-- END TOP NAVIGATION BAR -->
   
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
                        <div class="widget-title">
                        
             
                           
						
                        </div>
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab"><?php GetProperty('generalinfo',$_SESSION['rtl']);?></a></li>
                                      <!--  <li><a href="#tab_1_4" data-toggle="tab">Leases</a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab">Documents</a></li>-->
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_1_1">
                                     
              <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                                            <div class="loader"></div>

                        <table class="table table-striped table-bordered dataTable">
                        <strong><?php GetProperty('generalinfo',$_SESSION['rtl']);?></strong>
                        <?php 		$sql= "SELECT * From clients WHERE id='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                                 <th class="hidden-phone"> <?php echo $member['real_name']; ?></th>
                                              </tr>
                                              <tr>
                                              	 <th> <?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['emi_id']; ?></td>
                                              </tr>
                                              <tr>
                                              	 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['mob_no']; ?></td>
                                             </tr>
                                             <tr>
                                                 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?> </th>
                                                 <td><?php echo $member['email']; ?></td>
                                            </tr>
                                            <tr>
                                                 <th><?php GetProperty('phoneno',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['phone_no']; ?></td>
                                           </tr>
                                           <tr>
                                                 <th><?php GetProperty('fax',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['fax']; ?></td>
                                           </tr>     
                                           <tr>
                                                 <th><?php GetProperty('addresscust',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['resi_address']; ?></td>
                                          </tr>
                                           <tr>
                                                 <th><?php GetProperty('cname',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['c_name']; ?></td>
                                          </tr>
                                                                                     <tr>
                                                 <th><?php GetProperty('cactivity',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['company_act']; ?></td>
                                          </tr>
                                          
                                           </thead>
                                           </tbody>
                                           <?php
                                        }
                                     }
                                           ?>
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
                        <strong> <?php GetProperty('custlease',$_SESSION['rtl']);?></strong>
                        <?php 		$sql= "SELECT * From rent_property WHERE renter='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											while($member = mysql_fetch_assoc($result))
                                            {?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                               
                                                 <th class="hidden-phone"> Lease # <?php echo $member['id']; ?></th>
                                                 <th class="hidden-phone"> With Anual Lease <?php echo $member['payment']; ?></th>
                                                    <th><a href="job_title.php?id=<?php echo $member['owner'] ?>&property=<?php echo $member['property_name']?>&unit=<?php echo $member['unit']?>&renter=<?php echo $member['renter']?>"">View</a></th>

                                              </tr>
                                
                                           </thead>
                                           </tbody>
                                           <?php
                                            }
                                        }
                                        else {
                                              ?>
                                              <tr>
                                               
                                                 <th class="hidden-phone"> Customer has no leases </th>
                                              
                                            </tr>
<?php
                                             
                                        }
                                     }
                                           ?>
                        </table>
                                </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
              
                                <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong><?php GetProperty('rentunit',$_SESSION['rtl']);?></strong>
                        <?php 		$sql= "SELECT * From rent_property WHERE renter='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											while($member = mysql_fetch_assoc($result))
                                            {?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                               
                                                 <th><a href="unit_info.php?unit=<?php echo $member['unit']?>&id=<?php echo $member['property_name']?>"> Unit # <?php echo $member['unit']; ?></th>
                                                 <th class="hidden-phone"> With Property <?php 
                                                                        $sql= "SELECT * From add_property WHERE id='".$member['property_name']."'";   
									                                    $resultpropname=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									                                    if($resultpropname)
									                                     {
                                                                           if(mysql_num_rows($resultpropname) > 0) 
										                                    {
									                                		while($memberpropname = mysql_fetch_assoc($resultpropname))
                                                                                  {
                                                                                      
                                                                                      echo $memberpropname['propty_name'];
                                                                                      
                                                                            ?>           
                                                                            <?php }
                                                                            }
                                                                            }                                                                                 
                                                                                ?>                                                                             
                                        </th>
                                                <th><a href="job_title.php?id=<?php echo $member['owner'] ?>&property=<?php echo $member['property_name']?>&unit=<?php echo $member['unit']?>&renter=<?php echo $member['renter']?>""> With Lease # <?php echo $member['id']; ?></a></th>

                                              </tr>
                                
                                           </thead>
                                           </tbody>
                                           <?php
                                            }
                                        }
                                        else { ?>
                                               <th class="hidden-phone"> The customer has not Rented any unit </th>
                                        <?php }
                                     }
                                           ?>
                        </table>
                                </div>
                  </div>
              
               </div>
                       </div>

   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   
   
<div id="modalload2" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
      
                  <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
 
                      <div class="widget-body form">
  <form action="uploads.php?id=1" enctype="multipart/form-data"  method="post">
<h3> Upload Logo</h3>


<input name="uploadedimage" type="file">
<input name="unitid" type="hidden" value="<?php echo $_GET['unit']?>">
<input name="id" type="hidden" value="<?php echo $_GET['id']?>">
<input name="Upload Now" type="submit" value="Upload Image">


</form>
                      </div>
                  </div>
               </div>
            </div>
      
      
      
</div>
   
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.

   </div>
 <script src="js/scripts.js"></script>

   <script src="toastr.js"></script>
   
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
  
  

	<script>			
             $(window).load(function() {
	$(".loader").fadeOut("slow");
})
   
$(document).ready(function() {
 debugger;
  $('#buttonloadunit').magnificPopup({
    type: 'inline',
    items: {src: '#modalload2'},
    preloader: false,
    modalload2: true
  });

});
$(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
        $('form')[0].reset();
  });
</script>
 
 <!--<script>
    var map;
    var marker;
    var infowindowPhoto = new google.maps.InfoWindow();
    var latPosition;
    var longPosition;
    
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
                
                var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    
                latPosition = position.coords.latitude;
                longPosition = position.coords.longitude;
    
                marker = new google.maps.Marker({
                    position: pos,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
                
                map.setCenter(pos);
                updatePosition();
    
                google.maps.event.addListener(marker, 'click', function (event) {
                    updatePosition();
                });
    
                google.maps.event.addListener(marker, 'dragend', function (event) {
                    updatePosition();
                });
            });
        }
    }
    
    function updatePosition() {
    
        latPosition = marker.getPosition().lat();
        longPosition = marker.getPosition().lng();
    
        contentString = '<div id="iwContent">Lat: <span id="latbox">' + latPosition + '</span><br />Lng: <span id="lngbox">' + longPosition + '</span></div>';
        
        document.getElementById('latitude').value = latPosition;
        document.getElementById('longitude').value = longPosition;
        
        infowindowPhoto.setContent(contentString);
        infowindowPhoto.open(map, marker);
    }
    
    initialize();
	
	

	

	
	

	
	</script>-->

</body>
<!-- END BODY -->
</html>