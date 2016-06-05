<?php
include 'connect.php';
session_start();

 
 $var = date("y-m-d");
 
    global $client;
	$sql= "SELECT * From registration where exp_date='$var'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
			    $client = $member['email'];	
				SendMail($client);
				
			}
			
		}
		
    }
 
function SendMail($to)
{
         $subject = "This is subject";        
         $message = "<b>This is HTML message.</b>";
         $message .= "Your Licence is Expire";
         
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