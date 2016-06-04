<?php
include 'connect.php';
session_start();

$varOwnerId    = $_GET['id'];
$varPropertyId = $_GET['property'];
$varUnit       = $_GET['unit'];
$varRenter     = $_GET['renter'];


$varsession = $_SESSION['Id'];


	$sql= "SELECT * From admin_changes where cid='$varsession' And notify='7'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
                
               $str = $member['receiver'];
			   $renterText = $member['renter_text'];
               $ownerText =$member['owner_text'];
               $agentText =$member['agent_text'];	
				 
				
			}
			
		}
		
	}
 $var = explode(",",$str);
 
if($var[0]=='0')
{
    $owner =0; 
}
else {
     $owner = OwnerRenterName($varOwnerId);

    SendMail($owner,$ownerText);
}
if($var[1]=='0')
{
    $renter = 0;
}
else {
   $renter = OwnerRenterName($varRenter,$renterText);

   SendMail($renter,$renter);
}
if($var[2]=='0')
{
    $agent = 0;
}
else {
    $agent = $_SESSION['user'];

   SendMail($agent,$agentText);
}

   header("location:job_title.php?id=".$varOwnerId."&property=".$varPropertyId."&unit=".$varUnit);






function OwnerRenterName($var)
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
function SendMail($to,$text)
{
         $subject = "This is subject";        
         $message = "<b>This is HTML message.</b>";
         $message .= $text;
         
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