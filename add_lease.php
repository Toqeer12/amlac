<!DOCTYPE html>

<?php
session_start();
if(!(isset($_SESSION['user']))){
header("location:index.php");
unset($_SESSION['user']);
}


    if (isset($_SESSION['message']))
{

    echo $_SESSION['message'];
    unset($_SESSION['message']);
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
  width: 1500px;
  height: 500px;
  background: #eee;
  font-size: 8px;}
  #modal3 {
  margin: 0 auto;
  padding: 0.5em;
  width: 400px;
  height: 300px;
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

                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                 Add New Contract
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
          <div class="widget-title">
              <h4><i class="icon-reorder"></i>Lease Contract</h4>
   
          </div>
          <div class="widget-body">
       <form id="newsletterform" class="form-horizontal"  method="POST" <?php echo $_SESSION['rtl'];?>>
             
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                 <strong>Basic Info</strong><br />

                  <div class="control-group">
                      <label class="control-label">Duration of Contract</label>
                      <div class="controls">
                        <input name="duration"id="duration" pattern="[0-9]+" type="num" required/>
                        <img   src="img/PLUS.jpg" placeholder="Owner"/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Start From</label>
                      <div class="controls">
                      <input name="startcontract"id="startcontract"  type="date" placeholder="example@xyz.com" onChange="ContractExpire(this)"      required/>
         
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Property Name</label>
                      <div class="controls">
                                      <!-- <span  class="add-on"><i class="icon-user"></i></span> -->
         
          <select  id="serivce_classes" name="serivce_classes" onChange="changeTest(this)">
            <option value="">Select Property</option>
          <?php 
          require('connect.php');
       $sqlserivce_classes=mysql_query("select DISTINCT property_name from real_state_unit Where cid='".$_SESSION['Id']."'");
while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
{
echo "string".$data222=$rowsqlserivce_classes['property_name'];
$sqlserivce_classes2=mysql_query("select * from add_property Where id='$data222'");
while($rowsqlserivce_classes2=mysql_fetch_array($sqlserivce_classes2))
{
	$data=$rowsqlserivce_classes2['propty_name'];
?>
<option value="<?php echo $rowsqlserivce_classes2['id'];?>"><?php echo $data;?></option>
<?php
}
}

?>

  </select>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label">Text of Contract</label>
                      <div class="controls">
                               <select  id="contract" name="serivce_classes">
           
          <?php 
          require('connect.php');
 $sqlserivce_classes=mysql_query("select * from script Where cid='".$_SESSION['Id']."'");
while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
{
echo "string".$data222=$rowsqlserivce_classes['script_title'];
?>
<option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data222;?></option>
<?php

}

?>

  </select><input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>

                      </div>
                  </div>

              </div>
              <br>
              <div class="span6" <?php echo $_SESSION['rtl'];?>>
                  <div class="control-group">
                      <label class="control-label">Writing of Contract</label>
                      <div class="controls">
                         <input name="writecontract"id="writecontract" type="date" pattern="[0-9]+" placeholder="452xxxxx"  onchange="notify(this)"required/>
                      </div>
                  </div>
                         <div class="control-group">
                      <label class="control-label">Ending at</label>
                      <div class="controls">
                         <input name="idnum"id="endcontract" type="text" pattern="[0-9]+" placeholder="mm/dd/yyyy" readonly/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Renter</label>
                      <div class="controls">
                                      <!-- <span  class="add-on"><i class="icon-user"></i></span> -->
         
          <select  name="serivce_classes" id="renter" >
            <option value="">Select Renter</option>
          <?php 
          require('connect.php');
          echo "here";
		 $sqlserivce_classes=mysql_query("select * from clients Where cid='".$_SESSION['Id']."'");
		while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
		{
		echo "string".$data222=$rowsqlserivce_classes['real_name'];
		?>
		<option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data222;?></option>
		<?php
		
		}
		
		?>

  </select><input name="desig"id="button3" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>

              </div>
              <div class="clearfix"></div>
		<div id="result">
        
        </div>
        
        	<div id="result2">
        
        </div>
        
              	<div id="result3">
        
        </div>
              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit" onClick="SubmitRented()"/>
              </div>
          </form>
  </div>

      <div id="modal" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h3>Add New Client</h3>
<div class="row-fluid">
      <div class="widget">
           <div class="widget-body">
       
             
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
                      <input name="phone"id="phone" type="text" placeholder="04xxxxxx" required/>

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
                      <input name="fax"id="fax" type="tel" pattern="[0-9]+" placeholder="05xxxx" required/>

                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>

              <div class="form-actions">
                   <input name="submit" type="submit"  class="btn btn-primary" value="Submit" onClick="popup()"/>
              </div>
          </div>
    
      </div>
  </div>
</div>

<div id="modal3" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h3>Add New Script</h3>
<div class="row-fluid">
      <div class="widget">
           <div class="widget-body">
          
             
              <div class="span4">
                  <div class="control-group">
                      <label class="control-label">Script Title</label>
                      <div class="controls">
                        <input name="scripttitle"id="scripttitle" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Script</label>
                      <div class="controls">
                      <textarea rows="4" cols="50" name="script" id="script" pattern="[a-zA-Z\s]+"></textarea>
         
                      </div>
                  </div>


              </div>

              <div class="clearfix"></div>

              <div class="form-actions">
                   <input name="submit" type="submit"  class="btn btn-primary" value="Submit" onClick="popuptitle()"/>
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
 
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script src="js/scripts.js"></script>
   <script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>

   <script src="toastr.js"></script>


   <script type="text/javascript">

$(document).ready(function() {
 
  $('#button3').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal3'},
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
  
function changeTest(obj)
{
		debugger;
			var ab=obj.options[obj.selectedIndex].value;
		
			$( "#result" ).load("grid_lease.php?id="+ab);
			   // alert(obj.options[obj.selectedIndex].value);
}
function popup()
{ 
	  
	
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
		   result.id;
		   result.text;
		   $select = $('#renter');
		   $select.append('<option value="' + result.id+ '">' +result.text + '</option>');
		   $.magnificPopup.close();		   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});		
	}
	
function popuptitle()
	{
		var realname= $("#scripttitle").val();
		var scriptdesc= $("#script").val();
 		var dataString= 'scripttitle='+ realname +'&script='+scriptdesc; 
	$.ajax({
		url : "client_validate.php?id=3",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		 if (result) {
			 
		   result.id;
		   result.text;
		   $select = $('#contract');	
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
	function payment(obj)
	{
	debugger;
		if(obj.checked)
		{
            var status=obj.getAttribute("data-status");
		var checkedValue = obj.getAttribute("data-id");
		var checkedValue2 = obj.getAttribute("data-anual-lease");
        var unit = obj.getAttribute("data-unit");
        if(status=='Rented')
        {
           $().toastmessage('showErrorToast', "Property Already in Lease");	

        }
        else {
        $( "#result2" ).load("create_payment.php?id="+checkedValue2+"&unitid="+unit);
        }
		
	
		}
		else
		{
			
			$( "#result2" ).empty();
			$( "#result3" ).empty();
		}
	
	}
	
		function paymentmethod(obj)
	{
		debugger;
		var propertyname=$("#serivce_classes").val();
        $().toastmessage('showSuccessToast', "Payment is Created Successfully");	
		var startdate = $("#startcontract").val();
		var duration = $("#duration").val();
		var checkedValue = obj.getAttribute("data-id");
        var unit = obj.getAttribute("data-unit");
		var month =$("#month").val();
		var payment=checkedValue/12;
		var pay=payment*duration;
		var an=duration/month;
		var round = Math.ceil(an)
		var finalpayment=pay/round;
		$( "#result3" ).load("financial_payment.php?dur="+round+"&startdate="+startdate+"&totalpayment="+pay+"&finalpayment="+finalpayment+"&mon="+month+"&propertyname="+propertyname+"&unit="+unit);
		
	}
	

	function ContractExpire(obj)
	{
		
		//debugger;
		var startdate = $("#startcontract").val();
		var duration = $("#duration").val();
		if(duration == null || duration === '')
		{
			 document.getElementById("duration").style.borderColor = "red";
			 document.getElementById("duration").placeholder = "Please Enter Duration..";
		}
		else
		{
			document.getElementById("duration").style.borderColor = "#F2F2F2";		 
			var conexp = $("#endcontract").val();
			var d = new Date(startdate);
			var a = parseInt(duration);
			d.setMonth(d.getMonth() + a);
			var day = d.getDate();
			var monthIndex = d.getMonth();
			var year = d.getFullYear();
			var monthNames = [
			  "January", "February", "March",
			  "April", "May", "June", "July",
			  "August", "September", "October",
			  "November", "December"
			];
		var exp=year+'-'+monthNames[monthIndex]+'-'+day;
		document.getElementById('endcontract').value=exp;
		}
	}
	function SubmitRented()
	{
		debugger;
		var startdate = $("#startcontract").val();
		var duration = $("#duration").val();
		var month =$("#month").val();
		var propertyname=$("#serivce_classes").val();
		var endcontract=$("#endcontract").val();
		var script_contract=$("#contract").val();
		var write_contract=$("#writecontract").val();
		var renter=$("#renter").val();	
        var anuallease=$("#paym").val();
        var unit =$("#un").val();
        var dataString= 'duration='+ duration + '&startdate='+ startdate + '&month='+month + '&propertyname='+ propertyname + '&endcontract='+ endcontract  + '&script_contract='+ script_contract  + '&write_contract='+ write_contract + '&renter='+renter +'&payment='+anuallease +'&unit='+unit;  
	 $.ajax({
		url : "client_validate.php?id=7",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{  debugger;
		   result.cid;
		   result.ownerid;
		   result.property;
		   result.unit;
		   if(result.cid=='0')
		   {
			  $().toastmessage('showErrorToast', "owner and Renter cannot be same");	
  		   }
            else if(result.cid=='40')
            {
                 $().toastmessage('showErrorToast', "Property is already in lease");
            }
		   else if(result.cid=='11')
		   {
         	//  window.location = "job_title.php?id="+result.ownerid+"&property="+result.property+"&unit="+result.unit;
               window.location = "send_notification.php?id="+result.ownerid+"&property="+result.property+"&unit="+result.unit;
				 	
		   }
           else
           {
               alert("abc");
           }
   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{debugger;
	 			alert("error"+result.property);
		}
		});	
	
	}
    
     
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>