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
<body class="fixed-top " onload="load()">
	<!-- BEGIN HEADER -->
 <?php 
include 'owner_header.php';

?>

   <div id="container" class="row-fluid"  <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
 
<?php 
include 'owner_menu.php';

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
                            <div id="map" style="  height: 300px"></div>

                            <input type="hidden" id="owenrid" value="<?php echo $varowner ?>"/>
                             <input type="hidden" id="cid" value="<?php echo $varreal ?>"/>
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
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(23.4241, 53.8478),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      var owner = $("#owenrid").val();
      var cid = $("#cid").val();
      downloadUrl("phpsqlajax/phpsqlajax_genxml.php?cid="+cid+"&owner="+owner, function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon 
           });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>
  </script>
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
<?php
 

?>