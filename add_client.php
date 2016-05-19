 <!DOCTYPE html>

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
<link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
 <!--  <link rel="stylesheet" href="dist/magnific-popup.css"> -->

   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
<link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="build/toastr.css" rel="stylesheet" type="text/css" />

<style type="text/css">


#modal {
  margin: 0 auto;
  padding: 0.5em;
  width: 300px;
  height:600px;
  background: #eee;
  font-size: 8px;}
  #modal3 {
  margin: 0 auto;
  padding: 0.5em;
  width: 300px;
  height: 400px;
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
      <div id="main-content" <?php echo $_SESSION['rtl'];?>>
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
                   Add Client
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
          <div class="widget-title">
              <h4><i class="icon-reorder"></i>Add Client</h4>
   
          </div>
          <div class="widget-body">
           <form id="loginform" class="form-horizontal"  method="POST" <?php echo $_SESSION['rtl'];?>>
             
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                 <strong>Basic Info</strong><br />

                  <div class="control-group">
                      <label class="control-label">Real Name</label>
                      <div class="controls">
                        <input name="realname"id="realname" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
                  
                  <div class="control-group">
                      <label class="control-label">Mobile Number</label>
                      <div class="controls">
            		 <input name="mobile"id="mobile" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>


              </div>
           
              <br>
              <div class="span6">
                  <div class="control-group">
                      <label class="control-label">Personal Id No</label>
                      <div class="controls">
                         <input name="idnum"id="idnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Service Vendor</label>
                      <div class="controls">
                      <input type="checkbox" name="vender" id="vendor" onChange="venderservice(this)"> Is Vender </br>

                      </div>
                  </div>
 
                  </div>
                  <br>
                  <br>
              </div> 
                <div id="result">
              </div>
              
              
                        <div class="widget-body">
   
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                 <strong>Other details</strong><br />

                  <div class="control-group">
                      <label class="control-label"  >Email</label>
                      <div class="controls">
                        <input name="email"id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" type="text" placeholder="example@gmail.com" required/>
                      </div>
                  </div>
                  
                  <div class="control-group">
                      <label class="control-label" >Account Number</label>
                      <div class="controls">
            		 	<input name="accountno"id="accountno" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label" >Fax No</label>
                      <div class="controls">
            		 	<input name="fax"id="fax" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label" >POBox</label>
                      <div class="controls">
            		 	<input name="pbox"id="pbox" type="tel" pattern="[0-9]+" required/>
                      </div>
                  </div>
                       <div class="control-group">
                      <label class="control-label"  >Passport No</label>
                      <div class="controls">
                      <input name="passport"id="passport" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="gvxxxxx" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"  >Job Title</label>
                      <div class="controls">
                      <input name="jtitle"id="jtitle" type="text" pattern="[a-zA-Z\s]+" placeholder="admin" required/>

                      </div>
                  </div>
              </div>
         <br>
              <div class="span6" <?php echo $_SESSION['rtl'];?>>
                  <div class="control-group" style="margin-top: 10px;">
                      <label class="control-label">Bank Name</label>
                      <div class="controls">
                          <select  name="bank" id="bank" >
                            <option value="0">Select Bank</option>
                          <?php 
                          require('connect.php');
                         $sqlserivce_classes=mysql_query("select * from bank_detail Where cid='".$_SESSION['Id']."'");
                       	 while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                       	 {
                       		 $data222=$rowsqlserivce_classes['bank_name'];
                        ?>
                        <option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data222;?></option>
                        <?php
                        
                        }
                        
                        ?>

  </select>    
  <input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                   </div>
                  </div>
                  <div class="control-group" style="margin-top: 10px;">
                      <label class="control-label" >Phone Number</label>
                      <div class="controls">
                       <input name="phone"id="phone" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group" style="margin-top: 30px;">
                      <label class="control-label" >Address</label>
                      <div class="controls">
                       <input name="address"id="address" type="text" pattern="[a-zA-Z0-9/s]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group" style="margin-top: 30px;">
                      <label class="control-label">Nationality</label>
                      <div class="controls">
                        <select id="nationality" name="nationality">
<!--                         <option value="">Property Type</option>
 -->                        <option value="UAE">UAE</option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="Indain">Indain</option>
                        <option value="Bangladesh">Bangladesh</option>
                  
                       </select>
                      </div>
                  </div>
                                    <div class="control-group">
                      <label class="control-label" >Sponsor</label>
                      <div class="controls">
                          <select  name="sponsor" id="sponsor" >
            <option value="0">Select Sponsor</option>
          <?php 
          require('connect.php');
          echo "here";
		 $sqlserivce_classes=mysql_query("select * from sponsor Where cid='".$_SESSION['Id']."'");
		while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
		{
		echo "string".$data222=$rowsqlserivce_classes['sponsor_name'];
		?>
		<option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data222;?></option>
		<?php
		
		}
		
		?>

  </select>
                       <input name="desig"id="button3" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
     		 </div>
              </div> 
              
              
        
              <div class="clearfix"></div>
        <div id="result2">
              </div> 
              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit" onClick="Submit(this)"/>
              </div>
                  </form>
  </div>

      <div id="modal3" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
    <h3>Add New Sponsor</h3>
<div class="row-fluid">
      <div class="widget">
           <div class="row-fluid">                      
                        <div class="widget-body">
   
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
  
                  <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Sponsor Name</label>
                      <div class="controls">
                        <input name="sponsname"id="sponsname" pattern="[a-zA-Z\s]+" type="text" placeholder="John" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Mobile Number</label>
                      <div class="controls">
                        <input name="mobilenum"id="mobilenum" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxx" required/>
                      </div>
                  </div>
				  <div class="control-group">
                      <label class="control-label" style="float: left;width: 200px;">Personal Id Number</label>
                      <div class="controls">
                         <input name="persnum"id="persnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <input name="submit" type="button"  class="btn btn-primary" value="submit"onClick="popup(this)" />
              </div>
              </div> 
              
    
      </div>
  </div>
</div>

      </div>
      
     
           <div id="modal" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
    <h3>Add New Bank</h3>
<div class="row-fluid">
      <div class="widget">
           <div class="row-fluid">                      
                        <div class="widget-body">
   
              <div class="span4">
  
                  <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Bank Name</label>
                      <div class="controls">
                        <input name="bankname"id="bankname" pattern="[a-zA-Z\s]+" type="text" placeholder="John" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Country</label>
                      <div class="controls">
                        <select id="country">
                          <option value="0">UAE</option>
                          <option value="1">India</option>
                          <option value="2">Pakistan</option>
                        
                        </select>                      </div>
                  </div>
				  <div class="control-group">
                      <label class="control-label" style="float: left;width: 200px;">City</label>
                      <div class="controls">
                         <input name="city"id="city" type="text" pattern="[a-zA-Z\s]+" placeholder="Dubai" required/>
                      </div>
                  </div>
              		<div class="control-group">
                      <label class="control-label" style="float: left;width: 200px;">Details</label>
                      <div class="controls">
                                 <textarea rows="4" cols="50" id="details">

						</textarea>
                      </div>
                  </div>
                  <input name="submit" type="button"  class="btn btn-primary" value="submit"onClick="popupbank(this)" />
              </div>
              </div> 
              
    
      </div>
  </div>
</div>

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
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   
   <script src="js/scripts.js"></script>
<script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
   <script src="js/scripts.js"></script>

   <script type="text/javascript">
   
   
$(document).ready(function() {
 
  $('#button3').magnificPopup({
    type: 'inline',
    items: {src: '#modal3'},
    preloader: false,
    modal: true
  });
   
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });
});

function popup(obj)
{
		var sponsname= $("#sponsname").val();
		var mobilenum = $("#mobilenum").val();
		var persnum =$("#persnum").val();
		 var dataString= 'sponsname='+ sponsname + '&mobilenum='+ mobilenum + '&persnum='+persnum;  
	 $.ajax({
		
		url : "client_validate.php?id=10",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   result.id;
		   result.text;
		   $select = $('#sponsor');
		   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
		   $.magnificPopup.close();		   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
		
		
		
}

function popupbank(obj)
{
		debugger;
		var bankname= $("#bankname").val();
		var country = $("#country").val();
		var city =$("#city").val();
		var detail=$("#details").val();
		 var dataString= 'bankname=' + bankname + '&country=' + country + '&city=' + city + '&detail=' + detail;  
	 $.ajax({
		
		url : "client_validate.php?id=9",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		
		   result.id;
		   result.text;
		   $select = $('#bank');
		   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
		   $.magnificPopup.close();		   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 				debugger;
				}
		});	
		
		
		
}
function Submit(obj){
debugger;
var realname=$("#realname").val();
var emid=$("#idnum").val();
var email=$("#email").val();
var contact=$("#mobile").val();
var phone=$("#phone").val();
var address=$("#address").val();
var passport=$("#passport").val();
var pbox=$("#pbox").val();
var title=$("#jtitle").val();
var fax=$("#fax").val();
var account_no=$("#accountno").val();
var bank=$("#bank").val();
var nation=$("#nationality").val();
var companyname=$("#cname").val();
var notes=$("#notes").val();
var companyact=$("#cactivity").val();
var sponsor=$("#sponsor").val();

var ab =$('#vendor').is(':checked');

 
if(ab){

 var dataString= 'realname=' + realname + '&idnum=' + emid + '&email=' + email + '&mobile=' + contact + '&phone='  +phone  + '&address='  +address 
 + '&passport='  +passport+ '&pbox='  +pbox 
 + '&jtitle='  +title+ '&fax='  +fax
 + '&accountno='  +account_no+ '&bank='  +bank
 + '&nationality='  +nation+ '&cname='  +companyname
 + '&notes='  +notes+ '&cactivity='  +companyact+ '&sponsor='  +sponsor+ '&vender='  +'1';	
}
else{
	 var dataString= 'realname=' + realname + '&idnum=' + emid + '&email=' + email + '&mobile=' + contact + '&phone='  +phone  + '&address='  +address 
 + '&passport='  +passport+ '&pbox='  +pbox 
 + '&jtitle='  +title+ '&fax='  +fax
 + '&accountno='  +account_no+ '&bank='  +bank
 + '&nationality='  +nation+ '&cname='  +companyname
 + '&notes='  +''+ '&cactivity='  +''+ '&sponsor='  +sponsor + '&vender='  +'0';  
	}

	 $.ajax({
		
		url : "client_validate.php?id=11",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		
		   result.id;
		   result.text;
           if(result.id=='0')
           {
               $().toastmessage('showErrorToast', "Email is Already Registered");
           }
           else {
            document.getElementById("loginform").reset();
			document.getElementById("login2form").reset();	   
			$().toastmessage('showSuccessToast', "Record Added Successfully");
           }

		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 				debugger;
				}
		});	
}
	function venderservice(obj)
	{		if(obj.checked)
		{
			$( "#result" ).load("vendor.php");
		}
		else
		{
			$("#result").empty();
		}
	}
    </script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>