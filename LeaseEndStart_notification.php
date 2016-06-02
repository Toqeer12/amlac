<?php 
 
 include 'raw_detail.php';
 
 $data = date("Y-m-d");
 
 $var = $_SESSION['Id'];

 
 $notificationAlert = LeaseEndStart($data,$var);
 
 
	$sql= "SELECT * From admin_changes where cid='$varsession' And notify='5'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
                
                $str = $member['receiver'];
				
				 
				
			}
			
		}
		
	}
$var = explode(",",$str);
for($i=0; $i < count($notificationAlert); $i++)
{
    

            if($var[0]==0)
            {
                $owner =0; 
            }
            else {
                $owner = OwnerRenterName($notificationAlert[$i]['owner']);
                SendMail($owner);
            }
            if($var[1]==0)
            {
                $renter = 0;
            }
            else {
                $renter = OwnerRenterName($notificationAlert[$i]['renter']);
                SendMail($renter);
            }
            if($var[2]==0)
            {
                $agent = 0;
            }
            else {
                $agent = $_SESSION['user'];
                SendMail($agent);
            }

}


 function OwnerRenterName()
{
   
    global $client;
	$sql= "SELECT * From clients where id='$var'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
			    $client = $member['email'];	
				 
				
			}
			
		}
		
	} 
    return $client;
}
function SendMail($to)
{
         $subject = "This is subject";        
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:contacts@arrowtec.ae \r\n";
          $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
 
}
?>