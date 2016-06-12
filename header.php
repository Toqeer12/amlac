<!doctype html>

<?php
					  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  

 include 'session.php';

?>

<html>
<head>
<meta charset="utf-8">
<title><?php echo $var?></title>
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_default.css" rel="stylesheet" id="style_color" />
 
 <!--  <link rel="stylesheet" href="dist/magnific-popup.css"> -->

   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">


   <style type="text/css">


#modal2 {
  margin: 0 auto;
  padding: 0.5em;
  width: 300px;
  height: 200px;
  background: #eee;
  font-size: 8px;}
</style>
</head>

<body>


<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="main_page.php">

					<?php 
					require('connect.php');
		$select_query = "SELECT `images_path` FROM  `images_tbl` where cid=$id";
		$sql = mysql_query($select_query) or die(mysql_error());	
		$data_comm=mysql_fetch_assoc($sql);
		mysql_free_result($sql);
		$_SESSION['images_path'] = $data_comm['images_path'];
?>
				    <img style="margin-top: -15px;height: 90px;" src="<?php echo $data_comm['images_path']?>" alt="Admin Lab" onError="this.src='img/Amlacnew.png';"/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
 

					</ul>
			  <span class="username"><?php echo $varcom ?></span>
              
              
    </div>


                    <!-- END  NOTIFICATION -->

                <div class="top-nav ">
                    					           

                    <ul class="nav pull-right top-menu" >

						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.png" alt=""/>
                                <span class="username"><?php echo $var?></span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
								<li><a href="create_user.php"><i class="icon-tasks"></i>Access User</a></li>
								<li><a href="update_password.php"><i class="icon-tasks"></i> Change Password</a></li>
 								<li><a id="button2" href="#"><i class="icon-calendar"></i>Upload Logo</a></li>
								<li class="divider"></li>
								<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
                                 <div class="top-nav ">
                    					           

                    <ul class="nav pull-right top-menu" >

						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.png" alt=""/>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="language_selector.php?id=<?php echo urlencode($actual_link); ?>"><i class="icon-tasks"></i><?php  echo $_SESSION['language'];?></a></li>
							
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>

	<div id="modal2" class="white-popup-block mfp-hide">
<form action="getdata.php" enctype="multipart/form-data" method="post">
 <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
<h3> Upload Logo</h3>
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
<input name="uploadedimage" type="file">
</td>

</tr>

<tr>
<td>
<input name="Upload Now" type="submit" value="Upload Image">
</td>
<td>
<input name="cid" type="hidden" value="<?php echo $id?>">
</td>
</tr>


</tbody></table>

</form>
</div>
  <!-- // <script src="js/jquery-1.8.3.min.js"></script> -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>

<script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
 
	   <script type="text/javascript">
$(document).ready(function() {
 
  $('#button2').magnificPopup({
    type: 'inline',
    items: {src: '#modal2'},
    preloader: false,
    modal: true
  });

   
});
$(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
        $('form')[0].reset();
  });
</script>
</body>
</html>