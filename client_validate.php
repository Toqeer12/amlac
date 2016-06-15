<?php

require('connect.php');
 session_start();
if($_GET['id']=='1')
{
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];
$encryp=md5(FLOOR( 1000 + ( RAND( ) *8999 ) ));
$sql= "SELECT * From clients WHERE email='$email'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result) {
				if(mysql_num_rows($result) > 0)
				 {
					$data = array('id' => "0", 'text' => $realname);
					header('Content-Type: application/json');
					echo json_encode($data);
				 }
				else
				{
				$sql="INSERT INTO `clients`(`real_name`, `emi_id`, `mob_no`, `phone_no`, `email`, `passport`, `pbox`, `resi_address`, `job_title`, `fax`,`cid`,`account_no`, `bank_name`, `nation`, `c_name`, `notes`, `company_act`, `sponsor`, `vendor`, `password`)
				 VALUES ('$realname','$emid','$contact','$phone','$email','$passport','$pbox','$address','$title','$fax','$id','','','','','','','0','0','$encryp');";
				$result=mysql_query($sql);
				 $id=mysql_insert_id();
				$data = array('id' => $id, 'text' => $realname);
				header('Content-Type: application/json');
				echo json_encode($data);
				}
				
				
	}
}
else if($_GET['id']=='11')
{
	
	
$encryp=FLOOR( 1000 + ( RAND( ) *8999 ));	
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];
$account_no=$_POST['accountno'];
$bank=$_POST['bank'];
$nation=$_POST['nationality'];
$companyname=$_POST['cname'];
$notes=$_POST['notes'];
$companyact=$_POST['cactivity'];
$sponsor=$_POST['sponsor'];
$vender=$_POST['vender'];
$sql= "SELECT * From clients WHERE Email='$email'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result) {
				if(mysql_num_rows($result) > 0)
				 {
				$data = array('id' => "0", 'text' => "exist");
				header('Content-Type: application/json');
				echo json_encode($data);
				 }
				else
				{
				$sql="INSERT INTO `clients`(`real_name`, `emi_id`, `mob_no`, `phone_no`, `email`, `passport`, `pbox`, `resi_address`, `job_title`, `fax`,`cid`,`account_no`, `bank_name`, `nation`, `c_name`, `notes`, `company_act`, `sponsor`, `vendor`,`password`)
				 VALUES ('$realname','$emid','$contact','$phone','$email','$passport','$pbox','$address','$title','$fax','$id','$account_no','$bank','$nation','$companyname','$notes','$companyact','$sponsor','$vender','$encryp');";
				$result=mysql_query($sql);
				 $id=mysql_insert_id();
				$data = array('id' => $id, 'text' => $realname);
				header('Content-Type: application/json');
				echo json_encode($data);
				}
				
				
	}
	
}
else if($_GET['id']=='101')
{
	
	
$updateid=$_POST["updateid"];
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];
$account_no=$_POST['accountno'];
$bank=$_POST['bank'];
$nation=$_POST['nationality'];
$companyname=$_POST['cname'];
$notes=$_POST['notes'];
$companyact=$_POST['cactivity'];
$sponsor=$_POST['sponsor'];
$vender=$_POST['vender'];

				$sql="UPDATE `clients` SET `real_name`='$realname',`emi_id`='$emid',`mob_no`='$contact',`phone_no`='$phone',`email`='$email',`passport`='$passport',`pbox`='$pbox',`resi_address`='$address',`job_title`='$title',
                `fax`='$fax',`cid`='$id',`account_no`='$account_no',`bank_name`='$bank',`nation`='$nation',`c_name`='$companyname',`notes`='$notes',`company_act`='$companyact',`sponsor`='$sponsor',`vendor`='$vender'
                 WHERE id = '$updateid'";
				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
				 
				$data = array('id' => $updateid);
				header('Content-Type: application/json');
				echo json_encode($data);
				
				
	}
	

else if($_GET['id']=='2')
{
	header("Location:user_reg_form.php");
}
	else if ($_GET['id']=='3')
	{	
		$title=$_POST['scripttitle'];
		$sql2="INSERT INTO `script`(`script_title`, `script`, `cid`) VALUES ('$title','".$_POST['script']."','".$_SESSION['Id']."');";	
			 $result=mysql_query($sql2);
			 $id=mysql_insert_id();
					$data = array('id' => $id, 'text' => $title);
					header('Content-Type: application/json');
					echo json_encode($data);
	}
	else if($_GET['id']=='5')
	{
		$var=$_POST['proptypenew'];
		$sql2="INSERT INTO `property_type`(`prop_type`) VALUES ('".$_POST['proptypenew']."');";
		$result=mysql_query($sql2);
		$id=mysql_insert_id();
		$data = array('id' => $id, 'text' => $var);
		header('Content-Type: application/json');
		echo json_encode($data);
	}
else if($_GET['id']=='7')
{
    global $ownerprop,$ownunit;
    $property_name = $_POST['propertyname'];
		  $sql3= "SELECT * From rent_property WHERE property_name='$property_name'";   
          $result3=mysql_query($sql3)or  die('Invalid query: ' . mysql_error());
	      if($result3)
		   {
				if(mysql_num_rows($result3) > 0)
				 {
					 
						$member3 = mysql_fetch_assoc($result3);
				 		$ownerprop=$member3['property_name'];
                         $proprenter=$member3['renter'];
                         $ownunit=$member3['unit'];
				 }
	       }
	 	 $duration = $_POST['duration'];
		$startdate = $_POST['startdate'];
			$month = $_POST['month'];
	      $payment = $_POST['payment'];
  	  $endcontract = $_POST['endcontract'];
  $script_contract = $_POST['script_contract'];
   $write_contract = $_POST['write_contract'];
		   $renter = $_POST['renter'];
		   $cid	   = $_SESSION['Id'];
		   $unit   = $_POST['unit'];
		   $sql= "SELECT * From add_property WHERE id='$property_name'";   
		   $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
		   if($result)
		    {
				if(mysql_num_rows($result) > 0)
				 { 
					$member = mysql_fetch_assoc($result);
				 	$owner=$member['owner_id'];
				 }
			}

		   
		$sql2= "SELECT * From real_state_unit WHERE property_name='$property_name' ";   
        $result2=mysql_query($sql2)or  die('Invalid query: ' . mysql_error());
	    if($result2)
		 {
				if(mysql_num_rows($result2) > 0)
				 {
					 
						$member2 = mysql_fetch_assoc($result2);
				 		$block_no=$member2['block_no'];
				 }
	     }
		 if($renter==$owner)
	 		{
		    $data = array('cid' => "0", 'ownerid' => "0", 'property' => "Owner and Renter Cannot be Same");
	   	    header('Content-Type: application/json');
			    echo json_encode($data);
		 }
         else if($ownunit==$unit)
         {
             	    $data = array('cid' => "40", 'ownerid' => "40", 'property' => "Property is already in lease");
	   	            header('Content-Type: application/json');
			        echo json_encode($data);
         }
		 else
		 {
		$sql2="INSERT INTO `rent_property`(`write_con_dat`, `start_date`, `ending_date`, `property_name`, `renter`, `script`, `duration`, `schudle_month`, `cid`, `owner`, `unit`, `payment`) 
			VALUES ('$write_contract','$startdate','$endcontract','$property_name','$renter','$script_contract','$duration','$month','$cid','$owner','$unit','$payment');";
			$result2=mysql_query($sql2);
                if($result2)
                {
                    $sqlupdate="UPDATE `real_state_unit` SET `status`='Rented' WHERE `property_name`='$property_name' AND `block_no`='$block_no'";
                    $result3=mysql_query($sqlupdate);
                    
                    if($result3)
                    {
                          				 $data = array('cid' => "11", 'ownerid' => $owner, 'property' => $property_name, 'unit' =>$unit );
			                             header('Content-Type: application/json');
			                             echo json_encode($data);
                    }
                    
                }

				
				
		
		 }
		
}
else if ($_GET['id']=='8')
{
$startdate = $_POST['startdate'];
$paymentmethod = $_POST['paymentmethod'];
$amount = $_POST['amount'];
$ownerid = $_POST['ownerid'];
$property = $_POST['property'];
$unit = $_POST['unit'];
$state = $_POST['statement'];
$cid=$_SESSION['Id'];
$datee=date("Y-m-d");
$varstatement=$_POST['statement'];
		$sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$property'  And datee='$startdate' And unit='$unit'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    $paid    =  $member['amount_paid'];
                    $var     =  $member['Amount'];
                    $varId   =  $member['payment'];
                    $final   =  $paid+$amount;
                    $Amount  =  $var-$final; 
                    $countsql="Select Count(*) payment from finaical WHERE owner='$ownerid' AND propertyid='$property'";
                    $results=mysql_query($countsql);
                     if($results)
                     {  	
                         if(mysql_num_rows($results) > 0)
							 {
								 $member  = mysql_fetch_assoc($results);
                                 $varg=$varId+1;
                                 if($varg==$member['payment'])
                                  {         
                                      if($amount<$var)
                                      {
                                            $data = array('cid' => "33");
                                            header('Content-Type: application/json');
			                                echo json_encode($data);
                                      }
                                      else 
                                      {

                                            $sql2="INSERT INTO  `paid_amount`(`paid_amount`, `paid_date`, `owner_id`, `propertyid`, `unpaid`,`unit`,`acutal_paid_date`,`cid`,`statement`)
			                                VALUES ('$amount','$startdate','$ownerid','$property','nill','$unit','$datee','$cid','$varstatement');";
		    	                            $result=mysql_query($sql2);
										    $sqlupdate="UPDATE `finaical` SET `status`='paid',`amount_paid`='$final',`Amount`='0',`acutal_paid_date`='$datee' WHERE owner='$ownerid' AND propertyid='$property' And datee='$startdate'";	
										    $result=mysql_query($sqlupdate);
                                            if($result)
                                                  {      
                                                      $sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$property'  And  unit='$unit' And payment='$varId'";   
                                                      $results=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                                      if($results)
                                                          {
                                                           if(mysql_num_rows($results) > 0)
                                                               {
                                                                  $member  = mysql_fetch_assoc($results);
                                                                  $amount  = $member['Amount'];
                                                                  $fyamount = $Amount+$amount; 
                                                                  $sqlupdate5="UPDATE `finaical` SET `Amount`='$fyamount' WHERE owner='$ownerid' AND propertyid='$property' And payment='$varId'";	
                                                                  $resulthis=mysql_query($sqlupdate5);
                                                                  if($resulthis)
                                                                              {
                                                                                  $sqlupdate2="UPDATE `paid_amount` SET `unpaid`='$Amount' WHERE owner_id='$ownerid' AND propertyid='$property' And unit='$unit' And paid_date='$startdate' ";	
                                                                          $result2=mysql_query($sqlupdate2);
                                                                             if($result2)
                                                                                    {
                                                                                           $data = array('cid' => "2");
                                                                                            header('Content-Type: application/json');
                                                                                            echo json_encode($data);
                                                                                    }
                                                                                }
                                                             }
                                                         } 
                                                     }
                                      }
                        
                                                 
                                  }
                                  else 
                                  {
                                          $sql2="INSERT INTO  `paid_amount`(`paid_amount`, `paid_date`, `owner_id`, `propertyid`, `unpaid`,`unit`,`acutal_paid_date`,`cid`,`statement`)
			                              VALUES ('$amount','$startdate','$ownerid','$property','nill','$unit','$datee','$cid','$varstatement');";
		    	                          $result=mysql_query($sql2);
										  $sqlupdate="UPDATE `finaical` SET `status`='paid',`amount_paid`='$final',`Amount`='0',`acutal_paid_date`='$datee' WHERE owner='$ownerid' AND propertyid='$property' And datee='$startdate'";	
										  $result=mysql_query($sqlupdate);
                                          if($result)
                                                  {      
                                                      $sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$property'  And  unit='$unit' And payment='$varg'";   
                                                      $results=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                                      if($results)
                                                          {
                                                           if(mysql_num_rows($results) > 0)
                                                               {
                                                                  $member  = mysql_fetch_assoc($results);
                                                                  $amount  = $member['Amount'];
                                                                  $fyamount = $Amount+$amount; 
                                                                  $sqlupdate5="UPDATE `finaical` SET `Amount`='$fyamount' WHERE owner='$ownerid' AND propertyid='$property' And payment='$varg'";	
                                                                  $resulthis=mysql_query($sqlupdate5);
                                                                  if($resulthis)
                                                                              {
                                                                                  $sqlupdate2="UPDATE `paid_amount` SET `unpaid`='$Amount' WHERE owner_id='$ownerid' AND propertyid='$property' And unit='$unit' And paid_date='$startdate' ";	
                                                                          $result2=mysql_query($sqlupdate2);
                                                                             if($result2)
                                                                                    {
                                                                                           $data = array('cid' => "2");
                                                                                            header('Content-Type: application/json');
                                                                                            echo json_encode($data);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                     }
                               }
                      }      
			   }                 
		   }
      }       
 }         
                                   
                                 
else if($_GET['id']=='10')
{
	$sponsname=$_POST['sponsname'];
	$mblnum=$_POST['mobilenum'];
	$personal=$_POST['persnum'];
	 	$sql2="INSERT INTO `sponsor`(`sponsor_name`, `mbl_num`, `personal_id`,`cid`) VALUES ('$sponsname','$mblnum','$personal','".$_SESSION['Id']."');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('id' => $id, 'text' => $sponsname);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}

else if($_GET['id']=='9')
{
		$bankname=$_POST['bankname'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$details=$_POST['detail'];
	 	$sql2="INSERT INTO `bank_detail`(`bank_name`, `country`, `city`, `detail`, `cid`) VALUES ('$bankname','$country','$city','$details','".$_SESSION['Id']."');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('id' => $id, 'text' => $bankname);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}
else if($_GET['id']=='15')
{
	$customer=$_POST['customername'];
	$type=$_POST['type'];
	$vendor=$_POST['vendor'];
	$amount=$_POST['amount'];
	$notes=$_POST['notes'];
	$property=$_POST['property'];
	$owner=$_POST['owner'];
	$vardate=date("Y-m-d");
    $comp=$_POST['comp'];
    $unit=$_POST['unit'];
		 	$sql2="INSERT INTO `service_bill`(`Cname`, `type`, `vendor`, `amount`, `notes`, `property`, `owner`,`datee`,`unit`,`cid`) 
			VALUES ('$customer','$type','$vendor','$amount','$notes','$property','$owner','$vardate','$unit','$comp');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('ownerid' => $owner, 'property' => $property, 'unit' => $unit);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}

else if($_GET['id']=='20')
{
	$ownerId =	$_POST['owmerId'];
	$owner    = $_POST['owner'];
	$propname = $_POST['propname'];
	$unitt    = $_POST['unitt'];
	$type     = $_POST['type'];
	$vendor   = $_POST['vendor'];
	$bill     = $_POST['bill'];
	$amount   = $_POST['amount'];
	$notes    = $_POST['notes'];
	$datee    = $_POST['datee'];
	$property = $_POST['property'];
	$vardate  = date("Y-m-d");
	$cid 	  = $_SESSION['Id'];
		 	$sql2="INSERT INTO `property_expense`(`owner`, `propname`, `unitt`, `type`, `vendor`, `bill`, `amount`, `notes`, `datee`, `property`, `vardate`, `cid`, `owner_id`) 
			VALUES ('$owner','$propname','$unitt','$type','$vendor','$bill','$amount','$notes','$datee','$property','$vardate','$cid','$ownerId');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
			 $sqlout="INSERT INTO `service_bill`(`Cname`, `type`, `vendor`, `amount`, `notes`, `property`, `owner`,`datee`,`unit`,`cid`) 
			VALUES ('$propname','$type','$vendor','$amount','$notes','$property','$ownerId','$vardate','$unitt','$cid');";
			$resultout=mysql_query($sqlout);
			if($resultout)
			{
				$data = array('text' => "success");
				header('Content-Type: application/json');
				echo json_encode($data);
			}
				
			}
}
else if($_GET['id']=='109')
{
	$x=json_decode($HTTP_RAW_POST_DATA);

 $delId=$x->{'deleteId'}; 
  $type=$x->{'deletetype'}; 

             if($type=='renter')
			{
				
			
           $sql= "SELECT * From rent_property WHERE renter='$delId'";   
		   $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				{
							if(mysql_num_rows($result) > 0)
							{ 
								$member = mysql_fetch_assoc($result);
							$data = array('delid' => "0");
							header('Content-Type: application/json');
							echo json_encode($data);
							}
							else 
							{
								$sqldelete="DELETE FROM `clients` WHERE id='$delId'";
								$result=mysql_query($sqldelete)or  die('Invalid query: ' . mysql_error());
								if($result)
								{
									$data = array('delid' => "1");
									header('Content-Type: application/json');
									echo json_encode($data); 
								}

							}
				}
			}
			else if($type=='owner')
			{
				
				$sql= "SELECT * From add_property WHERE owner_id='$delId'";   
				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
				if($result)
				{
							if(mysql_num_rows($result) > 0)
							{ 
								$member = mysql_fetch_assoc($result);
							$data = array('delid' => "0");
							header('Content-Type: application/json');
							echo json_encode($data);
							}
							else 
							{
								$sqldelete="DELETE FROM `clients` WHERE id='$delId'";
								$result=mysql_query($sqldelete)or  die('Invalid query: ' . mysql_error());
								if($result)
								{
									$data = array('delid' => "1");
									header('Content-Type: application/json');
									echo json_encode($data); 
								}
							}
				}
			}
			else {
				$sql= "SELECT * From clients WHERE vendor='$delId'";   
				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
				if($result)
				{
							if(mysql_num_rows($result) > 0)
							{ 
								$member = mysql_fetch_assoc($result);
							$data = array('delid' => "0");
							header('Content-Type: application/json');
							echo json_encode($data);
							}
							else 
							{
								$sqldelete="DELETE FROM `clients` WHERE id='$delId'";
								$result=mysql_query($sqldelete)or  die('Invalid query: ' . mysql_error());
								if($result)
								{
									$data = array('delid' => "1");
									header('Content-Type: application/json');
									echo json_encode($data); 
								}
							}
				}
			}
}
else if ($_GET['id']=='444')
{
	
$x=json_decode($HTTP_RAW_POST_DATA);

$fname=$x->{'fullname'}; 
$contact=$x->{'mobile'};
$cname=$x->{'compname'};
$user=$x->{'email'};
$pass=$x->{'pin'};
$address=$x->{'address'};
$city=$x->{'city'};
$type=$x->{'type'};
$compId=$x->{'com'};
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
					$data = array('id' => "0");
			        header('Content-Type: application/json');
			        echo json_encode($data);
 
                 }
				 else {
					 $sql="INSERT INTO `Registration`(`full_name`, `email`, `comp_name`, `phone_no`, `city`, `pin`, `reg_date`, `exp_date`, `reg_time`, `type`,`comp_id`) VALUES 
					('$fname','$user','$cname','$contact','$city','$encryp','$date','$expdate','$time','$type','$compId');";
					$result=mysql_query($sql);
					if($result)
					{
					$data = array('id' => "1");
			        header('Content-Type: application/json');
			        echo json_encode($data);
					}
			
				 }
			
        }



}
 else if ($_GET['id']=='1024')
 {
	 $x=json_decode($HTTP_RAW_POST_DATA);
	$email=$x->{'email'}; 
	$password=$x->{'pasword'};
 
         $subject = "This is subject";        
         $message = "<b>This is HTML message.</b>";
         $message .= 'Your Registered Email With Almac is  '.$email. 'And Password to Access Dashboard is '.$password;
         
         $header = "From:contacts@arrowtec.ae \r\n";
          $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
         
         if( $retval == true ) {
          	$data = array('id' => "1");
			        header('Content-Type: application/json');
			        echo json_encode($data);
         }else {
            	$data = array('id' => "2");
			        header('Content-Type: application/json');
			        echo json_encode($data);
         }
 
 
 
 }

  else if ($_GET['id']=='1025')
 {
	$x=json_decode($HTTP_RAW_POST_DATA);
	$email=$x->{'email'}; 
	$id=$x->{'id'};
   $sql=   "SELECT  * From access_request Where customerId='$id'";
     $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	 				if($result)
					{ 
						if(mysql_num_rows($result) > 0)
						 {
							 		$data = array('id' => "1");
									header('Content-Type: application/json');
									echo json_encode($data);
						 }
						 else {
							 	$sql= "INSERT INTO `access_request`(`customerId`, `cid`) VALUES ('$id','$email')";
 								$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
  								if($result)
									{
								 	$data = array('id' => "0");
									header('Content-Type: application/json');
									echo json_encode($data);
									}
						 }
					}

 
 }
else if($_GET['id']=='108')
{
$clid   =   $_POST['clid'];
$pkg    =   $_POST['package'];
$amount =   $_POST['amount'];
$enterdamount =   $_POST['enterdamount'];

$date= date("Y/m/d"); 

 if($enterdamount > $amount || $enterdamount < $amount )
 {
	 $data = array('id' => "2");
			   			     header('Content-Type: application/json');
			  				      echo json_encode($data);
 }
 else {
  
  $sql=   "SELECT  * From customer_pkg_detail Where cusid='$clid'";
     $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	 				if($result)
					{ 
						if(mysql_num_rows($result) > 0)
						 {
					     $sqlupdate2="UPDATE `customer_pkg_detail` SET `cur_date`='$date' WHERE `Id`='$clid'";
                    				$result4=mysql_query($sqlupdate2);
									if($result4)
									{
									$datee = strtotime(date("Y-m-d", strtotime($date)) . " +30 days");
									$expdateexpire = date("Y-m-d",$datee);
							 	    $sqlupdatereg="UPDATE `registration` SET `exp_date`='$expdateexpire' WHERE `Id`='$clid'";
                    				$result5=mysql_query($sqlupdatereg);
									if($result5)
									{
								 	$data = array('id' => "1");
									header('Content-Type: application/json');
									echo json_encode($data);
									}
									}
						 }
						 else {
						 $sql=   "INSERT INTO `customer_pkg_detail`(`pkg`, `price`, `cusid`,`cur_date`,`paid_amount`,`status`) VALUES ('$pkg','$amount','$clid','$date','$enterdamount','Paid');";
     					 $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
						 if($result)
								{
									$datee = strtotime(date("Y-m-d", strtotime($date)) . " +30 days");
									$expdate = date("Y-m-d",$datee);
							 	     $sqlupdate="UPDATE `registration` SET `exp_date`='$expdate' WHERE `Id`='$clid'";
                    				$result3=mysql_query($sqlupdate);
									if($result3)
									{
								 	$data = array('id' => "0");
									header('Content-Type: application/json');
									echo json_encode($data);
									}
								
								}
						 }
					}
 }
}
else if($_GET['id']=='117')
{
	$ciid=$_POST['cid'];
	$notifyyy=$_POST['notify'];
	$sql= "SELECT  * From registration where Id='$ciid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
	 				$date=$member['exp_date'];
					$datee = strtotime(date("Y-m-d", strtotime($date)) . "-".$notifyyy."days");
					$expdate = date("Y-m-d",$datee);
					$sql="Update `customer_pkg_detail` SET `notify`='$expdate' WHERE `cusid`='$ciid'";
					$result3=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
					if($result3)
					{
					
					$data = array('id' => "0");
					header('Content-Type: application/json');
					echo json_encode($data);
					}
                 }
		}	
}
else if($_GET['id']=='777')
{
	$varnotifytime = $_POST['notitime'];
	$varreceiver   = $_POST['receiver'];
	$varstatus     = $_POST['status'];
	$varId 		   = $_POST['id'];
 	$renter_text   = $_POST['rentertext'];
	$owner_text    = $_POST['ownertext'];
	$agent_text    = $_POST['agenttext'];	
							$sql= "SELECT  * From admin_changes where notify='$varId' And cid='".$_SESSION['Id']."'";   
							$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
							if($result)
							{	
								if(mysql_num_rows($result) > 0)
								    {
									 $sqlupdate="UPDATE `admin_changes` SET `receiver`='$varreceiver',`status`='$varstatus',`notification_time`='$varnotifytime',`renter_text`='$renter_text',`owner_text`='$owner_text',`agent_text`='$agent_text' WHERE cid='".$_SESSION['Id']."' AND notify='$varId'";
								 	 $result=mysql_query($sqlupdate)or  die('Invalid query: ' . mysql_error());
									  		if($result)
											{
											$data = array('id' => "0");
											header('Content-Type: application/json');
											echo json_encode($data);
											}
								    }
								else
							    	{
				  $sql=   "INSERT INTO `admin_changes`(`notify`, `cid`, `receiver`, `status`,`notification_time`, `renter_text`, `owner_text`, `agent_text`) VALUES ('$varId','".$_SESSION['Id']."','$varreceiver','$varstatus','$varnotifytime','$renter_text','$owner_text','$agent_text');";
											$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
											if($result)
											{
					
											
											$data = array('id' => "1");
											header('Content-Type: application/json');
											echo json_encode($data);
											}
								    }
			
							}
					

}
else if($_GET['id']=='778')
{
 
	$varstatus     = $_POST['rowstat'];
	$varId 		   = $_POST['rowId'];
	$sqlupdate="UPDATE `admin_changes` SET  `status`='$varstatus' WHERE `notify`='$varId' And cid='".$_SESSION['Id']."'";
    $result3=mysql_query($sqlupdate);
	if($result3)
	{
	$data = array('id' => "0");
	header('Content-Type: application/json');
	echo json_encode($data);
	}
}
else
{
	header("Location:add_lease.php");	
}



	?>