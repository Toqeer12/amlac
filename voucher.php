<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
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

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Job Title</title>
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
	height:1000px
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
                     Job Titles
                     <!--<small>Managed Table Sample</small>-->
                  </h3>
 
               </div>
            </div>
         
            <!-- END PAGE HEADER-->
<section class="wrapper">
 
  <ul class="tabs">

    <li><a href="#tab4">Receipt Vouchers</a></li>

  </ul>
  <div class="clr"></div>
  <section class="block">
  

    <article id="tab3">
      
      
                  <div class="span6" <?php echo $_SESSION['rtl'];?>>
                    <!-- BEGIN SAMPLE TABLE widget-->       
                  <div class="widget">
                     <div class="widget-title">
                        <h4>Lease Expense Voucher</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"> <?php GetProperty('amount',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('type',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('date',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('statement',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('print',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                             
                              <?php 		
                                    $sql= "SELECT * From service_bill WHERE cid='".$_SESSION['Id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						            echo "<tr>";
                                    ?>
                                    <?php
  
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['amount'] . "</td>";
                                        echo "<td>" . $row['type'] . "</td>";
                                        echo "<td>" . $row['datee'] . "</td>";
                                        echo "<td>" . $row['notes'] . "</td>";
                                    $sql2= "SELECT * From clients WHERE id='".$row['vendor']."'";   
									$result2=mysql_query($sql2)or  die('Invalid query: ' . mysql_error());
									if($result2)
									 {
								        
									while($row2 = mysql_fetch_assoc($result2)) {
                                        echo "<td>" . $row2['real_name'] . "</td>";
                                          echo "<td><a href='actionpdf_exp.php?id=" .$row['id']."&amount=".$row['amount']."&type=".$row['type']."&datee=".$row['datee']."&vendor=".$row2['real_name']."'>Print</a></td>";
                                        echo "</tr>"; }
									 }
                                    }
                                   }
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
      </div>
                            <div class="loader"></div>
        <div class="span6" <?php echo $_SESSION['rtl'];?>>
                    <!-- BEGIN SAMPLE TABLE widget-->       
                  <div class="widget">
                     <div class="widget-title">
                        <h4>Property Expense Voucher</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"> <?php GetProperty('amount',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('type',$_SESSION['rtl']);?></th>
                                  <th><?php GetProperty('billnumber',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('date',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('statement',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('print',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                             
                              <?php 		
                                    $sql= "SELECT * From property_expense WHERE cid='".$_SESSION['Id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						            echo "<tr>";
                                    ?>
                                    <?php
  
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['amount'] . "</td>";
                                        echo "<td>" . $row['type'] . "</td>";
                                        echo "<td>" . $row['bill'] . "</td>";
                                        echo "<td>" . $row['datee'] . "</td>";
                                        echo "<td>" . $row['notes'] . "</td>";
                                    $sql2= "SELECT * From clients WHERE id='".$row['vendor']."'";   
									$result2=mysql_query($sql2)or  die('Invalid query: ' . mysql_error());
									if($result2)
									 {
								        
									while($row2 = mysql_fetch_assoc($result2)) {
                                        echo "<td>" . $row2['real_name'] . "</td>";
                                          echo "<td><a href='actionpdf_exp.php?id=" .$row['id']."&amount=".$row['amount']."&type=".$row['type']."&datee=".$row['datee']."&vendor=".$row2['real_name']."'>Print</a></td>";
                                        echo "</tr>"; }
									 }
                                    }
                                   }
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
      </div>
    </article>
      

    

    
    
    
    
    
  </section>
</section>    </div>
            

            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
    
   </div>
      <script src="js/scripts.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="js/jquery.blockui.js"></script>
 
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
<script src="assets/main/javascript/jquery.toastmessage.js"></script>
   
<script type="text/javascript">
 $(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
    function callme2(obj)
    {debugger;
         var price    = (document.getElementById("anual")).innerHTML;
         var propname = (document.getElementById("propname")).innerHTML;
         var unit     = (document.getElementById("unitno")).innerHTML;
         var ptype    = (document.getElementById("ptype")).innerHTML;
         var emiid    = (document.getElementById("emiid")).innerHTML;
         var mobile   = (document.getElementById("mob")).innerHTML;
         var stdate   = (document.getElementById("stdate")).innerHTML;
         var temiid   = (document.getElementById("temiid")).innerHTML;  
         var tmob     = (document.getElementById("tmob")).innerHTML;
         var fromm    = (document.getElementById("stdate")).innerHTML;
         var too      = (document.getElementById("too")).innerHTML;
         window.location="actionpdf_lease.php?price="+price+'&propname=' + propname + '&unit=' + unit + '&ptype=' + ptype+ '&emiid=' + emiid+ '&mobile=' + mobile+'&temiid='+temiid+'&tmob=' + tmob+'&fromm=' +fromm+'&too=' + too+ '&stdatee=' + stdate;
     
    }
      
    </script>
<script>
       
   
$(function() {
  $('ul.tabs li:first').addClass('active');
  $('.block article').hide();
  $('.block article:first').show();
  $('ul.tabs li').on('click', function() {
    $('ul.tabs li').removeClass('active');
    $(this).addClass('active')
    $('.block article').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).show();
    return false;
  });
})

function updaterent(obj)
{
	debugger;
     var unit =obj.getAttribute("data-unit");
      var renter =obj.getAttribute("data-renter");
	var startdate = $("#duedate").val();
	var paymethod = $("#paymethod").val();
	var amount = $("#amount").val();
    var actualamount =$("#actualpayment").val();
	var ownerid = obj.getAttribute("data-owner");
	var property=obj.getAttribute("data-property");
    if(amount > actualamount)
    {
        alert("Enter Amount is Greater Than Actual Amount");
    }
    else{
        	var dataString= 'startdate='+ startdate + '&paymentmethod='+paymethod + '&amount='+ amount + '&ownerid='+ ownerid  + '&property='+ property + '&unit='+ unit;  
	 $.ajax({
		
		url : "client_validate.php?id=8",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		        if(result.cid=='33')
           {
               alert("Please Pay Full Amount");
           }
           else if(result.cid=='34')
           {
                alert("Please Pay Full Amount");
           }  else{
               
               $().toastmessage('showSuccessToast', "Rent Paid Successfully");
               
           }
   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
    }

}
function callme(obj)
{
	debugger;
	var a=obj.getAttribute("data-owner");
	var b=obj.getAttribute("data-property");
	var c=obj.getAttribute("data-id");
	$( "#result" ).load("recipt.php?owner="+a+"&property="+b+"&rentid="+c);
}
function servicebill(obj)
{
	debugger;
	var a=obj.getAttribute("data-owner");
	var b=obj.getAttribute("data-property");
    var c=obj.getAttribute("data-unit");
window.location="service_bill.php?owner="+a+"&property="+b+"&unit="+c;
}
function electercitybill(obj)
{
	debugger;
	var a=obj.getAttribute("data-owner");
	var b=obj.getAttribute("data-property");
    var c=obj.getAttribute("data-unit");
window.location="electercity.php?owner="+a+"&property="+b+"&unit="+c;
}



var $table = $('table#scroll'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

// Adjust the width of thead cells when window resizes
$(window).resize(function() {
    // Get the tbody columns width array
    colWidth = $bodyCells.map(function() {
        return $(this).width();
    }).get();
    
    // Set the width of thead columns
    $table.find('thead tr').children().each(function(i, v) {
        $(v).width(colWidth[i]);
    });    
}).resize(); 
</script>
   <script type="text/javascript">
   
   
$(document).ready(function() {
 

   
  $('#buttonload2').magnificPopup({
    type: 'inline',
    items: {src: '#modalload2'},
    preloader: false,
    modalload2: true
  });
});
</script>


</body>
<!-- END BODY -->
</html>
