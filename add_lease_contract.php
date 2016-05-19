<!DOCTYPE html>

<?php
session_start();
 $_SESSION['rtl']='rtl';

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
                   Property Data
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
          <div class="widget-title">
              <h4><i class="icon-reorder"></i>Add User</h4>
   
          </div>
          <div class="widget-body">
            <form id="loginform" class="form-horizontal" action="property_validate.php" method="POST">
            
              <div class="span4">
                  <strong>Basic Info</strong><br />
          
                  <div class="control-group">
                      <label class="control-label">Property Name</label>
                      <div class="controls">
                    <input name="pname"id="pname" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Property Type</label>
                      <div class="controls">
                            <select id="ptype" name="ptype">
                            <option value="">Property Type</option>
                            <option value="1">Residence Building</option>
                            <option value="2">A House</option>
                            <option value="3">Duplex</option>
                            <option value="4">Villa</option>
                            <option value="5">Land</option>
                            <option value="6">Palace</option>
                            <option value="7">Private Property</option>
                            <option value="8">Petrol Station</option>
                            </select>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Block No</label>
                      <div class="controls">
                       <input name="blockno"id="blockno" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>

           <strong>Investment Data</strong><br />
              <br />              
                  <div class="control-group">
                      <label class="control-label">Investor</label>
                      <div class="controls">
                                      <!-- <span  class="add-on"><i class="icon-user"></i></span> -->
         
          <select  id="serivce_classes" name="serivce_classes">
            <option value="">Select Customer</option>
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

  </select><input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label">Land No</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>

                           <div class="control-group">
                      <label class="control-label">Annual Rental Value</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>
                                  <div class="control-group">
                      <label class="control-label">Date of End Investment</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="date" placeholder="Property No" required/>
           
                      </div>
                  </div>
              </div>
              <div class="span4">
<br>

                   <div class="control-group">
                      <label class="control-label">Address</label>
                      <div class="controls">
                 <input name="paddress"id="paddress" type="text" placeholder="Address" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Year Build</label>
                      <div class="controls">
                        <input name="ybuild"id="ybuild" type="week" placeholder="Year Build" required/>
                      </div>
                  </div>
            
                     <div class="control-group">
                      <label class="control-label">About Him</label>
                      <div class="controls">
                        <textarea rows="2" cols="100" id="about" name="about" placeholder="About Him*"></textarea>
                      </div>
                  </div>
                  <div class="control-group">
                      <!-- <label class="control-label">User ID</label> -->
                      <div class="controls">
            
                      </div>
                  </div>
         
    
                
                                    <div class="control-group">
                      <label class="control-label">Owner</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>
                                   <div class="control-group">
                      <label class="control-label">No Investment/Agreement</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
           
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label">Date of Start Investment</label>
                      <div class="controls">
                  <input name="pn"id="pn" type="date" placeholder="Property No" required/>
           
                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>
              <input type="submit" id="login-btn" class="btn btn-primary" value="Submit" />
              </div>
              <div class="form-actions">
                  
              </div>
          </div>
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
            <form id="loginform" class="form-horizontal" action="client_validate.php" method="POST">
             
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
                   <input name="submit" type="submit"  class="btn btn-primary" value="Submit" />
              </div>
                  </form>
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
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>