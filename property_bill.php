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

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
 <!--  <link rel="stylesheet" href="dist/magnific-popup.css"> -->
<link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">



<style type="text/css">


#modal {
  margin: 0 auto;
  padding: 0.5em;
  width: 1500px;
  height: 500px;
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
   </div>*/?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
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
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                  Expense
                   
                  </h3>

               </div>
            </div>

           <div class="row-fluid">
      <div class="widget">
          <div class="widget-title">
              <h4><i class="icon-reorder"></i>Add Expense</h4>  
          </div>
          <div class="widget-body">
          
          <button type="button" class="btn btn-primary" onClick="vender(this)">Add Vender</button>    
            <form id="loginform" class="form-horizontal" method="POST">
            
              <div class="span4">
                  <strong>Basic Info</strong><br />
          
                  <div class="control-group">
                      <label class="control-label">Owner Name</label>
                      <div class="controls">
                    <?php
					require('connect.php');
            
                            $sqlserivce_classes=mysql_query("select * from clients Where id='".$_GET['ownerid']."'");
                            while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                            {
                        		$data=$rowsqlserivce_classes['real_name'];
                            ?>
                            
                            <?php
                            
                            }
?>
                    <input name="owner"id="owner" type="text" value="<?php echo $data;?>"   readonly/>
                  
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Property</label>
                      <div class="controls">
                    <?php
			                   
				                  	require('connect.php');

                            $sqlserivce_classes=mysql_query("select * from add_property Where id='".$_GET['propertyId']."'");
                            while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                            {
                        		$data=$rowsqlserivce_classes['propty_name'];
                            ?>
                            
                            <?php
                            
                            }
?>

                    <input name="propname"id="propname" type="text" value="<?php echo $data;?>"   readonly/>
                  
                      </div>
                  </div>
                  
                     <div class="control-group">
                      <label class="control-label">Unit</label>
                      <div class="controls">
                                <select  name="unit" id="unit" placeholder="Select Vendor">
                               
                              <?php 
                              require('connect.php');
                            
                            $sqlserivce_classes=mysql_query("select * from real_state_unit Where property_name='".$_GET['propertyId']."'");
                            while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                            {
                        		$data=$rowsqlserivce_classes['block_no'];
                            ?>
                            <option value="<?php echo $data;?>"><?php echo $data;?></option>
                            <?php
                            
                            }
                            
                            ?>

  						</select>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Type</label>
                      <div class="controls">
                                <select  name="type" id="type" >
             
                            <option value="ServiceBill">Service Bill</option>
                  			<option value="MaintanceBill">Maintance Bill</option>
							<option value="ElectercityBill">Electercity Bill</option>
  						</select>                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Vender</label>
                      <div class="controls">
                                <select  name="vendor" id="vendor" >
                                <option value="">Select Vender</option>
                              <?php 
                              require('connect.php');
                              echo "here";
                            $sqlserivce_classes=mysql_query("select * from clients Where cid='".$_SESSION['Id']."' And vendor='1'");
                            while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                            {
                            echo "string".$data222=$rowsqlserivce_classes['real_name'];
                            ?>
                            <option value="<?php echo $rowsqlserivce_classes['id'];?>"><?php echo $data222;?></option>
                            <?php
                            
                            }
                            
                            ?>

  						</select>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label">Bill No</label>
                      <div class="controls">
                  		<input name="bill"id="bill" type="text" placeholder="Bill No" required/>
                      </div>
                  	</div>
                   <div class="control-group">
                      <label class="control-label">Amount</label>
                      <div class="controls">
                  		<input name="amount"id="amount" type="text" placeholder="Amount" required/>
                      </div>
                  </div>
							<input name="owner"id="owner" type="hidden" value="<?php echo $_GET['owner'];?>"required/>
							<input name="property"id="property" type="hidden" value="<?php echo $_GET['property'];?>" required/>
                   <div class="control-group">
                      <label class="control-label">Notes</label>
                      <div class="controls">
                   		<textarea rows="4" cols="50" id="notes"></textarea>
                      </div>
                  </div>
                   <div class="control-group">
                      <label class="control-label">Date</label>
                      <div class="controls">
                  		<input name="datee"id="datee" type="date" required/>
                      </div>
                  </div>
                  <input type="hidden" id="propid" value="<?php echo $_GET['propertyId'];?>"
              </div>
              <div class="span4">
<br>


              </div>
              <div class="clearfix"></div>
              <input type="button" id="login-btn" data-ownerId="<?php echo $_GET['ownerid']?>"onClick="propertybillpost(this)" class="btn btn-primary" value="Submit" />
              </div>
              <div class="form-actions">
                  
              </div>
          </div>
      </div>
    </form>
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
 <script src="assets/main/javascript/jquery.toastmessage.js"></script>
<script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>

   // <script>
   //    jQuery(document).ready(function() {       
   //       // initiate layout and plugins
         
   //    });
   // </script>


   <script type="text/javascript">

$(document).ready(function() {
 
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
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
  
  function propertybillpost(obj)
  {
	  debugger;
	  
	  var owner=$("#owner").val();
	  var propname=$("#propname").val();
	  var unitt=$("#unit").val();
	  var type=$("#type").val();
	  var vendor=$("#vendor").val();
	  var bill=$("#bill").val();
	  var amount=$("#amount").val();
	  var notes=$("#notes").val();
	  var datee=$("#datee").val();	
	  var property=$("#propid").val();
	  var ownerId=obj.getAttribute("data-ownerId");
	 
	  var dataString= 'owner='+ owner + '&propname='+ propname + '&unitt='+unitt + '&type='+ type + '&vendor='+ vendor + '&bill='+ bill + '&amount='+ amount+ '&notes='+ notes+ '&datee='+ datee+ '&property='+ property+'&owmerId='+ownerId;  
	 $.ajax({
		url : "client_validate.php?id=20",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   $().toastmessage('showSuccessToast', "Record Added Successfully");
		   result.text;
	
				$( '#loginform' ).each(function(){
  				  this.reset();
				  window.location = "prop_overview.php";
});	   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
	
  }
  
    function vender(obj)
  {
		window.location="add_vendor.php?id=1";
  }
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>