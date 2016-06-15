<!DOCTYPE html>

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
<?php 

    include 'css_header.php';
?>
         
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
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php
    include 'header.php';
     
    ?>

	<div id="container" class="row-fluid"  <?php echo $_SESSION['rtl'];?>>
		<div id="sidebar" class="nav-collapse collapse">
 
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<?php 
include 'header_menu.php';


?>
		</div>
	
		<div id="main-content"  <?php echo $_SESSION['rtl'];?>> 
			<div class="container-fluid" >
				<div class="row-fluid">
					<div class="span12">
  
						<h3 class="page-title">
							<?php GetProperty('dashboard',$_SESSION['rtl']);?>
				 
						</h3>
					
					</div>
				</div>

				<div id="page" class="dashboard">
 
         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-body"> 
                                                 
                         <div class="loader"></div>                        
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th><?php GetProperty('realname',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('email',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('mobileno',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('phoneno',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('addresscust',$_SESSION['rtl']);?></th>
                                    <th><?php GetProperty('giveacess',$_SESSION['rtl']);?></th>
                                </tr>
                            </thead>
                                  <tbody>
                               
                                            <?php
                                            require('connect.php');
                                            $sql= "SELECT  * From clients Where cid='".$_SESSION['Id']."'";   
                                                    $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

                                                    if($result) 
                                                    {
                                                        if(mysql_num_rows($result) > 0)
                                                            {
                                                                
                                                                while($member  = mysql_fetch_assoc($result))
                                                                {
                                                                echo "<tr>";
                                                                echo "<td>".$member['id']."</td>";
                                                                echo "<td>".$member['real_name']."</td>";
                                                                echo "<td>".$member['email']."</td>";
                                                                echo "<td>".$member['mob_no']."</td>";
                                                                echo "<td>".$member['phone_no']."</td>";
                                                                echo "<td>".$member['resi_address']."</td>";                                                       
                                                                ?>
                                                           <td><a href="" data-email=<?php echo $member['email'] ?> data-password=<?php echo $member['password']?> OnClick="ForwardEmail(this)"><?php GetProperty('giveacess',$_SESSION['rtl']);?></a></td>
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
    <script src="js/scripts.js"></script> 
   <script src="js/jquery.blockui.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script src="toastr.js"></script>
<script type="text/javascript">
   	    $(window).load(function() {
	$(".loader").fadeOut("slow");
});

function ForwardEmail(obj)
{
    debugger;
        var email = obj.getAttribute('data-email');
        var pasword =obj.getAttribute('data-password');
                 var jsonData={
                          email: email,
                          pasword:pasword 
                    
         }
         
         
 	 $.ajax({
		url : "client_validate.php?id=1024",
		type: "POST",
		data : JSON.stringify(jsonData),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
		cache: false,
		success: function(result)
		{  debugger;
            
            if(result.id=='1')
            {               
                		  $().toastmessage('showSuccessToast', "Email Send Successfully");	
            }  
            else {
                		  $().toastmessage('showErrorToast', "Email Sending Fail");	
            }
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
            debugger;
            alert(jqXHR.responseText.Message);
 		}
		});	
}

</script>

</body>
</html>
