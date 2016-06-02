<?php 
 
 include 'raw_detail.php';
 
 $data = date("Y-m-d");
 
 

 
 $notificationAlert = GetNoftifyDate();
 
 
 for($i=0; $i< count($notificationAlert); $i++)
 {
 
 if($notificationAlert[$i]['notify']==$data)
 {
 
         $to = CustomerID($notificationAlert[$i]['cusid']);
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
 else {
      echo 'You Losde';
 
 }
 }
 
?>