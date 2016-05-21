<?php

require('connect.php');

session_start();
if($_GET['id']=='2')
{
$propty_name=$_POST["pname"];
$property_type=$_POST['propteryname'];
$blockno=$_POST["blockno"];
$owner_id=$_POST["serivce_classes"];
$inst_no=$_POST['instno'];
$address=$_POST["paddress"];
$year_build=$_POST["ybuild"];
$land_no=$_POST["pn"];
$date_inst=$_POST["dateinst"];
$about_him=$_POST["about"];
$id=$_SESSION['Id'];
$lat=$_POST['latitude'];
$longi=$_POST['longitude'];

$sql="INSERT INTO `add_property`(`address`,`property_type`,`year_build`,`block_no`,`about_him`,`owner_id`,`inst_no`,`land_no`,`date_inst`,`propty_name`,`cid`, `lat`, `longi`)
 VALUES ('$address','$property_type','$year_build','$blockno','$about_him','$owner_id','$inst_no','$land_no','$date_inst','$propty_name','$id','$lat','$longi');";
$result=mysql_query($sql);
$id=mysql_insert_id();
 header("Location:prop_info.php?id=".$id);

}
else
{
	$sql="INSERT INTO `property_type`(`prop_type`) VALUES ('".$_POST['ptype']."');";
$result=mysql_query($sql);
header("Location:user_reg_form.php");
}
	?>