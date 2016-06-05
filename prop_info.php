<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php
session_start();
include 'session.php';
if($_SESSION['exp']=='invalid'){
header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

global $owenr;
}

    
    ?>
<head>
   <meta charset="utf-8" />
   <title><?php echo $var;?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
 <?php 
 include 'css_header.php';
  
 ?>
 
    <style type="text/css">

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
<body class="fixed-top" >
   <!-- BEGIN HEADER -->

       <!-- END TOP NAVIGATION BAR -->
   
   <?php 
   include 'header.php';?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
          <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
<?php 
include 'header_menu.php';?>
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
                            			    <?php 		
					    $sql= "SELECT * From add_property WHERE id='".$_GET['id']."'";   
                        $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result)
                         {
                    
                            if(mysql_num_rows($result) > 0) 
                            {
                                $member = mysql_fetch_assoc($result);?>
                                 <h3 class="page-title">
                    <?php echo $member['propty_name']?>
                  </h3>

						<?php }
								 }?>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid ">
       

               <div class="row-fluid ">
                  <div class="span12">
                     <!-- BEGIN INLINE TABS PORTLET-->
                     <div class="widget">
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab"><?php GetProperty('generalinfo',$_SESSION['rtl']);?></a></li>
                                       <li><a href="#tab_1_2" data-toggle="tab"><?php GetProperty('propertyunit',$_SESSION['rtl']);?></a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab"><?php GetProperty('propertyexp',$_SESSION['rtl']);?></a></li>
                                       <li><a href="#tab_1_4" data-toggle="tab"><?php GetProperty('lease',$_SESSION['rtl']);?></a></li>
                                  <li><a href="#tab_1_5" data-toggle="tab">Financial Activity</a></li>
                                       <li><a href="#tab_1_6" data-toggle="tab"><?php GetProperty('document',$_SESSION['rtl']);?></a></li>
                                    </ul>
                                    <div class="tab-content">
          <div class="tab-pane active" id="tab_1_1">
                                     
                                     <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                          <div class="loader"></div>

                        <table class="table table-striped table-bordered dataTable">
                        <strong><?php GetProperty('basicinfo',$_SESSION['rtl']);?></strong>
                        <?php 		$sql= "SELECT * From add_property WHERE id='".$_GET['id']."' ";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th><?php GetProperty('propertyname',$_SESSION['rtl']);?></th>
                                                 <th class="hidden-phone"> <?php echo $member['propty_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > <?php GetProperty('propertyid',$_SESSION['rtl']);?>	</th>
                                                 <td><?php echo $member['id']; ?></td>            
                                              </tr>
                                              <tr>
                                              	 <th> <?php GetProperty('address',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['address']; ?></td>
                                              </tr>
                                              <tr>
                                                 <th><?php GetProperty('propertytype',$_SESSION['rtl']);?></th>
                                                 <?php 
												 $sql= "SELECT * From property_type WHERE id='".$member['property_type']."'";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
												if($result)
												 {
                                                    if(mysql_num_rows($result) > 0) 
													{
                                                    $member2 = mysql_fetch_assoc($result);?>
                                                    <td><?php echo $member2['prop_type']; ?></td>
                                                    <?php
													}
												 }?>
                                              </tr>
                                              <tr>     
                                                 <th ><?php GetProperty('forproperty',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['about_him'] ?></td>
                                              </tr>
                                           </thead>
                                           </tbody>
                        </table>
                                </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
               
                <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong><?php GetProperty('ownerinfo',$_SESSION['rtl']);?></strong>
                        
                        <?php 
                                    $owenr = $member['owner_id']; 
                               		$sql= "SELECT * From clients WHERE id='".$member['owner_id']."' ";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
                                    {
 
										if(mysql_num_rows($result) > 0) 
										{
											$member3 = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th><?php GetProperty('ownername',$_SESSION['rtl']);?></th>
                                                 <th class="hidden-phone"> <?php echo $member3['real_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member3['emi_id']; ?></td>            
                                              </tr>
                                              <tr>
                                              	 <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member3['mob_no']; ?></td>
                                              </tr>
                                               <tr>     
                                                 <th ><?php GetProperty('propertyno',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['land_no'] ?></td>
                                              </tr>
                                                        <tr>     
                                                 <th ><?php GetProperty('deedno',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['inst_no'] ?></td>
                                              </tr>
                                              <tr>     
                                                 <th ><?php GetProperty('deeddate',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['date_inst'] ?></td>
                                              </tr>
                                           </thead>
                                           </tbody>
                        </table>
              
  
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
                  
               </div>
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Financial  Information </strong>
                
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> Total Expense</th>
                                                 <th class="hidden-phone"> <?php echo $member3['real_name']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > Total Income</th>
                                                 <td><?php echo $member3['emi_id']; ?></td>            
                                              </tr>
                         
                                           </thead>
                                           </tbody>
                        </table>
              
  
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
                  
               </div>
        <input type="hidden" id="cmnd_status" name="cmnd_status" placeholder="" value="location1">
       <div id="map-canvas" style="width: 90%; height: 320px;left:1px;right:1px;border: 1px solid;border-radius: 5px;box-shadow: -5px 5px 5px 1px #888888;">
        <input type="text" id="latitude" value="<?php echo $member['lat'] ?>"/>
       <input type="text" id="longitude" value="<?php echo $member['longi']?>"/></div>        
  
                       </div>
          <div class="tab-pane" id="tab_1_2">
                      <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->            
                  <div class="widget" style="width: 200%;">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
                         <table class="table table-striped table-bordered dataTable">
                             <thead>
                             <tr>
                                 <th><?php GetProperty('unitnum',$_SESSION['rtl']);?></th>
                                 <th class="hidden-phone"> <?php GetProperty('propertytype',$_SESSION['rtl']);?></th>                           
                                 <th><?php GetProperty('annualrent',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('status',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                                 <!--<th>Edit</th>-->
                                 <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                             <tbody >
                             
                              <?php 
                              $sql= "SELECT * From real_state_unit WHERE property_name='".$_GET['id']."'";   
							  $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
							 if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  			echo "<tr>";
								  	?>
								  	<?php
								  
									  echo "<td>" . $row['block_no'] . "</td>";
									  $sql= "SELECT * From property_type WHERE id='".$member['property_type']."' ";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
												if($result)
												 {
								
													if(mysql_num_rows($result) > 0) 
													{
														$member2 = mysql_fetch_assoc($result);
													 	 echo "<td>" .$member2['prop_type']. "</td>";  
                                                    }
                                                          
                                                }
									echo "<td>" . $row['annul_lease'] . "</td>";
                                    $sql3= "SELECT * From rent_property WHERE property_name='".$_GET['id']."' ";   
                                    $result3=mysql_query($sql3)or  die('Invalid query: ' . mysql_error());
                                    if($result3)
                                        {
                                             if(mysql_num_rows($result3) > 0) 
                                              {
                                                 $member44 = mysql_fetch_assoc($result3);
													 	 echo "<td> Rented</td>";  
                                                          
                                              }
                                              else {
                                                  echo "<td> UnRented</td>";
                                              }
                                        }
                                       $varblock=$row['block_no'];
                                       $id=$row['id'];
														 echo "<td><a href='unit_info.php?unit=$varblock&id=$id'>View</a></td>";
					
														  echo "<td>Delete</td>";
														 echo "</tr>"; 
									  }
									  	 }
								
								
									 ?>
                      
                             </tbody>
                         </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div> 
                                       </div>
          <div class="tab-pane" id="tab_1_3">
                                   <div class="widget">
                     <div class="widget-title">
                        <h4>Advance Table</h4>
                     </div>
                     <div class="widget-body">
 <button type="button" class="btn btn-primary" data-property="<?php echo $_GET['id'];?>" data-ownerid="<?php echo $member3['id']?>"data-owenername="<?php echo $member3['real_name']; ?>" data-propertyname="<?php echo $member['propty_name'];?>"onClick="property_bill(this)">Add Property Bill</button>       
   <?php }
				 }
										}
									 }?>
					<br>
                         <table class="table table-striped table-bordered table-advance table-hover">
                             <thead>
                             <tr>
                                 <th> #</th>
                                 <th class="hidden-phone"><?php GetProperty('type',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('billnumber',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('billnumber',$_SESSION['rtl']);?></th>         
                                 <th><?php GetProperty('statment',$_SESSION['rtl']);?></th>
                                  <th><?php GetProperty('date',$_SESSION['rtl']);?></th>
                                  <th><?php GetProperty('customer',$_SESSION['rtl']);?></th>
                                  <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                             
                              <?php 		$sql= "SELECT * From property_expense WHERE property='".$_GET['id']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
									while($row = mysql_fetch_assoc($result)) {
						  echo "<tr>";
                                          echo "<td>" . $row['id'] . "</td>";
										  echo "<td>" . $row['type'] . "</td>";
										  echo "<td>" . $row['bill'] . "</td>";
										  echo "<td>" . $row['amount'] . "</td>";
										  echo "<td>" . $row['notes'] . "</td>";
										  echo "<td>" . $row['datee']. "</td>";
                                          
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
          <div class="tab-pane" id="tab_1_4">
                    <div class="widget">
                                           <div class="widget-title">
                                             <h4>Advance Table</h4>
                                          </div>
                                   <div class="widget-body">
                     				<table class="table table-striped table-bordered dataTable">
                                	<strong> <?php GetProperty('lease',$_SESSION['rtl']);?> </strong>
                                   	<tbody style="border: 1px solid black;"> 
                                        <thead>
                                        
                                          <tr>
                                             <th><?php GetProperty('lease',$_SESSION['rtl']);?></th>
                                             <th class="hidden-phone"> <?php GetProperty('type',$_SESSION['rtl']);?></th>
                                               <th class="hidden-phone"> <?php GetProperty('amount',$_SESSION['rtl']);?></th>
                                                 <th class="hidden-phone"> <?php GetProperty('comison',$_SESSION['rtl']);?></th>
                                               
                                          </tr>
                                          <tr>                   
                                                   <?php 	
                                            $sql= "SELECT * From rent_property WHERE property_name='".$_GET['id']."'";   
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
            </div>
 
           <div class="tab-pane" id="tab_1_6">
                    <div class="widget">
                                    
                              <div class="widget-body">
                     				<button type="button" id="buttonload" class="btn btn-primary">Upload Documents</button>   
                             </div>
                             
                    <div id='preview3'>
                                    <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php GetProperty('updated',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('detail',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('print',$_SESSION['rtl']);?></th>
                                </tr>
                                </thead>
                                 <tbody>
                                  <?php 
                                  require('db.php');
                               $sqlserivce_classes=mysql_query("select * from property_receipt where propertyId='".$_GET['id']."'");
                                while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                        {
                                 $data=$rowsqlserivce_classes['image'];
                          echo "<tr>";
                            echo "<td>".$rowsqlserivce_classes['id']."</td>";
                            echo "<td>".$rowsqlserivce_classes['created']."</td>";
                            echo "<td>".$rowsqlserivce_classes['remark']."</td>";
                            ?>
                            
   <div id="blanket" style="display:none"></div>
	<div id="popUpDiv" style="display:none; top: 36px;left: 359px;">
    	<a href="#" data-id="<?php echo $rowsqlserivce_classes['image_name'] ?>" onclick="popup('popUpDiv',this)" >Close</a>
	</div>	

                             <td><a href="#" data-id="<?php echo $rowsqlserivce_classes['image'] ?>" onclick="popup('popUpDiv',this)">View</a></td>
                              <?php echo "<td>Print</td>";
                            echo "</tr>";
                        ?>
                          </div>
 
                        <?php
                        
                        }
                        
                        ?>
                        
                    </div>
                          </div>
            </div>    
            
        </tr>
                
                             
                     
						 
										  
							 
                             </tbody>
                         </table>
                             </div>

                    </div>
            </div>      
                                 <!--END TABS-->
                              </div>
                             
                         
                 
                     </div>
                     <!-- END INLINE TABS PORTLET-->
                  </div>
               </div>

            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER--> 
      </div>
      <!-- END PAGE -->
<div id="modalload" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
      
                  <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
 
                      <div class="widget-body form">
  <form action="uploads.php?id=3" enctype="multipart/form-data"  method="post">
<h3> Upload Receipt</h3>


<input name="uploadedimage" type="file">
<input name="remark" type="text"></br>
<input name="propid" type="hidden" value="<?php echo $_GET['id'];?>">
<input name="ownerid" type="hidden" value="<?php 	$sql= "SELECT * From add_property WHERE id='".$_GET['id']."' ";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);
                                            echo $member['owner_id'];
                                        }
                                     }
                                            ?>">
<input name="cid" type="hidden" value="<?php echo $_SESSION['Id']?>"/>
<input name="Upload Now" type="submit" value="Upload Image">


</form>
                      </div>
                  </div>
               </div>
            </div>
      
      
      
</div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.

   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
      <script src="js/scripts.js"></script>
 
   <script src="toastr.js"></script>
 
   <script src="js/jquery.blockui.js"></script>
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
   <script type="text/javascript" src="csspop/css-pop.js"></script>
   <script type="text/javascript">
   	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
   
$(document).ready(function() {
 

   
  $('#buttonload').magnificPopup({
    type: 'inline',
    items: {src: '#modalload'},
    preloader: false,
    modalload: true
  });
});
</script>
   <script>
   debugger;
    var map;
    var marker;
    var infowindowPhoto = new google.maps.InfoWindow();
    var latPosition;
    var longPosition;
    var a=$("#latitude").val();
				var b=$("#longitude").val();
    function initialize() {

        var mapOptions = {
            zoom: 19,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
           // center: new google.maps.LatLng(10,10)
        };
    
        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        
        initializeMarker();
    }
    
    function initializeMarker() {
    
        if (navigator.geolocation) {
           
            navigator.geolocation.getCurrentPosition(function (position) {
                
		 
                var pos = new google.maps.LatLng( a, b);
    
  
    
                marker = new google.maps.Marker({
                    position: pos,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
                
                map.setCenter(pos);
     
            });
        }
    }
    

    
    initialize();
function property_bill(obj)
{
		debugger;
	var a=obj.getAttribute("data-property");
	var b=obj.getAttribute("data-owenername");
	var c=obj.getAttribute("data-propertyname");
    var d=obj.getAttribute("data-ownerid");

window.location.assign("property_bill.php?propertyId="+a+"&ownerid="+d);
}
	
	</script>
    
   
</body>
<!-- END BODY -->
</html>