<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php

session_start();
include 'session.php';
$session_id='1';
  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}

    
    ?>
<head>
   <meta charset="utf-8" />
   <title><?php echo $var; ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
 <?php 
    
    include 'css_header.php';
 
 ?>

   
   <style type="text/css">

#modalload2 {
  margin: 0 auto;
  padding: 0.5em;
  width: 400px;
  height: 500px;
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
                            			    <?php 		
					    $sql= "SELECT * From real_state_unit WHERE id='".$_GET['id']."'";   
                        $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result)
                         {
                    
                            if(mysql_num_rows($result) > 0) 
                            {
                                $member = mysql_fetch_assoc($result);?>
                                 <h3 class="page-title">
                    <?php echo 'Unit  '.$member['block_no']?>
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
                        <div class="widget-title">
                        
             
                           
						
                        </div>
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab"><?php GetProperty('generalinfo',$_SESSION['rtl']);?></a></li>
                                        <li><a href="#tab_1_4" data-toggle="tab"><?php GetProperty('lease',$_SESSION['rtl']);?></a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab"><?php GetProperty('document',$_SESSION['rtl']);?></a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_1_1">
                                     
                                     <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
          
                     <div class="widget-body">
                          <div class="loader"></div>

                        <table class="table table-striped table-bordered dataTable">
                        <strong> <?php GetProperty('basicinfo',$_SESSION['rtl']);?></strong>
                        <?php 		$sql= "SELECT * From real_state_unit WHERE property_name='".$_GET['id']."' And block_no='".$_GET['unit']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th> <?php GetProperty('unitnum',$_SESSION['rtl']);?></th>
                                                 <th class="hidden-phone"> <?php echo $member['block_no']; ?></th>
                                              </tr>
                                              <tr>
                                                 <th > Type 	</th>
                                                 <?php
                                                 		  $sql= "SELECT * From property_type WHERE id='".$member['property_type']."' ";   
												          $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
														    if($result)
														    {
										
															    if(mysql_num_rows($result) > 0) 
															    {
																    $member2 = mysql_fetch_assoc($result);
																    echo "<td>" .$member2['prop_type']. "</td>";
                                                                }
                                                            }?>            
                                              </tr>
                                              <tr>
                                              	 <th> <?php GetProperty('insurance',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['ins_amount']; ?></td>
                                       
                                              </tr>
                                                  <tr>
                                              	 <th>  <?php GetProperty('annualrent',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['annul_lease']; ?></td>
                                       
                                              </tr>
                                              <tr>
                                                 <th><?php GetProperty('comison',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['comission']; ?></td>
                                 
                                              </tr>
                                                               <tr>
                                                 <th><?php GetProperty('renter',$_SESSION['rtl']);?></th>
                                                 
                                                   <?php
                                                 		  $sql4= "SELECT * From rent_property WHERE property_name='".$_GET['id']."' And unit='".$_GET['unit']."'";   
												          $result4=mysql_query($sql4)or  die('Invalid query: ' . mysql_error());
														    if($result4)
														    {
										
															    if(mysql_num_rows($result4) > 0) 
															    {
                                                                    $member2 = mysql_fetch_assoc($result4);
                                                                    	  $sql5= "SELECT * From clients WHERE id='".$member2['renter']."'";   
												                         $result5=mysql_query($sql5)or  die('Invalid query: ' . mysql_error());
														                  if($result5)
														                      {
										
															                          if(mysql_num_rows($result5) > 0) 
															                              {
                                                                    
                                                                                               $member3 = mysql_fetch_assoc($result5);
																                                echo "<td>" .$member3['real_name']. "</td>";
                                        ?>
                                 
                                              </tr>
                                              <tr>
                                                 <th><?php GetProperty('em_id',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member3['emi_id']; ?></td>
                                 
                                              </tr> 
                                                         <?php                               
                                                                                           }
                                                                              }
                                                                }
                                                            }?>
                                            <tr>
                                                 <th><?php GetProperty('unitdesc',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['desc-unity']; ?></td>
                                 
                                              </tr>         <tr>
                                                 <th><?php GetProperty('frishstatus',$_SESSION['rtl']);?></th>
                                                 <td><?php echo $member['develop_proces']; ?></td>
                                 
                                              </tr>
                                           </thead>
                                           </tbody>
                        </table>
                                </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
 
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
                                 <th class="hidden-phone"> <?php GetProperty('type',$_SESSION['rtl']);?></th>
                               
                                 <th><?php GetProperty('annualrent',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('status',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('edit',$_SESSION['rtl']);?></th>
                                 <th><?php GetProperty('delete',$_SESSION['rtl']);?></th>
                             </tr>
                             </thead>
                             <tbody >
                             
                              <?php 		
			
								  echo "<tr>";
									  echo "<td>" . $member['block_no'] . "</td>";
									  $sql= "SELECT * From property_type WHERE id='".$member['property_type']."' ";   
												 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
														if($result)
														 {
										
															if(mysql_num_rows($result) > 0) 
															{
																$member2 = mysql_fetch_assoc($result);
																 echo "<td>" .$member2['prop_type']. "</td>";
																 echo "<td>" . $row['annul_lease'] . "</td>";
																 echo "<td>" . $row['status'] . "</td>";  
																 echo "<td></td>";
																 echo "<td></td>";
																  echo "<td>Delete</td>";
																 echo "</tr>"; 
															}
													 }
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
                     				<button type="buttonloadunit" id="buttonloadunit" class="btn btn-primary">Upload Documents</button>   
                             </div>
                             
                    <div id='preview3'>
                                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php GetProperty('updated',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('Detail',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('view',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('print',$_SESSION['rtl']);?></th>
                                </tr>
                                </thead>
                         <?php 
                                  require('db.php');
                               $sqlserivce_classes=mysql_query("select * from user_uploads_unit where unitid='".$_GET['unit']."'");
                         	if(mysql_num_rows($sqlserivce_classes) > 0) 
										{
                                while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
                        {
                                 $data=$rowsqlserivce_classes['image_name'];
                               echo "<tr>";
                            echo "<td>".$rowsqlserivce_classes['id']."</td>";
                            echo "<td>".$rowsqlserivce_classes['created']."</td>";
                            echo "<td>".$rowsqlserivce_classes['remark']."</td>";
                            ?>
                            
    <div id="blanket" style="display:none"></div>
	<div id="popUpDiv" style="display:none; top: 36px;left: 359px;">
     <a href="#" data-id="<?php echo $rowsqlserivce_classes['image_name'] ?>" onclick="popup('popUpDiv',this)" >Close</a>
	</div>	

                             <td><a href="#" data-id="<?php echo $rowsqlserivce_classes['image_name'] ?>" onclick="popup('popUpDiv',this)">View</a></td>
                              <?php echo "<td>Print</td>";
                            echo "</tr>";
                        ?>
                          </div>
 
                        <?php
                        
                        }
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
                                   
                                     <th class="hidden-phone"> <?php GetProperty('durationcontract',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone">  <?php GetProperty('amount',$_SESSION['rtl']);?></th>
                                     <th class="hidden-phone"> <?php GetProperty('comison',$_SESSION['rtl']);?></th>
                                       
                                  </tr>
                                  <tr>                   
                                    <?php 	
									$sql= "SELECT * From rent_property WHERE property_name='".$_GET['id']."' And unit='".$_GET['unit']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									{
								        if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);
                                            $var=$member['property_name'];
									?>
									 <td><?php echo $member['unit']; ?></td>
								    <?php
                                    $sql= "SELECT * From real_state_unit WHERE property_name='$var'";   
									$result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result2)
									 {
								        if(mysql_num_rows($result2) > 0) 
										{
											$member2= mysql_fetch_assoc($result2);?>                            
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
                                             <?php	
                                                    }
                                               }
                                             ?>
                                             
                                             
                                             
                                             <td><?php echo $member2['annul_lease']; ?></td> 
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
                                    </div>
                                 </div>
                                 <!--END TABS-->
                              </div>
                              <div class="space10 visible-phone"></div>

                           </div>
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
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   
   
<div id="modalload2" class="white-popup-block mfp-hide">
        <a class="popup-modal-dismiss" href="#">Dismiss</a>
      
                  <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
 
                      <div class="widget-body form">
  <form action="uploads.php?id=1" enctype="multipart/form-data"  method="post">
<h3> Upload Logo</h3>


<input name="uploadedimage" type="file">
<input name="remark" type="text"></br>
<input name="unitid" type="hidden" value="<?php echo $_GET['unit']?>">
<input name="propid" type="hidden" value="<?php echo $_GET['id']?>">
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
 <input name="cid" type="hidden" value="<?php echo $_SESSION['Id']?>">                                           
<input name="Upload Now" type="submit" value="Upload Image">


</form>
                      </div>
                  </div>
               </div>
            </div>
      
      
      
</div>
   
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.

   </div>
    <script src="js/scripts.js"></script>
   <script src="toastr.js"></script>
 
   <script src="js/jquery.blockui.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>

   <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
   <script type="text/javascript" src="csspop/css-pop.js"></script>
    <script type="text/javascript">			
    	    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
$(document).ready(function() {
 debugger;
  $('#buttonloadunit').magnificPopup({
    type: 'inline',
    items: {src: '#modalload2'},
    preloader: false,
    modalload2: true
  });

});
$(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
        $('form')[0].reset();
  });
</script>

   <!--<script>
    var map;
    var marker;
    var infowindowPhoto = new google.maps.InfoWindow();
    var latPosition;
    var longPosition;
    
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
                
                var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    
                latPosition = position.coords.latitude;
                longPosition = position.coords.longitude;
    
                marker = new google.maps.Marker({
                    position: pos,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
                
                map.setCenter(pos);
                updatePosition();
    
                google.maps.event.addListener(marker, 'click', function (event) {
                    updatePosition();
                });
    
                google.maps.event.addListener(marker, 'dragend', function (event) {
                    updatePosition();
                });
            });
        }
    }
    
    function updatePosition() {
    
        latPosition = marker.getPosition().lat();
        longPosition = marker.getPosition().lng();
    
        contentString = '<div id="iwContent">Lat: <span id="latbox">' + latPosition + '</span><br />Lng: <span id="lngbox">' + longPosition + '</span></div>';
        
        document.getElementById('latitude').value = latPosition;
        document.getElementById('longitude').value = longPosition;
        
        infowindowPhoto.setContent(contentString);
        infowindowPhoto.open(map, marker);
    }
    
    initialize();
	
	

	

	
	

	
	</script>-->

</body>
<!-- END BODY -->
</html>