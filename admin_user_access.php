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
   <link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



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
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php
    include 'admin_header.php';
     
    ?>

	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse">
 
 	<?php 
include 'admin_menu.php';

?>
			
		</div>

		<div id="main-content">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
  
						<h3 class="page-title">
							Dashboard	
				 
						</h3>
					
					</div>
				</div>

         <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-body">       
                         <div class="loader"></div>                   
                                    <table class="table table-striped table-bordered" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Em-Id</th>
                                                <th class="hidden-phone">Mobile</th>
                                                <th class="hidden-phone">Nationality</th>
                                                <th class="hidden-phone">Address</th>
                                                <th class="hidden-phone">Vendor</th>
                                                <th class="hidden-phone">Sponsor</th>
                                                <th class="hidden-phone">Bank Name</th>
                                                <th class="hidden-phone">Account #</th>
                                                <th class="hidden-phone">Give Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                               
                                                $clientDetail = clientDetail2();
                                                
                                                for ($i = 0; $i < count($clientDetail); $i++) {


                                                    ?>
                                               <tr>
                                                <td> <?php echo $clientDetail[$i]['real_name'];?></td>
                                                <td> <?php echo $clientDetail[$i]['emi_id'];?></td>
                                                <td> <?php echo $clientDetail[$i]['mob_no'];?></td>
                                                <td> <?php echo $clientDetail[$i]['nation'];?></td>
                                                <td> <?php echo $clientDetail[$i]['resi_address'];?></td>
                                                <td> <?php echo $clientDetail[$i]['vendor']; ?></td>
                                                <td>
                                                <?php 
                                                    if($clientDetail[$i]['sponsor']==0)
                                                    {
                                                        echo 'No Any Sponsor';
                                                    }
                                                    else {
                                                           $var= sponsor($clientDetail[$i]['sponsor']);
                                                                for ($ii = 0; $ii < count($var); $ii++) {
                                                                    echo $var[$ii]['sponsor_name'];
                                                                } 
                                                    }
                                               ?>
                                                </td>
                                                 <td>
                                                    <?php if($clientDetail[$i]['bank_name']==0){
                                                        echo 'No Bank Detail Avilable';
                                                    }
                                                    else
                                                    {
                                                       $varbank= bankdetail($clientDetail[$i]['bank_name']);
                                                       for ($iii = 0; $iii < count($varbank); $iii++)
                                                            {
                                                              echo $varbank[$iii]['bank_name'];
                                                            } 
                                                    }
                                                      ?>
                                                </td>
                                                <td>
                                                    <?php echo $clientDetail[$i]['account_no']; ?>
                                                </td>
                                                <td><a href="#" data-email=<?php echo $clientDetail[$i]['email'] ?> data-password=<?php echo $clientDetail[$i]['password']?> onclick="SendMail(this);">Send Mail</a></td>
                                                <?php 
}
?>
                                            </tr>





                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
<div id="result">
    
    </div>
         </div>
     

   </div>

 
    
 
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    
   <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   <script src="js/scripts.js"></script>
   <script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
   <script src="toastr.js"></script>
 <script type="text/javascript">
          $(window).load(function() {
	$(".loader").fadeOut("slow");
})
    function upgrade(obj)
    
    {
        var id=obj.getAttribute("data-id");
        $("#result").load("upgrade.php?id="+id);
    }
    function payment(obj)
    {
        debugger;
         var id=obj.getAttribute("data-id");
         var package=obj.getAttribute("data-package");
         var amount=obj.getAttribute("data-amount");
         var enterdamount=$("#amount").val();
         var dataString= 'clid='+ id + '&package='+ package + '&amount='+amount+ '&enterdamount='+enterdamount;  
           
         
	 $.ajax({
		url : "client_validate.php?id=108",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{ 
             debugger;
          
            
                if(result.id=='1')
                 {
                    alert("Package is Upgraded Successfully");
                 }
                 else if(result.id=='2')
                 {
                    alert("Enter Amount is Greater/Less Than the Actual Amount");
                     
                 }
               else 
                 {
                  alert("Package is Added Successfully");
                 }
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
                debugger;
	 			alert("error"+result.property);
		}
		});	
    }
    function SendMail(obj)
    {
        debugger;
        var a = obj.getAttribute('data-email');
        var b = obj.getAttribute('data-password');
        var jsonData =
        {
             email: a,
             pasword:b         
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
                		  $().toastmessage('showSuccessToast', "Password Send to Owner Successfully");	
            }  
            else {
                		  $().toastmessage('showErrorToast', "Password Send to Failure");	
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
