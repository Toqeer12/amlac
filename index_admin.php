<!DOCTYPE html>

<?php
 session_start();
 
 
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Managed Tables</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php
    include 'header_admin.php';
     include 'raw_detail.php';
    
    ?>

	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse">
 
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			
		</div>
	
		<div id="main-content">
			<div class="container-fluid" >
				<div class="row-fluid">
					<div class="span12">
  
						<h3 class="page-title">
							Dashboard	
				 
						</h3>
					
					</div>
				</div>

				<div id="page" class="dashboard">
                    <div class="row-fluid circle-state-overview">
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-user turquoise-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php subcriber() ?>" data-fgColor="#4CC5CD" data-bgColor="#ddd">
                                </div>
                                <div class="details">
                                    <div class="number"><?php subcriber()?></div>
                                    <div class="title">				
									Total Amlac Subscriber</div>
                                </div>

                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-tags red-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php client()?>" data-fgColor="#e17f90" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php client()?></div>
                                    <div class="title">Total Client</div>
                                </div>

                            </div>
                        </div>


                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-shopping-cart green-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php property()?>" data-fgColor="#a8c77b" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php property()?></div>
                                    <div class="title">Total Properties</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-comments-alt gray-color"></i>
                                    </div>
                                    <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php unit_property()?>"  data-fgColor="#b9baba" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php unit_property()?></div>
                                    <div class="title">Total Unit</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-eye-open purple-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php lease_property()?>" data-fgColor="#c8abdb" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php lease_property()?></div>
                                    <div class="title">Total Lease Property</div>
                                </div>

                            </div>
                        </div>


                   
                    </div>
         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-body">                          
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                     <th>Fullname</th>
                                    <th class="hidden-phone">Email</th>
                                    <th class="hidden-phone">Company Name</th>
                                    <th class="hidden-phone">Phone No</th>
                                    <th class="hidden-phone">Registered Date</th>
                                    <th class="hidden-phone">Expiry Date</th>
                                     <th class="hidden-phone">View Detail</th>
                                </tr>
                            </thead>
                                  <tbody>
                               
                                            <?php
                                            require('connect.php');
                                            $sql= "SELECT  * From registration Where type='rs'";   
                                                    $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

                                                    if($result) 
                                                    {
                                                        if(mysql_num_rows($result) > 0)
                                                            {
                                                                
                                                                while($member  = mysql_fetch_assoc($result))
                                                                {
                                                                echo "<tr>";
                                                                echo "<td>".$member['Id']."</td>";
                                                                echo "<td>".$member['full_name']."</td>";
                                                                echo "<td>".$member['email']."</td>";
                                                                echo "<td>".$member['comp_name']."</td>";
                                                                echo "<td>".$member['phone_no']."</td>";
                                                                echo "<td>".$member['reg_date']."</td>";
                                                                echo "<td>".$member['exp_date']."</td>";
                                                                ?>
                                                            <td><a href="reg_user_admin.php?id=<?php echo $member['Id']?>">View</a></td>";
                                                                <?php
                                                                echo "</tr>";
                                                                }
                                            
                                                        }
                                                    }
                                            ?>
                                                
   
                                </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>

         </div>
     

   </div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="js/jquery.blockui.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>
 	<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>
