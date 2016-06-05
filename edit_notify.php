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
 <?php
 
 include 'css_header.php';
 ?>

 
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

    </div>

      <div id="main-content" <?php echo $_SESSION['rtl'];?>>


            <div class="row-fluid">
               <div class="span12">

                  <h3 class="page-title">
               <?php GetProperty('notifcationschdule',$_SESSION['rtl']);?>
                  </h3>

               </div>
            </div>

           <div class="row-fluid">
      <div class="widget">
  
          <div class="widget-body">
            <form id="loginform" class="form-horizontal"  method="POST">
            
              <div class="span4">
                  <strong><?php GetProperty('basicinfo',$_SESSION['rtl']);?></strong><br />
 
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('receiver',$_SESSION['rtl']);?></label>
                      <div class="controls">
                          
                       &nbsp; <input type="checkbox" id="own" name="vehicle" value="owner">&nbsp;&nbsp;&nbsp;Owner 
                       &nbsp; <input type="checkbox"  id="ren" name="vehicle" value="renter">&nbsp;&nbsp;&nbsp;Renter
                       &nbsp; <input type="checkbox" id="agentcheck" name="vehicle" value="agent">&nbsp;&nbsp;&nbsp;Agent 
                      </div>
                  </div>

    
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('notificationtime',$_SESSION['rtl']);?></label>
                      <div class="controls">
                       <input name="notitime"id="notitime" type="num" pattern="[0-9]+" value="" required/>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('ownertext',$_SESSION['rtl']);?></label>
                      <div class="controls">
                     <textarea rows="2" cols="100" id="owner" name="owner" placeholder="Owner Text*"></textarea>
                      </div>
                      </div>
                      <div class="control-group">
                           <label class="control-label"><?php GetProperty('rentertext',$_SESSION['rtl']);?></label>
                      <div class="controls">
                     <textarea rows="2" cols="100" id="renter" name="renter" placeholder="Renter Text*"></textarea>
                      </div>
                      </div>
                      <div class="control-group">
                           <label class="control-label"><?php GetProperty('officetext',$_SESSION['rtl']);?></label>
                       <div class="controls">
                     <textarea rows="2" cols="100" id="agent" name="agent" placeholder="Agent Text*"></textarea>
                        </div>
                      </div>
                      <div class="control-group">
                           <label class="control-label"><?php GetProperty('status',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      &nbsp; <input type="checkbox" id="chk2" name="vehicle" value="activate">&nbsp;&nbsp;&nbsp;Activate 
                        </div>
                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>                         
              <input type="button" id="login-btn" class="btn btn-primary" value="<?php GetProperty('submit',$_SESSION['rtl']);?>" data-id="<?php  echo $_GET['id'];?>" onclick="getValueUsingClass(this)"/>
              </div>   
          </div>
      </div>
    </form>
  </div>


  
     


      </div>
    </div>

    <script src="js/scripts.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
    <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>


 

<script type="text/javascript">


function getValueUsingClass(obj){
  
           var notitime     = $("#notitime").val();
           var ownertext    = $("#owner").val();
           var rentertext   = $("#renter").val();
           var agenttext    = $("#agent").val();
           var status       = $("#chk2").val();
           var own = document.getElementById("own").checked;
           var recrenter = document.getElementById("ren").checked;
           var recagent = document.getElementById("agentcheck").checked;
           var stat = document.getElementById("chk2").checked;
           var idd=obj.getAttribute("data-id");
            if(own==true)
           {
               var recowner = $("#own").val();
           }
           else {
               var recowner="0";
           }
           if(recrenter==true)
           {
               var recrenterr= $("#ren").val();
           }else {
               var recrenterr="0";
           }
           if(recagent==true)
           {
               var recagentt= $("#agentcheck").val();
           }
           else {
               var recagentt="0";
           }
           if(stat==true)
           {
               var status = 'Active';
           }
           else {
               var status = 'InActive';
           }
           var receiver = recowner+","+ recrenterr +","+recagentt;
           var dataString= 'notitime='+ notitime + '&ownertext='+ ownertext+'&rentertext='+rentertext+'&agenttext='+agenttext+'&status='+status+'&receiver='+receiver+'&id='+idd;  
            debugger;
	 $.ajax({
		url : "client_validate.php?id=777",      
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{ debugger;
           if(result.id=='0')
           {
                         window.location="notification.php";
           }
           else {
                         window.location="notification.php";
           }
           
       
 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
            debugger;
        console.log(jqXHR);
    
		}
         
		});	

}
</script>
</body>
</html>