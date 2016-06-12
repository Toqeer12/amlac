<!DOCTYPE html>

<?php
if(isset($_SESSION['user'])!="")
{
session_start();
 header("Location: index.php");
}

?>
<html lang="en">

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
    <form id="loginform" class="form-vertical no-padding no-margin" action="update_password_validate.php" method="POST">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
	  <span class="help-inline">

	  
	  </span>
      <div class="control-wrap">

          <h4>Change Password
</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
					  <input name="name"id="input-username" type="text" placeholder="Username" required/>
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span>
					  <input name="pass"id="input-password" type="password" placeholder="Password" required/>
                  </div>


                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>
<div class="loader"></div>
      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Update" />
    </form>

  </div>

  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.blockui.js"></script>
  <script src="js/scripts.js"></script>
  <script>
	  
	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
 
  </script>
</body>
<!-- END BODY -->
</html>