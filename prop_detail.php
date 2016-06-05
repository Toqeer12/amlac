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
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
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
                     Job Titles
                     <!--<small>Managed Table Sample</small>-->
                  </h3>
                 <!--  <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Managed Tables</a><span class="divider-last">&nbsp;</span></li>
                   </ul>-->
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
         
            <!-- END PAGE HEADER-->
<section class="wrapper">
 
  <ul class="tabs">
    <li><a href="#tab1">Lease Information</a></li>
    <li><a href="#tab2">Payment</a></li>
    <li><a href="#tab3">Expenses</a></li>
    <li><a href="#tab6">Finanical Activity</a></li>
    <li><a href="#tab4">Receipt Vouchers</a></li>
    <li><a href="#tab5">Documents</a></li>
  </ul>
  <div class="clr"></div>
  <section class="block">
    <article id="tab1">

<div class="row-fluid">
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-cogs"></i>Advance Table</h4>
     
                     </div>
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Lease Information </strong>
                        <?php 		$sql= "SELECT * From rent_property WHERE owner='".$_GET['id']."' AND property_name='".$_GET['property']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> Writing Date</th>
                                                 <th class="hidden-phone"> <?php echo $member['write_con_dat']; ?></th>
                                                
                                           
                                              </tr>
                                           
                                          
                                              <tr>
                                      
                                                 <th > Rent start date	</th>
                                                 <td><?php echo $member['start_date']; ?></td>
                                            
                                              </tr>
                                              <tr>
                                       
                                                 <th > Duration</th>
                                                 <td><?php echo $member['duration'].' Month'; ?></td>
                                       
                                              </tr>
                                              <tr>
                                  
                                                 <th>End Date</th>
                                                 <td><?php echo $member['ending_date']; ?></td>
                                 
                                              </tr>
                                              <tr>
                                       
                                                 <th >Payment Method</th>
                                                 <td><?php echo $member['schudle_month'].'  Month'; ?></td>
                                         
                                              </tr>
                                              <tr>
                  
                                                  <th >Price</th>
                                                  <?php 
												  $price=$member['property_name'];$sql= "SELECT * From real_state_unit WHERE property_name='$price'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
											<td><?php echo $member['annul_lease'].'  AED'; ?></td>
                                            <?php }
                                            } ?>
                                               
                                              </tr></thead>
                                           </tbody>
                        </table>
                  <br>
                        </br>
                         <table class="table table-striped table-bordered dataTable">
                        <strong> Owner Information </strong>
                           <tbody style="border: 1px solid black;"> 
                           <thead>
                        
                              <tr>
                                 <th>Property Name</th>
                                                                      <?php 
												  $price=$member['property_name'];$sql= "SELECT * From add_property WHERE id='$price'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 	
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
											<td><?php echo $member['propty_name']; ?></td>
                                            <?php }
                                            } ?>
                                
                           
                              </tr>
                           
                          
                              <tr>
                      
                                 <th >Owner Name</th>
                                                                                      <?php 
												 $sql= "SELECT * From add_property WHERE id='$price'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 	
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
											<?php $var= $member['owner_id']; 
											
									$sql= "SELECT * From clients WHERE id='$var'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 	
										if(mysql_num_rows($result) > 0) 
										{
												$member = mysql_fetch_assoc($result);?>
											<td><?php echo $member['real_name']; ?></td>
								
											
											
										 
								
                              </tr>
                              <tr>
                       
                                 <th >Personal ID</th>
                                 <td><?php echo $member['emi_id']; ?></td>
                       
                              </tr>
                              <tr>
                  
                                 <th>Mobile Number</th>
                                 <td><?php echo $member['mob_no']; ?></td>
                 
                              </tr>
                              <tr>		<?php			}
									 }
										
                                            }
                                            } ?>
                            
                       </thead>
                           </tbody>
                        </table>         <?php }
				 }?>
                     
                        <br>
 			 <table class="table table-striped table-bordered dataTable">
                        <strong> Renter Information </strong>
                           <tbody style="border: 1px solid black;"> 
                                <thead>
                                
                                  <tr>
                                     <th>Renter Name</th>
                                        <?php 		$sql= "SELECT * From rent_property WHERE owner='".$_GET['id']."' AND property_name='".$_GET['property']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                            							<?php $var= $member['renter']; 
											
									$sql= "SELECT * From clients WHERE id='$var'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 	
										if(mysql_num_rows($result) > 0) 
										{
												$member = mysql_fetch_assoc($result);?>
											<td><?php echo $member['real_name']; ?></td>
                         
                                  </tr>
                                  <tr>                   
                                     <th >Personal ID</th>
                                    <td><?php echo $member['emi_id']; ?></td>
                                  </tr>
                                  <tr>
                                     <th>Mobile Number</th>
                                     <td><?php echo $member['mob_no']; ?></td>
                                  </tr>
                                  <tr>                   <?php
										}
									 }
										}
										}?>
                               </thead>
                           </tbody>
      			 </table>
                 
                                         <br>
 			 <table class="table table-striped table-bordered dataTable">
                        <strong> Lease Unit </strong>
                           <tbody style="border: 1px solid black;"> 
                                <thead>
                                
                                  <tr>
                                     <th>Lease Unit</th>
                                     <th class="hidden-phone"> Type</th>
                                       <th class="hidden-phone"> Amount</th>
                                         <th class="hidden-phone"> Commission</th>
                                       
                                  </tr>
                                  <tr>                   
                                           <?php 	
									$sql= "SELECT * From rent_property WHERE owner='".$_GET['id']."' AND property_name='".$_GET['property']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);
                                            	$var=$member['property_name'];
                                            $sql= "SELECT * From real_state_unit WHERE property_name='$var'";   
									$result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result2)
									 {
								
										if(mysql_num_rows($result2) > 0) 
										{
											$member2= mysql_fetch_assoc($result2);?>
                                             <td><?php echo $member2['block_no']; ?></td>
                                                     
                                                           <?php 
                                                           $ptype=$member2['property_type'];
                                                            $sql= "SELECT * From property_type WHERE id='$ptype'";   
                                                            $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                                            if($result)
                                                             {
                                                        
                                                                if(mysql_num_rows($result) > 0) 
                                                                {
                                                                    $member = mysql_fetch_assoc($result);?>
                                                                    <td><?php echo $member['prop_type']; ?></td>
                                                            <?php	}
                                                             }
                                                            ?>
                                   <td><?php echo $member2['annul_lease']; ?></td> 
                                   <td><?php echo $member2['comission']; ?></td>
                                      
                                  </tr>
                                                 <?php }
									 }
										}
									 }?>
                               </thead>
                           </tbody>
      			 </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
               <div class="span6" >
                  <!-- BEGIN SAMPLE TABLE widget-->            
                 <div class="widget">
                             <div class="widget-title">
                                <h4><i class="icon-cogs"></i>Advance Table</h4>
                                       </div>
                            <div class="widget-body" style="width: 40px;">
                               <form id="newsletterform" class="form-horizontal"  method="POST">
                                     
                                      <div class="span6">
                                       <?php 	
									$sql= "SELECT * From finaical WHERE owner='".$_GET['id']."' AND propertyid='".$_GET['property']."' AND status='unpaid'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                          <div class="control-group">
                                              <label class="control-label">Date</label>
                                              <div class="controls">
                                                <input name="date"id="date" type="date" value="<?php echo $member['datee'];?>"required/>      
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Due Date</label>
                                              <div class="controls">
                                              <input name="duedate"id="duedate"  type="date" value="<?php echo $member['datee'];?>"   required/>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">To Date</label>
                                              <div class="controls">
                                              <input name="todate"id="todate"  type="date" value="<?php echo $member['datee'];?>"   required/>
                                              </div>
                                          </div>
                                                <div class="control-group">
                                              <label class="control-label">Payment Method</label>
                                              <div class="controls">
                                             <select name="paymethod" id="paymethod">
                                              <option value="0">Cash</option>
                                              <option value="1">Cheque</option>
                                              </select>
                                     		 </div>
                                          </div>
                                                      <div class="control-group">
                                              <label class="control-label">Amount</label>
                                              <div class="controls">
                                              <input name="amount"id="amount" pattern="[0-9]+" type="num" placeholder="Enter Amount to Paid"  required/>
                                              </div>
                                          </div>
                                                      <div class="control-group">
                                              <label class="control-label">Statment</label>
                                              <div class="controls">
                                              <textarea rows="4" cols="50" id="statement">
	
											</textarea>
                                              </div>
                                          </div>
                                          
                                          <?php }}?>
                                      </div>
                                      <br>
                                      <div class="clearfix"></div>
                                      <div class="form-actions">
                                           <input name="submit" type="button" data-owner="<?php echo $member['owner'];?>" data-property="<?php echo $member['propertyid'];?>" class="btn btn-primary" value="Submit" onClick="updaterent(this)"/>
                                      </div>
                                  </form>
                             </div>
                    </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
            </div>
    </article>
    <article id="tab2">
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->            
                  <div class="widget">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered table-advance table-hover" id="tableSection">
                             <thead>
                             <tr>
                                 <th> Number</th>
                                 <th class="hidden-phone"> Amount</th>
                                 <th> Due Date</th>
                                 <th>Paid Amount</th>
                                 <th>Status</th>
                             </tr>
                             </thead>
                             <tbody >
                             
                              <?php 		$sql= "SELECT * From finaical WHERE owner='".$_GET['id']."' AND propertyid='".$_GET['property']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  echo "<tr>";
  ?>
  <?php
  
  echo "<td> Payment   " . $row['payment'] . "</td>";
  echo "<td>" . $row['Amount'] . "</td>";
  echo "<td>" . $row['datee'] . "</td>";
  echo "<td>" . $row['amount_paid'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";  
  echo "</tr>"; }
									 }
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>    </article>
    <article id="tab3">
      
      
                      <div class="span6">
                    <!-- BEGIN SAMPLE TABLE widget-->
                    
                    	<br>
                        
		            <button type="button" class="btn btn-primary" data-owner="<?php echo $_GET['id'];?>" data-property="<?php echo $_GET['property']?>"onClick="servicebill(this)">Add Service Bill</button>
                    <button type="button" class="btn btn-primary" data-owner="<?php echo $_GET['id'];?>" data-property="<?php echo $_GET['property']?>"onClick="electercitybill(this)">Electricity Bill</button>
                    <br>
					<br>
                  <div class="widget">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"> Amount</th>
                                 <th> Type</th>
                                 <th>Date</th>
                                 <th>Statement</th>
                             </tr>
                             </thead>
                             
                              <?php 		$sql= "SELECT * From service_bill WHERE owner='".$_GET['id']."' AND property='".$_GET['property']."'";   
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
  echo "</tr>"; }
									 }
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
      </div>
    </article>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <article id="tab4">
                <div class="span6">
                    <!-- BEGIN SAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Striped Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                  
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                                 
                              <?php 		$sql= "SELECT * From finaical WHERE owner='".$_GET['id']."' AND propertyid='".$_GET['property']."' And status='paid'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  echo "<tr>";
  ?>
  <?php
  
  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['datee'] . "</td>";
echo "<td>" . $row['amount_paid'] . "</td>";
  ?>
  <td><input type="button" onClick="callme(this)" data-id="<?php echo $row['id'];?>" data-owner="<?php echo $row['owner'];?>" data-property="<?php echo $row['propertyid'];?>" value="View"/></td> 
  <?php 
  echo "</tr>"; }
									 }
									 ?>
              
                                </tbody>
                            </table>
                        </div> 
                    </div> <div id="result">  </div>
                    <!-- END SAMPLE TABLE widget-->
                </div>
                
              
          
             </article>
    
    
        <article id="tab5">
      <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
    </article>
    
    
            <article id="tab6">
      <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
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
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
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
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
	var startdate = $("#date").val();
	var paymethod = $("#paymethod").val();
	var amount = $("#amount").val();
	var ownerid = obj.getAttribute("data-owner");
	var property=obj.getAttribute("data-property");
	var dataString= 'startdate='+ startdate + '&paymentmethod='+paymethod + '&amount='+ amount + '&ownerid='+ ownerid  + '&property='+ property;  
	 $.ajax({
		
		url : "client_validate.php?id=8",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   result.cid;
	alert(result.cid);
   
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
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
window.location="service_bill.php?owner="+a+"&property="+b;
}
function electercitybill(obj)
{
	debugger;
	var a=obj.getAttribute("data-owner");
	var b=obj.getAttribute("data-property");
window.location="electercity.php?owner="+a+"&property="+b;
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
</body>
<!-- END BODY -->
</html>
