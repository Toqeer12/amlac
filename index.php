<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.3
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->


<?php
if(isset($_SESSION['user'])!="")
{
session_start();
 header("Location: index.php");
}

?>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Login page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style_responsive.css" rel="stylesheet" />
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />
  
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
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="img/Amlacnew.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="login_validate.php" method="POST">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
	  <span class="help-inline">
  <?php
	  session_start();
if (isset($_SESSION['message']))
{

    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

	  
	  ?>
	  
	  </span>
      <div class="control-wrap">

          <h4>User Login
</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
					  <input name="name"id="username" type="text" placeholder="Username" required/>
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span>
					  <input name="pass"id="password" type="password" placeholder="Password" required/>
                  </div>

                  

                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>
<div class="loader"></div>
      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login"   />
      
                            <div class="block-hint pull-right">
 							<a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
                         <a href="signup.php" class="" id="register">Register!!</a>

					  </div>
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="forget_password.php">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="email" type="text" placeholder="Email"  />
          </div>
        </div>

        <div class="space20"></div>
      </div>
      <input type="submit" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
	  
	  		<a href="javascript:;" class="" id="back_login">Back to Login</a>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2016 &copy; Vitamin Admin Lab Dashboard.
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.blockui.js"></script>
  <script src="js/scripts.js"></script>
  <script>
	  
	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
  
  
  
  
  
  
  
  
  
  
  
  <script type="text/javascript">


function getValueUsingClass(obj){
            debugger;
 
           var owner = document.getElementById("owner").checked;
           var admin = document.getElementById("admin").checked;
           var username=$("#input-username").val();
           var password=$("#input-password").val();
             if(owner==true)
           {
               var recowner = $("#owner").val();
           }
           else {
               var recowner="0";
           }
           if(admin==true)
           {
               var recrenterr= $("#admin").val();
           }else {
               var recrenterr="0";
           }
        
   
            
           var dataString= 'username='+ username + '&password='+ password+'&admin='+recrenterr+'&owner='+recowner;  
            debugger;
	 $.ajax({
		url : "login_validate.php",      
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{ debugger;
           if(result.id=='0')
           {
                         window.location="index.php";
           }
           else {
                         window.location="index.php";
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
<!-- END BODY -->
</html>