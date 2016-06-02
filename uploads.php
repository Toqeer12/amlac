 
<?php

require('connect.php');

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	

if(move_uploaded_file($temp_name, $target_path))
 {

		if($_GET['id']==1)
		{
			  $time=date("Y-m-d");
			  $property = $_POST['propid'];
			  $owner 	= $_POST['ownerid'];
			  $cid 		= $_POST['cid'];
 			  $remark 	=$_POST['remark'];
			  $unit 	=$_POST['unitid'];
				mysql_query("INSERT INTO `user_uploads_unit`(`image_name`, `cid`, `pid`, `created`, `unitid`) VALUES
				 ('$imagename','$cid','$property','$time','$unit')");
				header("location:unit_info.php?unit=$unit&id=$property");
		}
		else if($_GET['id']==2)
		{
		 $time=time();
		 $var=$_POST['propid'];
         $var2=$_POST['ownerid'];
		 $var3=$_POST['unit'];
		 $var4=$_POST['renter'];
		 $var5=$_POST['remark'];
		 $var6=$_POST['cid'];
		 $time=date("Y-m-d");
	     mysql_query("INSERT INTO user_uploads(image_name,prop_id,created,owner_id,remark,cid) VALUES('$imagename','".$_POST['propid']."','$time','".$_POST['ownerid']."','$var5','$var6')");
		 header("location:job_title.php?id=$var2&property=$var&unit=$var3&renter=$var4");
		}
		else {
			  $time=date("Y-m-d");
			  $property = $_POST['propid'];
			  $owner 	= $_POST['ownerid'];
			  $cid 		= $_POST['cid'];
			  $remark =$_POST['remark'];
			 mysql_query("INSERT INTO `property_receipt`(`image`, `cid`, `created`, `owner_id`,`propertyId`,`$remark`) VALUES ('$imagename','$cid','$time','$owner','$property','remark')");
			header("location:prop_info.php?id=$property ");
		}

	
				
}
else
	{
	  exit("Error While uploading image on the server");
	} 
}

?>
