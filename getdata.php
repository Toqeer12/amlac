 
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
	$sql= "SELECT * From images_tbl WHERE cid='".$_POST['cid']."'";   
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result) 
	{	
		if(mysql_num_rows($result) > 0) {
				$sqlupdate="UPDATE `images_tbl` SET `images_path`='$target_path',`submission_date`='".date("Y-m-d")."' WHERE cid='".$_POST['cid']."'";
				$result2=mysql_query($sqlupdate)or  die('Invalid query: ' . mysql_error());
				if($result2)
				{
					header("location:main_page.php");
				}
		}


	else
		{
	$query_upload="INSERT into `images_tbl` (`images_path`,`submission_date`,`cid`) VALUES 
		
		('".$target_path."','".date("Y-m-d")."','".$_POST['cid']."')";
			mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
			header("location:main_page.php");
		}

	}
				
}
else
	{
	  exit("Error While uploading image on the server");
	} 
}

?>
