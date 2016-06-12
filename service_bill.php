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
   </div>*/?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
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
      <div id="main-content" <?php echo $_SESSION['rtl'];?>>
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                <?php GetProperty('expense',$_SESSION['rtl']);?>
                   
                  </h3>

               </div>
            </div>

           <div class="row-fluid">
      <div class="widget">
  
          <div class="widget-body">
          
           <button type="button" class="btn btn-primary"  data-owner="<?php echo $_GET['owner']?>" data-prop="<?php echo $_GET['property'] ?>" dataunit="<?php $_GET['unit'] ?>" onClick="vender(this)"><?php GetProperty('addvendor',$_SESSION['rtl']);?></button>       
           <br>

            <form id="loginform" class="form-horizontal" method="POST">
            
              <div class="span4">
                  <strong><?php GetProperty('basicinfo',$_SESSION['rtl']);?></strong><br />
          
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('customer',$_SESSION['rtl']);?></label>
                      <div class="controls">
                    <?php
					require('connect.php');
  					$sql= "SELECT * From rent_property WHERE property_name='".$_GET['property']."' And unit='".$_GET['unit']."'";   
					$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			        if($result)
			    	 {
				    	 if(mysql_num_rows($result) > 0) 
				    		{
				        	 $member = mysql_fetch_assoc($result); 
                                
					            $sql= "SELECT * From clients WHERE id='".$member['renter']."'";   
					            $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			            if($result)
			            	 {
				        	 if(mysql_num_rows($result) > 0) 
				          		{ 
				        		$member2 = mysql_fetch_assoc($result);
					         $var= $member2['real_name'];
						
						?> 
                              <input name="cname"id="cname" type="text" value="<?php echo $var;?>"
                           readonly/>
                     <?php }
                      }
						}
				 }?>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('type',$_SESSION['rtl']);?></label>
                      <div class="controls">
 						<input name="servicebill"id="servicebill" type="text" value="Service Bill"   readonly/>
                      </div>
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
                      <label class="control-label"><?php GetProperty('amount',$_SESSION['rtl']);?></label>
                      <div class="controls">
                  <input name="amount"id="amount" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>
							<input name="owner"id="owner" type="hidden" value="<?php echo $_GET['owner'];?>"required/>
							<input name="property"id="property" type="hidden" value="<?php echo $_GET['property'];?>" required/>
                            <input name="unit"id="unit" type="hidden" value="<?php echo $_GET['unit'];?>" required/>
                   <div class="control-group">
                      <label class="control-label"><?php GetProperty('notes',$_SESSION['rtl']);?></label>
                      <div class="controls">
                   		<textarea rows="4" cols="50" id="notes"></textarea>
                      </div>
                  </div>

              </div>
              <div class="span4">
<br>


              </div>
              <div class="clearfix"></div>
              <input type="button" id="login-btn"  comp-id="<?php echo $_SESSION['Id']?>" onClick="servicebillpost(this)" class="btn btn-primary" value="<?php GetProperty('submit',$_SESSION['rtl']);?>" />
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
   <script src="js/scripts.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
  <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
 


   <script type="text/javascript">

$(document).ready(function() {
 
  $('#buttonvendor').magnificPopup({
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
  
  function servicebillpost(obj)
  {
	  debugger;
	  
	  var customername=$("#cname").val();
	  var type=$("#servicebill").val();
	  var vendor=$("#vendor").val();
	  var amount=$("#amount").val();
	  var notes=$("#notes").val();
	   var owner=$("#owner").val();
	  var property=$("#property").val();
      var unit=$("#unit").val();
      var companyId=obj.getAttribute("comp-id");
 
	  var dataString= 'customername='+ customername + '&type='+ type + '&vendor='+vendor + '&amount='+ amount + '&notes='+ notes + '&owner='+ owner + '&property='+ property + '&unit='+unit+ '&comp='+companyId;  
	 $.ajax({
		url : "client_validate.php?id=15",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   
		   result.ownerid;
		   result.property;
           result.unit;
				$( '#loginform' ).each(function(){
  				  this.reset();
				  window.location = "job_title.php?id="+result.ownerid+"&property="+result.property+"&unit="+result.unit;
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
      var owner = obj.getAttribute("data-owner");
      var property =obj.getAttribute("data-prop");
      var unit  =$("#unit").val();
		window.location="add_vendor.php?owner="+owner+"&property="+property+"&unit="+unit+"&btype=sb";
  }
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>