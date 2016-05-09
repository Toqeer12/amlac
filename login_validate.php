<?php
			session_start();

require('connect.php');

 
if(isset($_POST['name'])&&isset($_POST['pass']))
{
$Username=$_POST['name'];
$Password=$_POST['pass'];
$type=$_POST['type'];
 
$encry=md5($Password);
if($type=='admin'||$type=='super_admin')
{
	

if(!empty($Username)&&!empty($Password))
	{ 
		$sql= "SELECT * From  registration WHERE email='$Username' AND pin='$encry' ";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				 {
				 	echo $vardate=date("Y-m-d");
	


						if(mysql_num_rows($result) > 0) 
						{
							 
								$member = mysql_fetch_assoc($result);
								$_SESSION['user'] = $member['email'];
								$_SESSION['company'] = $member['comp_name'];
								$_SESSION['Id'] = $member['Id'];
							    $_SESSION['fulname'] = $member['full_name'];
							   	$var=$member['exp_date'];
							   if($var<=$vardate)
							   {
								   $_SESSION['exp']='invalid';
								   	header("Location: subscribe.php");	
							   		 "<script>alert('Your Lience is Expire');</script>";
							   }
							   else
							   {
				 					$_SESSION['exp']='valid';
								    $vartype = $member['type'];
									if($vartype=='admin')
									{
										
										header("location: index_admin.php");
									} 
									else
									{
									 	header("location: index.php");
									}
						
									
							   		
								exit();
							   }
							
						}

						else 
						{
						?>
								<script>alert('wrong details');</script>

								<?php
											$errmsg_arr[] = 'user name and password not found';
											$errflag = true;
											if($errflag)
											{
												$_SESSION['message'] = 'User Name or Password is invalid!';
												header("location: login.php");
												exit();
											}
		 
						}

						
				}
	}
}
else {
			$sql= "SELECT * From clients WHERE email='$Username' AND password='$encry' ";   
			$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				 {	 
					 if(mysql_num_rows($result) > 0) 
						{
							 
								$member = mysql_fetch_assoc($result);
								$_SESSION['user'] = $member['email'];
								$_SESSION['Id'] = $member['id'];
								$_SESSION['fulname'] = 		  $member['real_name'];
								$_SESSION['real_state'] = $member['cid'];
					 			header("location: owner_admin.php");
						}
						
					 else 
						{
						?>
								<script>alert('wrong details');</script>

								<?php
											$errmsg_arr[] = 'user name and password not found';
											$errflag = true;
											if($errflag)
											{
												$_SESSION['message'] = 'User Name or Password is invalid!';
												header("location: login.php");
												exit();
											}
		 
						}
				 }	
}
}
 
?>
