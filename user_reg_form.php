<!DOCTYPE html>

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
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Form Layouts</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">

   <link href="build/toastr.css" rel="stylesheet" type="text/css" />


	<style type="text/css">
    
    #modal {
      margin: 0 auto;
      padding: 0.5em;
      width: 1500px;
      height: 500px;
      background: #eee;
      font-size: 8px;}
    #modal4 {
      margin: 0 auto;
      padding: 0.5em;
      width: 500px;
      height: 100px;
      background: #eee;
      font-size: 8px;}
    </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->

   <?php 
   include 'header.php';?>
       <!-- BEGIN TOP NAVIGATION BAR -->
 
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      <div class="sidebar-toggler hidden-phone"></div>
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
include 'header_menu.php';

?>
      <!-- END SIDEBAR MENU -->
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
<!--                    <div id="theme-change" class="hidden-phone">
                       <i ></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div> -->
                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                   Add Property
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
          <div class="widget-title">
              <h4><i class="icon-reorder"></i>Add Property</h4>
   
          </div>
          <div class="widget-body">
            <form id="loginform" class="form-horizontal" action="property_validate.php?id=2" method="POST" <?php echo $_SESSION['rtl'];?>>
            
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                  <strong>Basic Info</strong><br />
          
                  <div class="control-group">
                      <label class="control-label">Property Name</label>
                      <div class="controls">
                    <input name="pname"id="pname" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Property Type</label>
                      <div class="controls">
			<select  id="propteryname" name="propteryname">
           
          <?php 
          require('connect.php');
		  $sqlserivce_classes=mysql_query("select * from property_type");
		  while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
			{
				echo "string".$data=$rowsqlserivce_classes['prop_type'];
			?>
				<option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data;?></option>
			<?php

			}

			?>

  			</select><input name="desig"id="buttonaddproperty" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                  <div id="result">

                  </div>
                  <div class="control-group">
                      <label class="control-label">Block No</label>
                      <div class="controls">
                       <input name="blockno"id="blockno" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>

           <strong>Property Info</strong><br />
              <br />              
                  <div class="control-group">
                      <label class="control-label">Owner</label>
                      <div class="controls">      
          <select  id="serivce_classes" name="serivce_classes">

          <?php 
          require('connect.php');
   
 $sqlserivce_classes=mysql_query("select * from clients Where cid='".$_SESSION['Id']."'");
while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
{
 $data =$rowsqlserivce_classes['real_name'];
?>
<option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data ;?></option>
<?php

}

?>

  </select><input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Instrument No</label>
                      <div class="controls">
                  <input name="instno"id="instno" type="text"  placeholder="Instrument No" required/>
                      </div>
                  </div>

              </div>
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
<br>

                   <div class="control-group">
                      <label class="control-label">Address</label>
                      <div class="controls">
                 <input name="paddress"id="paddress" type="text" placeholder="Address" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Year Build</label>
                      <div class="controls">
                        <input name="ybuild"id="ybuild" type="date" placeholder="Year Build" required/>
                      </div>
                  </div>
            
                     <div class="control-group">
                      <label class="control-label">About Him</label>
                      <div class="controls">
                        <textarea rows="2" cols="100" id="about" name="about" placeholder="About Him*"></textarea>
                      </div>
                  </div>
                  <div class="control-group">
                      <!-- <label class="control-label">User ID</label> -->
                      <div class="controls">
            
                      </div>
                  </div>
         
    
                
                                    <div class="control-group">
                      <label class="control-label">Land No</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>
                                    <div class="control-group">
                      <label class="control-label">Date of Instrument</label>
                      <div class="controls">
                                     <input name="dateinst"id="dateinst" type="date" placeholder="Year" required/>

           
                      </div>
                  </div>

              </div>
              
              

              <div class="clearfix"></div>
                                              <div class="control-group">
                      <label class="control-label">Location On Map</label>
                      <div class="controls">
       <input type="hidden" id="cmnd_status" name="cmnd_status" placeholder="" value="location1">
       <div id="map-canvas" style="width: 90%; height: 320px;left:1px;right:1px;border: 1px solid;border-radius: 5px;box-shadow: -5px 5px 5px 1px #888888;"></div>
       <br>
	  <p>Lat: <input type="text" id="latitude" name="latitude"  value=""/> </p>
      <p> Lng: <input type="text" id="longitude" value=""  name="longitude"/></p>
                      </div>
                  </div>
              <input type="submit" id="login-btn" class="btn btn-primary" value="Submit" />
              </div>
              <div class="form-actions">
                  
              </div>
              
       
                      
          </div>
      </div>
    </form>
  </div>


<div id="modal4" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h4>Add New Property Title</h4>
<div class="row-fluid">
      <div class="widget">
           <div class="widget-body">
       
               <form id="loginform" class="form-horizontal"   method="POST">
              <div class="span4">
                  <div class="control-group">
                      <label class="control-label">Property Title</label>
                      <div class="controls">
                        <input name="scripttitle"id="scripttitle" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
              </div>

              <div class="clearfix"></div>

              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit"  onClick="popuptitle()"/>
              </div>
              </form>
          </div>
    
      </div>
  </div>
</div>

      <div id="modal" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h3>Add New Tenant</h3>
<div class="row-fluid">
      <div class="widget">
           <div class="widget-body">
            <form id="loginform" class="form-horizontal"   method="POST">
         
              <div class="span4">
                  <div class="control-group">
                      <label class="control-label">Real Name</label>
                      <div class="controls">
                        <input name="realname"id="realname" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Email</label>
                      <div class="controls">
                      <input name="email"id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" type="text" placeholder="example@xyz.com" required/>
         
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Phone</label>
                      <div class="controls">
                      <input name="phone"id="phone" type="text" placeholder="04xxxxxx" onChange="emailvalidate()" required/>

                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label">Passport No</label>
                      <div class="controls">
                      <input name="passport"id="passport" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="gvxxxxx" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Job Title</label>
                      <div class="controls">
                      <input name="jtitle"id="jtitle" type="text" pattern="[a-zA-Z\s]+" placeholder="admin" required/>

                      </div>
                  </div>

              </div>
              <div class="span6">
                  <div class="control-group">
                      <label class="control-label">Id No</label>
                      <div class="controls">
                         <input name="idnum"id="idnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Mobile</label>
                      <div class="controls">
                		<input name="mobile"id="mobile" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Address</label>
                      <div class="controls">
                      <input name="address"id="address" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="Xyz" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Nationality</label>
                      <div class="controls">
                        <select id="pbox" name="pbox">
<!--                         <option value="">Property Type</option>
 -->                        <option value="1">UAE</option>
                        <option value="2">Pakistani</option>
                        <option value="3">Indain</option>
                        <option value="4">Bangladesh</option>
                        <option value="5">Land</option>
                        <option value="6">Palace</option>
                        <option value="7">Private Property</option>
                        <option value="8">Petrol Station</option>
                       </select>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Fax No</label>
                      <div class="controls">
                      <input name="fax"id="fax" type="num" pattern="[0-9]+" placeholder="05xxxx" required/>

                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>

                    
              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit"  onClick="popup()"/>
              </div>
                 </form>
          </div>
    
      </div>
  </div>
</div>

<!--       <label for="inputEmail3" style="margin-left:15px">Real Name <span style="margin-left:15px" class="add-on"><i class="icon-user"></i></span><input name="realname"id="realname" type="text" style="margin-left:20px" placeholder="Real Name" required/></label> 
      <label for="inputEmail3" style="margin-left:15px">Id Number<input name="idnum"id="idnum" type="text" style="margin-left:55px" placeholder="Id Number" required/></label>
      <label for="inputEmail3" style="margin-left:15px">Mobile Number <input type="tel" class="form-control" style="margin-left:20px" pattern="^\d{3}\d{6}\d{3}$"  id="mobile" name="mobile" placeholder="971xxxxxxxx" value="" required></label>
      <label for="inputEmail3" style="margin-left:15px">Email<input name="email"id="email" type="email" style="margin-left:85px" placeholder="example@xyz.com" required/></label>
      <label for="inputEmail3" style="margin-left:15px">Email<input name="email"id="email" type="email" style="margin-left:85px" placeholder="example@xyz.com" required/></label>
      <label for="inputEmail3" style="margin-left:2px">Bank Name <input name="bankname"id="bankname" style="margin-left:40px" type="text" pattern="[a-zA-Z\s]+"  placeholder="Bank Name" required/> </label>
      <label for="inputEmail3" style="margin-left:2px">Account Number<input name="account"id="account" style="margin-left:20px"  type="num" pattern="[0-9]+"  placeholder="456xxxxxx" required/></label>
      <label for="inputEmail3" style="margin-left:2px">Address of Residence <input name="address"id="address" type="text" style="margin-left:25px" placeholder="Address" required/></label>
            <label for="inputEmail3" style="margin-left:2px">Passport #<input name="passport"id="passport" type="text" style="margin-left:25px" placeholder="Passport" required/></label>
      <label for="inputEmail3" style="margin-left:2px">Job Title<input name="address"id="address" type="text" style="margin-left:25px" placeholder="Address" required/></label>
 -->
    
        

      </div>
    </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
<!--       <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div> -->
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
  <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
     <script src="js/jquery.toastmessage.js"></script>
	<script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script src="toastr.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script type="text/javascript">

$(document).ready(function() {
 
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });
  $('#buttonaddproperty').magnificPopup({
    type: 'inline',
    items: {src: '#modal4'},
    preloader: false,
    modal: true
  });
App.init();
  
});
$(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
        $('form')[0].reset();
  });
</script>


  
                      
<script>
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
                    draggable: true,
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
	
	function changeTest(obj){
	debugger;
	var ab=obj.options[obj.selectedIndex].value;

//	$( "#result" ).load("grid_lease.php?id="+ab);
	
		var oth =obj.options[obj.selectedIndex].value;
		if(oth==="other")
		{
			$( "#result" ).load("add_new_property.php");
		
		}
		
        
      }
	function popup()
	{ debugger;

 var realname= $("#realname").val();
 var email=$("#email").val();
 var phone=$("#phone").val();
 var passport=$("#passport").val();
 var idnum=$("#idnum").val();
 var jtitle=$("#jtitle").val();
 var address=$("#address").val();
 var mobile=$("#mobile").val();
 var pbox=$("#pbox").val();
 var fax=$("fax").val();
 var dataString= 'realname='+ realname + '&email='+ email + '&idnum='+idnum + '&mobile='+ mobile + '&phone='+ phone  + '&address='+ address  + '&fax='+ fax + '&jtitle='+jtitle + '&pbox='+pbox + '&passport='+passport;  
$.ajax({
    url : "client_validate.php?id=1",
    type: "POST",
    data : dataString,
	cache: false,
    success: function(result)
    {
        	debugger;

	   result.id;
	   result.text;

	
	  	
	   if(result.id=='0')
       {
                  $().toastmessage('showErrorToast', "Email is Already Exist");
                    document.getElementById("loginform").reset();	
                    $.magnificPopup.close();
       }
       else{
       $select = $('#serivce_classes');
	   $select.append('<option value="' + result.id+ '">' +result.text + '</option>');
       document.getElementById("loginform").reset();	 
	   $.magnificPopup.close();
       $().toastmessage('showSuccessToast', "Owner Added Successfully");
       }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
         debugger;
         
         
    }
});		
	}
	
	
	function popuptitle()
	{

 var realname= $("#scripttitle").val();

 var dataString= 'proptypenew='+ realname; 
$.ajax({
	
    url : "client_validate.php?id=5",
    type: "POST",
    data : dataString,
	cache: false,
    success: function(result)
    {
	 if (result) {
		 
       result.id;
	   result.text;
	   $select = $('#propteryname');
	
	   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
	    $.magnificPopup.close();
    }
	else
	{
		alert("fail");
	    $.magnificPopup.close();	
	}
   
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 
    }
});		


	}
    function emailvalidate()
    {
        alert("Email is Already Exist");
    }
	</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>