<?php


$varOwnerId    = $_GET['id'];
$varPropertyId = $_GET['property'];
$varUnit       = $_GET['unit'];

$to = "toqeer.arif786@gmail.com";
$subject = "My subject";
$txt = "Hello Kamran FOOL!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: k.azam@arrowtec.ae";

mail($to,$subject,$txt,$headers);
 
header("location:job_title.php?id=".$varOwnerId."&property=".$varPropertyId."&unit=".$varUnit);

?>