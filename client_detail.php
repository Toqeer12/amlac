<!DOCTYPE html> <?php 
session_start();

if ($_SESSION['exp'] == 'invalid') {
    header("location:login.php");
    unset($_SESSION['user']);
    unset($_SESSION['company']);
    unset($_SESSION['Id']);
    unset($_SESSION['fulname']);

}


?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
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
                                                <th class="hidden-phone">View Property Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $varCL = $_GET['id'];
                                                $clientDetail = clientDetail($varCL);
                                                
                                                for ($i = 0; $i < count($clientDetail); $i++) {


                                                    ?>
                                                                                            <tr>
                                                                                                <td> <?php 
                                                echo $clientDetail[$i]['real_name']; // uid
                                                ?></td>
                                                <td>
                                                    <?php echo $clientDetail[$i]['emi_id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $clientDetail[$i]['mob_no']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $clientDetail[$i]['nation']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $clientDetail[$i]['resi_address']; ?>
                                                </td>
                                                <td>
                                                   <?php echo $clientDetail[$i]['vendor']; ?>
                                                </td>
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
                                                    <td><a href="client_property_detail.php?cid=<?php echo  $varCL; ?>&owner=<?php echo $clientDetail[$i]['id'];?>">View</a></td>";
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