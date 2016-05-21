
<?php
	session_start();
require('connect.php');
 
$fname=$_POST['user_name'];
$contact=$_POST['tel_num'];
 $cname=$_POST['comp_name'];
$user=$_POST['user_email'];
$pass=$_POST['pin'];
$address=$_POST['addres'];
$city=$_POST['city'];
$type=$_POST['type'];
$com=$_POST['real_id'];
$encryp=md5($pass);
date_default_timezone_set('Asia/Dubai');
$time = date("h:i:sa");
$date= date("Y/m/d"); 
$datee = strtotime(date("Y-m-d", strtotime($date)) . " +1 days");
$expdate = date("Y-m-d",$datee);

   		$sql= "SELECT  * From registration where email='$user'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
					$errmsg_arr[] = 'user name and password not found';
											$errflag = true;
											if($errflag)
											{
												$_SESSION['message'] = 'Email is Alreay Register!';
												header("location: signup.php");
												exit();
											}
 
                 }
				 else {
					 $sql="INSERT INTO `Registration`(`full_name`, `email`, `comp_name`, `phone_no`, `city`, `pin`, `reg_date`, `exp_date`, `reg_time`, `type`,`comp_id`) VALUES 
					('$fname','$user','$cname','$contact','$city','$encryp','$date','$expdate','$time','$type','$com);";
					$result=mysql_query($sql);
					$id=mysql_insert_id();
					if($result)
					{
						for($i=1; $i<11; $i++)
						{
							    $sql=   "INSERT INTO `admin_changes`(`notify`, `cid`, `receiver`, `status`,`notification_time`) VALUES ('$i','$id','0','inactive','0');";
								 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
						}
				
					}
			 		header("location:index.php"); 
 
				 }
			
        }








	?>