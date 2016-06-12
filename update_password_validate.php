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
		$sql= "UPDATE `registration` SET `pin`='$encry' WHERE email='$Username'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				 {


                                header("location: index.php");
			 
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
                                    header("location: index.php");
                                    exit();
                                }

            }

						
				 
	}



}
 
?>
