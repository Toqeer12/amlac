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
 
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="build/toastr.css" rel="stylesheet" type="text/css" />

<style type="text/css">


#modal {
  margin: 0 auto;
  width: 300px;
  height:600px;
  background: #eee;
  font-size: 8px;} 
#modal3 {
  margin: 0 auto;
  width: 300px;
  height: 400px;
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
                   Add Client
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
          <div class="widget-body">

      
            <div class="span6" >
                  <!-- BEGIN SAMPLE TABLE widget-->            
                 <div class="widget">
                          
                            <div class="widget-body" style="width: 40px;">
                               <form id="newsletterform" class="form-horizontal"  method="POST">
                                             <div class="loader"></div>
                                      <div class="span6">
                                          
                                      <div class="control-group">
                                              <label class="control-label"><?php GetProperty('renter',$_SESSION['rtl']);

?></label>
                                              <div class="controls">
                                               			<select  id="renter" name="renter" onChange="changerenter(this)" required>
                                                              <option value="0">Select Renter</option>
                                                              <?php 
                                                                    $var=$_SESSION['Id'];
                                                                    $leaserrenter= LoadRenterFinance($var);
                                                                    for ($i=0; $i < count($leaserrenter); $i++)
                                                                    {?>
                                                                    <option value="<?php echo $leaserrenter[$i]['id'];?>"><?php echo $leaserrenter[$i]['real_name'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>      
                                              </div>
                                          </div>
                                          <div id="result">
                                              </div>
                                           <div id="result2">
                                              </div>     

                                      </div>
                                      <br>
                                      <div class="clearfix"></div>
                                      <div class="form-actions">
                                           <input name="submit" type="button" class="btn btn-primary" value="<?php GetProperty('submit',$_SESSION['rtl']);

?>" onClick="updaterent(this)"/>
                                      </div>
                                                          

                                  </form>
                             </div>
                    </div>
                  <!-- END SAMPLE TABLE widget-->
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
   
      
    $(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
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
    function changerenter(obj)
    {
        debugger;
        
        var ab=obj.options[obj.selectedIndex].value;
        if(ab==0)
        {
        alert("Please Chosse Renter");    
        }
        else{
            
           
            $( "#result" ).load("unit_payment_test.php?id="+ab);
        }
    }

function updaterent(obj)
{debugger;
    var empty=$("#empty").val();
    var unit =$("#unitid").val();
    var renter =$("#renter").val();
  
	var ownerid =$("#owner").val();
     var property =$("#property").val();

    var startdate = $("#duedate").val();
	var paymethod = $("#paymethod").val();
	var amount = $("#amount").val();
      var actualamount = $("#actualpayment").val();
      var statement = $("#statement").val();
      
      if(amount=='')
      {
            $().toastmessage('showErrorToast', "Please Enter Amount");
      }
    else if(amount > actualamount)
    {
         $().toastmessage('showErrorToast', "Enter Amount is Greater Than Actual Amount");
     }
    else{
        	var dataString= 'startdate='+ startdate + '&paymentmethod='+paymethod + '&amount='+ amount + '&ownerid='+ ownerid  + '&property='+ property + '&unit='+ unit+ '&statement='+ statement;  
	 $.ajax({
		
		url : "client_validate.php?id=8",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   result.cid;
           if(result.cid=='33')
           {
               alert("Please Pay Full Amount");
           }
           else if(result.cid=='34')
           {
                alert("Please Pay Full Amount");
           }
           else{
               
               $().toastmessage('showSuccessToast', "Rent Paid Successfully");
               window.location="finance.php";
           }
	 
   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
    }
}
function changeunit(obj)
{
     debugger;
    var ab=obj.options[obj.selectedIndex].value;
    var a=obj.options[obj.selectedIndex].getAttribute('dataprop');
    var b=obj.options[obj.selectedIndex].getAttribute('dataowner');
    var empty=$("#empty").val();
    if(ab==0)
    {
                       $().toastmessage('showErrorToast', "Please Select Unit");

    }
    else
    {
              $( "#result2" ).load("detail_payment.php?unit="+ab+"&propertyid="+a+"&ownerid="+b);
    }
 
        

     
}





    </script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>