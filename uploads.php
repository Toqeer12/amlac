 
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
				$var=$_POST['unitid'];
				$var2=$_POST['id'];
				mysql_query("INSERT INTO `user_uploads_unit`(`image_name`, `cid`, `pid`) VALUES ('$imagename','$var','$var2')");
				header("location:unit_info.php?unit=$var&id=$var2");
		}
		else if($_GET['id']==2)
		{
		 $time=time();
		 $var=$_POST['propid'];
         $var2=$_POST['ownerid'];
		 $var3=$_POST['unit'];
		 $var4=$_POST['renter'];
		 $var5=$_POST['remark'];
		 $time=date("Y-m-d");
	     mysql_query("INSERT INTO user_uploads(image_name,prop_id,created,owner_id,remark) VALUES('$imagename','".$_POST['propid']."','$time','".$_POST['ownerid']."','$var5')");
		 header("location:job_title.php?id=$var2&property=$var&unit=$var3&renter=$var4");
		}

	
				
}
else
	{
	  exit("Error While uploading image on the server");
	} 
}

?>
