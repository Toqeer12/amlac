<?php
			session_start();

require('connect.php');

 
if(isset($_POST['email']))
{
$Username=$_POST['email'];
   
$encry=md5($Password);

	

if(!empty($Username)&&!empty($Password))
	{ 
		$sql= "SELECT * From  registration WHERE email='$Username'  ";   
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
								$_SESSION['language']='English';
								$_SESSION['rtl']='rtl';
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
									 	header("location: main_page.php");
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
												header("location: main_page.php");
												exit();
											}
		 
						}

						
				}
	}



}
 
?>
