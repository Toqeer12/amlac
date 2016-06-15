<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
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

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?php echo $var;?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
<?php

include 'css_header.php';

?>
<style>
    table#tableSection {
        display: table;
        width: 100%;
    }
    table#tableSection thead, table#tableSection tbody {
        float: left;
        width: 100%;
    }
    table#tableSection tbody {
        overflow: auto;
        height: 350px;
    }
    table#tableSection tr {
        width: 100%;
        display: table;
        text-align: left;
    }
    table#tableSection th, table#tableSection td {
        width: 15%;
    }
body {
  background: gray;
  font-family: sans-serif;
}
.wrapper {
  background: white;
  margin: auto;
  padding: 1em;
	height:500px
}
h1 {
  text-align: center;
}
ul.tabs {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
ul.tabs li {
  border: gray solid 1px;
  border-bottom: none;
  float: left;
  margin: 0 .25em 0 0;
  padding: .25em .5em;
}
ul.tabs li a {
  color: gray;
  font-weight: bold;
  text-decoration: none;
}
ul.tabs li.active {
  background: gray;
}
ul.tabs li.active a {
  color: white;
}
.clr {
  clear: both;
}
article {
  border-top: gray solid 1px;
  padding: 0 1em;
}
</style>

    
    <style type="text/css">


#modalload2 {
  margin: 0 auto;
  padding: 0.5em;
  width: 800px;
  height:500px;
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
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     <?php GetProperty('notify',$_SESSION['rtl']);?>
                     <!--<small>Managed Table Sample</small>-->
                  </h3>
                      <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
         
            <!-- END PAGE HEADER-->
<section class="wrapper">
 
  <ul class="tabs">

    <li><a href="#tab4"><?php GetProperty('notify',$_SESSION['rtl']);?></a></li>

  </ul>
  <div class="clr"></div>
  <section class="block">
  

    <article id="tab3">
      
      
                  <div class="span6">
                    <!-- BEGIN SAMPLE TABLE widget-->       
                  <div class="widget">
                      <div class="loader"></div>

                     <div class="widget-body">
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th><?php GetProperty('type',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('receiver',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('notificationtime',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('status',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('change',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                                <tbody> 
                                  <?php
                                    $notification = noftify();
                                    $varsession = $_SESSION['Id'];
                                    for ($i = 0; $i < count($notification); $i++) {
                                    ?>
                                <tr>
                                   <td><?php echo $notification[$i]['type'];?></td>
                                   <td><?php echo admin_notification($notification[$i]['id'],$varsession);?></td>
                                   <td><?php echo admin_notification2($notification[$i]['id'],$varsession);?></td>
                                   <td><?php echo admin_notification3($notification[$i]['id'],$varsession);?></td>
                                   <td><a href="" data-id="<?php echo $notification[$i]['id'] ?>" data-status="<?php echo admin_notification3($notification[$i]['id'],$varsession); ?>" onclick="statusupdate(this)">Change Status</a></td>
                                   <td><a href="edit_notify.php?id=<?php echo $notification[$i]['id'] ?>">Edit</a></td>
                                   <?php }?>
                                </tr>                     
                               </tbody>
                         </table>
                     </div>
                  </div>
      </div>
      

    </article>
      

    
    
  </section>
</section>    </div>
 
         </div>
 
      </div>
     
   </div>
      <div id="footer">
       2016 &copy; Arrowtec LLC.


   </div>
 
    <script src="js/scripts.js"></script>
 
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
 <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
 function statusupdate(obj)
 {
      debugger;
      var rowId = obj.getAttribute("data-id");
      var rowstat = obj.getAttribute("data-status");
    
      
      
      
      if(rowstat=='Active')
      {
        rowstat='Inactive';
      }
      else if(rowstat=='')
      {
        rowstat="";
      }
      else {
          rowstat='Active'; 
        }
          var dataString= 'rowId='+ rowId + '&rowstat='+ rowstat;  
      $.ajax({
	            	url : "client_validate.php?id=778",
	            	type: "POST",
	            	data : dataString,
	            	cache: false,
     success: function(result)
      {  
        debugger;
        if(result.id=='0')
        
        {
           $().toastmessage('showSuccessToast', "Status is Updated Successfully");
          
        }
        else {
                     $().toastmessage('showErrorToast', "Status is Updated Fail");

        }
                   
 
      },
		error: function (jqXHR, textStatus, errorThrown)
		{
      
        debugger;
	 			alert("Please Try Again");
		}
		});	

      
       

 }
 </script>
</body>
<!-- END BODY -->
</html>
