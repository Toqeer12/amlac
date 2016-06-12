<?php
			session_start();

require('connect.php');

 
if(isset($_POST['name'])&&isset($_POST['pass']))
{
$Username=$_POST['name'];
$Password=$_POST['pass'];
  
$encry=md5($Password);

	

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

									$sql2= "SELECT * From  clients WHERE email='$Username' AND password='$encry' ";   
									$result2=mysql_query($sql2)or  die('Invalid query: ' . mysql_error());
									if($result2)
				 					{
				 		 
										if(mysql_num_rows($result2) > 0) 
										{
							 
												$member2 = mysql_fetch_assoc($result2);
												$_SESSION['user'] = $member2['email'];								 
												$_SESSION['Id'] = $member2['id'];
												$_SESSION['cid'] = $member2['cid'];
							    				$_SESSION['fulname'] = $member2['real_name'];
												$_SESSION['company'] = '';
												$_SESSION['language']='English';
												$_SESSION['rtl']='rtl';
												header("location: owner_admin.php");
										}
										else {
											$errmsg_arr[] = 'user name and password not found';
											$errflag = true;
											if($errflag)
											{
												$_SESSION['message'] = 'User Name or Password is invalid!';
												header("location: index.php");
												exit();
											}
										}
									 }
				 
		 
						}

						
				}
	}



}
 
?>
