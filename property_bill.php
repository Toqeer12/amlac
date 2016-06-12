<!DOCTYPE html>

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
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?php echo $var?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
  <?php
  
  include 'css_header.php';
  ?>


<style type="text/css">


#modal {
  margin: 0 auto;
  padding: 0.5em;
  width: 1500px;
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

   <?php 
   include 'header.php';?>
       <!-- BEGIN TOP NAVIGATION BAR -->
 
       <!-- END TOP NAVIGATION BAR -->
   </div> 
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];

?>>
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
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
      <div id="main-content" <?php echo $_SESSION['rtl'];

?>>
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                  <?php GetProperty('propertyexp',$_SESSION['rtl']);?>
                   
                  </h3>

               </div>
            </div>

           <div class="row-fluid">
      <div class="widget">
 
          <div class="widget-body">
          <div class="loader"></div>
          <button type="button" class="btn btn-primary"data-ownerId="<?php echo $_GET['ownerid']?>"  onClick="vender(this)"><?php GetProperty('addvendor',$_SESSION['rtl']);?></button>    
            <form id="loginform" class="form-horizontal" method="POST">
            
              <div class="span4">
           
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('ownername',$_SESSION['rtl']);?></label>
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
                      <label class="control-label"><?php GetProperty('property',$_SESSION['rtl']);?></label>
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
                      <label class="control-label"><?php GetProperty('unitss',$_SESSION['rtl']);?></label>
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
                      <label class="control-label"><?php GetProperty('type',$_SESSION['rtl']);?></label>
                      <div class="controls">
                                <select  name="type" id="type" >
             
                            <option value="ServiceBill">Service Bill</option>
                  			<option value="MaintanceBill">Maintance Bill</option>
							<option value="ElectercityBill">Electercity Bill</option>
  						</select>                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('vendor',$_SESSION['rtl']);?></label>
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
                      <label class="control-label"><?php GetProperty('billnumber',$_SESSION['rtl']);?></label>
                      <div class="controls">
                  		<input name="bill"id="bill" type="text" placeholder="Bill No" required/>
                      </div>
                  	</div>
                   <div class="control-group">
                      <label class="control-label"><?php GetProperty('amount',$_SESSION['rtl']);?></label>
                      <div class="controls">
                  		<input name="amount"id="amount" type="text" placeholder="Amount" required/>
                      </div>
                  </div>
							<input name="owner"id="owner" type="hidden" value="<?php echo $_GET['owner'];?>"required/>
							<input name="property"id="property" type="hidden" value="<?php echo $_GET['property'];?>" required/>
                   <div class="control-group">
                      <label class="control-label"><?php GetProperty('notes',$_SESSION['rtl']);?></label>
                      <div class="controls">
                   		<textarea rows="4" cols="50" id="notes"></textarea>
                      </div>
                  </div>
                   <div class="control-group">
                      <label class="control-label"><?php GetProperty('notes',$_SESSION['rtl']);?></label>
                      <div class="controls">
                  		<input name="datee"id="datee" type="date" required/>
                      </div>
                  </div>
                  <input type="hidden" id="propid" value="<?php echo $_GET['propertyId'];?>"
                  <input type="hidden" id="ownerid" value="<?php echo $_GET['ownerid'];?>"
              </div>
              <div class="span4">
<br>


              </div>
              <div class="clearfix"></div>
              <input type="button" id="login-btn" data-ownerId="<?php echo $_GET['ownerid']?>"onClick="propertybillpost(this)" class="btn btn-primary" value="<?php GetProperty('submit',$_SESSION['rtl']);?>" />
              </div>
              <div class="form-actions">
                  
              </div>
          </div>
      </div>
    </form>
  </div>



      </div>
    </div>
 
   <script src="js/scripts.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
 
 


   <script type="text/javascript">
 $(window).load(function() {
	$(".loader").fadeOut("slow");
})
$(document).ready(function() {
 
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });

 
  
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
    debugger;
    var owner=obj.getAttribute("data-ownerId");
 	  var propname=$("#propid").val();
	  var unitt=$("#unit").val();
		window.location="add_vendor.php?owner="+owner+"&property="+propname+"&unit="+unitt"&btype=pb";
  }
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>