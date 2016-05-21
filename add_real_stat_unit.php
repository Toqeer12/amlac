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
   width: 500px;
  height: 100px;
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
   <div id="container" class="row-fluid"  <?php echo $_SESSION['rtl'];?>>
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
                   <?php GetProperty('unitinfo',$_SESSION['rtl']);?>
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
 
          <div class="widget-body">
            <form id="loginform" class="form-horizontal" action="real_stat_validate.php" method="POST" <?php echo $_SESSION['rtl'];?>>
            <div class="loader"></div>
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
    <div class="control-group">
                      <label class="control-label"><?php GetProperty('property',$_SESSION['rtl']);?></label>
         <div class="controls">
                 <select  id="propteryname" name="propteryname">
                    <option value="0">Select Property</option>
                <?php 
                    $var=$_SESSION['Id'];
                    $propert = SelectProperty($var);
                    for($i=0; $i < count($propert); $i++)
                    {           
                    ?>
				<option value="<?php echo $propert[$i]['id'];?>"><?php echo $propert[$i]['propty_name'];?></option>
                <?php
                    }
?>
                </select>
        </div>
   </div>

                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('unitnum',$_SESSION['rtl']);?></label>
                      <div class="controls">
                       <input name="blockno"id="blockno" type="text" pattern="[a-bA-Z0-9]+" placeholder="Block No"   required/>
                      </div>
                  </div>
                 <div class="control-group">
                      <label class="control-label"><?php GetProperty('annualrent',$_SESSION['rtl']);?></label>
                      <div class="controls">
                  <input name="anuallease"id="anuallease" type="text" pattern="[0-9]+" placeholder="0" onchange="comission3(this)" equired/>
                      </div>
                  </div>
                <div class="control-group">
                      <label class="control-label"><?php GetProperty('comisiontype',$_SESSION['rtl']);?></label>
                      <div class="controls">
                            <select id="ctype" name="ctype" onChange="comission(this)">
                            <option value="">Choose Type</option>
                            <option value="0">AED</option>
                            <option value="1">Percentage</option>
                            </select>
           
                      </div>
                  </div>
                 <div class="control-group">
                      <label class="control-label"><?php GetProperty('unitarea',$_SESSION['rtl']);?></label>
                      <div class="controls">
                         <input name="unitarae"id="unitarae" type="text" pattern="[0-9]+" placeholder="0" required/>
                      </div>
                  </div>
 

              </div>
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('propertytype',$_SESSION['rtl']);?></label>
                      <div class="controls">
                            <select id="ptype" name="ptype">
                     
            <?php
            
                    $property_type = Property_Type();
                    for($i=0; $i < count($property_type); $i++)
                    {           
                    ?>
				<option value="<?php echo $property_type[$i]['id'];?>"><?php echo $property_type[$i]['prop_type'];?></option><?php
                    }
            ?>	

  			</select><input name="desig"id="buttonaddproperty" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('insurance',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="insamount"id="insamount" type="text" placeholder="0"  required/>
                      </div>
                  </div>
                
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('comison',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="comision"id="comision" pattern="[0-9]+" type="text" placeholder="0" onchange="comission2(this)" required/>          
                      </div>
                  </div>
                 <div class="control-group">
                      <label class="control-label"><?php GetProperty('comisionamount',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="tcom" id="tcom" type="text" placeholder="0" onchange="comission3(this)" readonly />
                      </div>
                  </div>
                 
             </div>
             
	
              <div class="clearfix">
              </div>
              
              		<div id="addition">
            </div>
              <strong><a id="info" onClick="return  addinfo()"><?php GetProperty('advance',$_SESSION['rtl']);?></a></strong><br />
              <br>
                 <input align="center" style="margin-left:100px"type="submit" id="login-btn" class="btn btn-primary" value="Submit" />
              </div>
         
          </div>
      </div>
    </form>
  </div>
<div id="modal" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h4>Add New Property Title</h4>
<div class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <div class="widget">
           <div class="widget-body">
       
             
              <div class="span45"  >
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('propertytype',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="scripttitle"id="scripttitle" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
              </div>

              <div class="clearfix"></div>

              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit"  onClick="popuptitle()"/>
              </div>
          </div>
    
      </div>
  </div>
</div>
      <div id="modal4" class="white-popup-block mfp-hide">
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
	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
$(document).ready(function() {
 
  $('#buttonaddproperty').magnificPopup({
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
  
  function callback(response, status)
  {
	  if(status=="error")
	  {
		  
	  }
	  else
	  {
		  $("#info").hide();
		
	  }
	  
  }
  
  function addinfo()
  {
	  $( "#addition" ).load("addition_unit.php", callback);
	  
  }
    function empty()
  {
	  $("#info").show();
	  $( "#addition" ).empty();
	
  }
  
  	
	function popuptitle()
	{

 var realname= $("#scripttitle").val();

 var dataString= 'proptypenew='+ realname; 
$.ajax({
	
    url : "client_validate.php?id=5",
    type: "POST",
    data : dataString,
	cache: false,
    success: function(result)
    {
	 if (result) {
		 
       result.id;
	   result.text;
	   $select = $('#ptype');
	
	   $select.append('<option value="' + result.id+ '">' +result.text + '</option>');
	    $.magnificPopup.close();
          $().toastmessage('showSuccessToast', "Title is Added Successfully");	
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
  function comission(obj)
  {
	  debugger;
	  	var comission= $("#comision").val();
		var anualrent=$("#anuallease").val();
	    var ab=obj.options[obj.selectedIndex].value;
		if(ab==1)
		{
			anual = anualrent * (comission/100);
				
			document.getElementById('tcom').value=anual;
			//alert(anual);
		}
		else
		{
			document.getElementById('tcom').value=comission;
		}
	//  alert(ab);
  }
    function comission2(obj)
  {
	  debugger;
	  	var comission= $("#comision").val();
		var anualrent=$("#anuallease").val();
 
            var answer=document.getElementById("ctype");
        var ab=answer[answer.selectedIndex].value;
 
    		if(ab==1)
		{
			anual = anualrent * (comission/100);
				
			document.getElementById('tcom').value=anual;
			//alert(anual);
		}
        else if(ab==""){
             alert("Please Select comission Type");
        }
		else
		{
			document.getElementById('tcom').value=comission;
		}
	//  alert(ab);
  }
  
  
  function comission3(obj)
  {
	  debugger;
	  	var comission= $("#comision").val();
		var anualrent=$("#anuallease").val();
 
            var answer=document.getElementById("ctype");
        var ab=answer[answer.selectedIndex].value;
 
    		if(ab==1)
		{
			anual = anualrent * (comission/100);
				
			document.getElementById('tcom').value=anual;
			//alert(anual);
		}
        else if(ab==""||comission==""){
             alert("Please Select comission Type");
        }
		else
		{
			document.getElementById('tcom').value=comission;
		}
	//  alert(ab);
  }
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>