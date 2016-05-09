<?php
require('connect.php');
   $var='2';
admin_notification($var);

function subcriber()
{
    		$sql= "SELECT Count(*) email From registration where type='rs'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['email'];
                 }
        }
    
    
    
    
}


function client()
{
        $sql= "SELECT Count(*) emi_id From clients";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['emi_id'];
                 }
        }
    
    
}


function property()
{
        $sql= "SELECT Count(*) id From add_property";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}
function propertyowner($var1,$var2)
{
        $sql= "SELECT Count(*) id From add_property Where owner_id='$var1' And cid='$var2'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}


function unit_property()
{
        $sql= "SELECT Count(*) id From real_state_unit";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}
function unit_propertyowner($var1,$var2)
{
        $sql= "SELECT Count(*) id From real_state_unit Where owner_id='$var1' And cid='$var2'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}
function lease_property()
{
        $sql= "SELECT Count(*) id From rent_property";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}
function lease_propertyowner($var1,$var2)
{
        $sql= "SELECT Count(*) id From rent_property Where owner='$var1' And cid='$var2'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}
function registered_user($var)
{
        global $arry;
        $sql= "SELECT  * From registration Where Id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    $arry[]=$member;
               
                 }
        }
    
        return $arry;
}
function getclientcount($var)
{
        $sql= "SELECT  Count(*) cid From clients Where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['cid'];
                 }
        }
    
    
}
function getclient($var)
{
        $sql= "SELECT  * From clients Where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['id'];
                 }
        }
    
    
}

function clientDetail($var)
{
 global $array;
        $sql= "SELECT  * From clients Where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array[]=$member;
                    }
                 }
        }
      return $array;
    
    
}
function bankdetail($var)
{
 global $array3;
        $sql= "SELECT  * From bank_detail Where id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array3[]=$member;
                    }
                 }
        }
      return  $array3 ;
    
    
}
function sponsor($var)
{
 
        $sql= "SELECT  * From sponsor Where id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array2[]=$member;
                    }
                 }
             
               
        }
      return $array2;
    
    
}
function viewproperty($ownerid,$cid)
{
    global $array5;
        $sql= "SELECT * From add_property Where owner_id='$ownerid' AND cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                 while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array5[]=$member;
                    }
                 }
        }
        return $array5;
    
}



function propertytype($id)
{
    global $array6;
        $sql= "SELECT * From property_type Where  id='$id' ";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                 while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array6 =$member['prop_type'];
                    }
                 }
        }
        return $array6;
    
}
function viewpropertyUnit($cid,$propid)
{
    global $array7;
        $sql= "SELECT * From real_state_unit Where  property_name='$propid' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array7[]=$member;
                        }
                 }
        }
        return $array7;
    
}
function viewpropertyUnitowner($owner,$cid)
{
    global $array7;
        $sql= "SELECT * From real_state_unit Where  owner_id='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array7[]=$member;
                        }
                 }
        }
        return $array7;
    
}
function getpaymentstatus($var)
{
    global $arr;
           $sql= "SELECT * From customer_pkg_detail Where cusid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $arr=$member['status'];
                        }
                 }
                 else{
                     $arr='Unpaid';
                 }
        }
        return print_r($arr);
}

function noftify()
{
    global $array8;
        $sql= "SELECT * From notify_user";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array8[]=$member;
                        }
                 }
        }
        return $array8;
}

function admin_notification($var)
{
       global $array9;
        $sql= "SELECT * From admin_changes where cid='".$_SESSION['Id']."' And notify='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                             while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array9=$member['receiver'];
                        }
                 }
        }
        return $array9; 
}
function admin_notification2($var)
{
       global $array9;
        $sql= "SELECT * From admin_changes where cid='".$_SESSION['Id']."' And notify='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                             while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array9=$member['notification_time'];
                        }
                 }
        }
        return $array9; 
}
function admin_notification3($var)
{
       global $array9;
        $sql= "SELECT * From admin_changes where cid='".$_SESSION['Id']."' And notify='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                             while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array9=$member['status'];
                        }
                 }
        }
        return $array9; 
}

 function propertyname($id)
{
    global $array6;
        $sql= "SELECT * From add_property Where  id='$id' ";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                 while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array6 =$member['propty_name'];
                    }
                 }
        }
        return $array6;
    
}
function viewpropertylease($owner,$cid)
{
        global $array7;
        $sql= "SELECT * From rent_property Where  owner='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array7[]=$member;
                        }
                 }
        }
        return $array7;
}
?>