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

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid ">
       

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
                                 <th>Lease</th>
                                 <th>Renter</th>
                                 <th>Rent Start Date</th>
                                 <th>Duration</th>
                                 <th>Price</th>
                                 <th>Status</th>
                                 <th>View</th>
                             </tr>
                             </thead>
                             <tbody>
                             
                              <?php 
						$sql= "SELECT * From rent_property Where  cid='".$_SESSION['Id']."'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{	
                               ?>
                              <tr>
                                 <td><?php echo $member['id']?></td>
                                      <?php 
										$sql= "SELECT *  From clients WHERE id='".$member['renter']."'";   
                        				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        				if($result)
                        					 {
      					  						 if(mysql_num_rows($result) >= 0) 
                            						{
														$member5 = mysql_fetch_assoc($result);
														?>
														<td><?php echo  $member5['real_name'];?></td>
                              
                                      		  <?php }
						 					 }?>
											 <td><?php echo  $member['start_date'];?></td>
                                             <td><?php echo  $member['duration'];?></td>
                                        <?php 
										$sql= "SELECT *  From real_state_unit WHERE property_name='".$member['property_name']."' And block_no='".$member['unit']."'";   
                        				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        				if($result)
                        					 {
      					  						 if(mysql_num_rows($result) >= 0) 
                            						{
														$member6 = mysql_fetch_assoc($result);
														?>
														<td><?php echo  $member6['annul_lease'];?></td>
                              							<td><?php echo  $member6['status'];?></td>
                                      		  <?php }
						 					 }?>
                                             
                                             <td><a href="job_title.php?id=<?php echo $member['owner'];?>&property=<?php echo $member['property_name'];?>">View</a></td>
											 </tr>
					<?php		}
					  }?>		
									 
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
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