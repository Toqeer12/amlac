<?php
require('connect.php');


 
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

function admin_notification($var,$varsession)
{
	
	global $array9;
	
	$sql= "SELECT * From admin_changes where cid='$varsession' And notify='$var'";
	
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
	
	return  $array9;
	
}

function admin_notification2($var,$varsession)
{
	
	global $array9;
	
	$sql= "SELECT * From admin_changes where cid='$varsession' And notify='$var'";
	
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

function admin_notification3($var,$varsession)
{
	
	global $array9;
	
	$sql= "SELECT * From admin_changes where cid='$varsession' And notify='$var'";
	
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

function GetProperty($keyword,$lang)
{
	
	if($_SESSION['rtl']=='rtl')
	{
		
		$lang=0;
		
	}
	
	else {
		
		$lang=1;
		
	}
	
	$xml=simplexml_load_file("xml/language.xml") or die("Error: Cannot create object");
	
	
	foreach ($xml->language[$lang]->key as $movie) 
	{
		
		if($keyword==$movie['name'])
		{
			
			echo $movie['value'];
			
			
		}
		
		
		
	}
	
}

function Property_Type()
{
	
	global $array7;
	
	$sql= "SELECT * From property_type";
	
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

function Bank_Name($var)
{
	
	global $array7;
	
	$sql= "Select * from bank_detail Where cid='$var'";
	
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

function sponsor2($var)
{
	
	
	$sql= "SELECT  * From sponsor Where cid='$var'";
	
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
?>
<!--Function Use in Add Property Unit --> 
 <?php
function SelectProperty($var)
{
	
	global $array22;
	$sql= "SELECT  * From add_property Where cid='$var'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
				
				$array22[]=$member;
				
			}
			
		}
		
		
		
	}
	
	return $array22;
	
	
}

function AddLeaseProperty($var)
{
	
	global $data;
	
	$sql= "select DISTINCT property_name from real_state_unit Where cid='$var'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				$var2=$member['property_name'];
				
				$sqlserivce= "Select * from add_property Where id='$var2'";
				
				$result_ser=mysql_query($sqlserivce)or  die('Invalid query: ' . mysql_error());
				
				if($result_ser) 
				{
					
					if(mysql_num_rows($result_ser) > 0)
					{
						
						while($rowsqlserivce_classes=mysql_fetch_assoc($result_ser))
						{
							
							$data[]=$rowsqlserivce_classes;
							
						}
						
					}
					
				}
				
			}
			
		}
		
		
		
	}
	
	return $data;
	
}


function loadScript($var)
{
	
	
	$sql= "SELECT  * From script Where cid='$var'";
	
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


function LoadRenterFinance($varr)
{
	
	global $data;
	
	$sql= "select Distinct renter from rent_property where cid='$varr'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				$var2=$member['renter'];
				
				$sqlserivce= "SELECT * From clients Where id='$var2'";
				
				$result_ser=mysql_query($sqlserivce)or  die('Invalid query: ' . mysql_error());
				
				if($result_ser) 
				{
					
					if(mysql_num_rows($result_ser) > 0)
					{
						
						while($rowsqlserivce_classes=mysql_fetch_assoc($result_ser))
						{
							
							$data[]=$rowsqlserivce_classes;
							
						}
						
					}
					
				}
				
			}
			
		}
		
		
		
	}
	
	return $data;
	
}


function PropertyCount($var)
{
	
	global $data;
	
	$sqlserivce_classes=mysql_query("select Count(*) as total from add_property Where cid='$var'");
	if($sqlserivce_classes) 
	{
		
		if(mysql_num_rows($sqlserivce_classes) > 0)
		{
		while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
		{
			
			$data=$rowsqlserivce_classes['total'];
			
		}
	}
	}
	
	return  $data;
	
	
}

function UnitCount($var)
{
	
	global $data;
	
	$sqlserivce_classes=mysql_query("select Count(*) as total from real_state_unit Where status='unrented' And cid='".$_SESSION['Id']."'");
			if($sqlserivce_classes) 
	{
		
		if(mysql_num_rows($sqlserivce_classes) > 0)
		{
	while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
	{
		
		$data= $rowsqlserivce_classes['total'];
		
	}
		}
	}
	
	
	return $data;
	
}

function LeaseCount($var)
{
	global $data;
	
	$sqlserivce_classes=mysql_query("select Count(*) as total from rent_property Where cid='$var'");
		if($sqlserivce_classes) 
	{
		
		if(mysql_num_rows($sqlserivce_classes) > 0)
		{
	while($rowsqlserivce_classes=mysql_fetch_array($sqlserivce_classes))
	{
		
		$data=$rowsqlserivce_classes['total'];
		
		
	}
		}
	}
	
	return $data;
	
}



function Real_State_Unit_2($var)
{
	
	global $datareal;
	
	$sql= "SELECT * From real_state_unit where cid='$var'";
	
	$result4=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result4) 
	{
		
		if(mysql_num_rows($result4) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result4))
			{
				
				$datareal[]=$member;
				
			}
			
		}
		
	}
	
	return  $datareal;
	
}


function Property_View($var, $var2)
{
	
	$sql= "SELECT *  From add_property WHERE id='$var' And cid='$var2'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	if($result)
	{
		
		if(mysql_num_rows($result) >= 0) 
		{
			
			While($member2 = mysql_fetch_assoc($result))
			{
				
				$data=$member2['propty_name'];
				
			}
			
		}
		
	}
	
	
	return $data;
	
}



function Property_Type_overview($var)
{
	
	global $array7;
	
	$sql= "SELECT * From property_type Where id='$var'";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	
	if($result) 
	{
		
		if(mysql_num_rows($result) > 0)
		{
			
			while($member  = mysql_fetch_assoc($result))
			{
				
				
				
				$array7=$member['prop_type'];
				
			}
			
		}
		
	}
	
	return $array7;
	
}


function Property_Renter($var,$var1,$var2)
{
	
	
	global $data;
	
	$sql= "SELECT *  From rent_property WHERE property_name='$var' And unit='$var1' And cid='$var2' ";
	
	$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	
	if($result)
	{
		
		if(mysql_num_rows($result) >= 0) 
		{
			
			while($member =  mysql_fetch_assoc($result))
			{
				
				$renter=$member['renter'];
				
				$sql= "SELECT *  From clients WHERE id='$renter' And cid='$var2'";
				
				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
				
				if($result)
				{
					
					if(mysql_num_rows($result) >= 0) 
					{
						
						
						$member4 = mysql_fetch_assoc($result);
						
						$data = $member4['real_name'];
						
						
					}
					
				}
				
			}
			
		}
		
	}
	
	return $data;
	
}
function NumFreeUnit($var,$var2)
{
    $sql= "SELECT *  From real_state_unit WHERE property_name='$var' And status='unrented' And cid='$var2'";   
    $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
    if($result)
            {
                if(mysql_num_rows($result) >= 0) 
                { 
                    echo mysql_num_rows($result);
                }
                
             }
} 

function LoadRentedProperty($var)
{                       
                        global $datarented;
    					$sql= "SELECT * From rent_property Where cid='$var'";   
                        $result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($result5)
                         {
                    
                           	while($member=mysql_fetch_array($result5))
							{	
                                $datarented[]= $member;
                            }
                         }
                         return $datarented; 
}
?>
<!--RENTER NAME USE IN MULTIPLE PLACES -->
<?php
function RenterName($var)
{
                global $real_name;
               $sql= "SELECT * From clients Where id='$var'";   
                        $resultcl=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($resultcl)
                         {
                                  $member3=mysql_fetch_array($resultcl);
                                  $real_name=$member3['real_name'];
                                  
                         }    
                         
                         
                       return $real_name;
}
function ViewOwnerRenter($owner,$propertyName,$unit)
{
    	$sql= "SELECT * From rent_property WHERE owner='$owner' AND property_name='$propertyName' And unit='$unit'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
		if($result)
			  {
                  if(mysql_num_rows($result) > 0) 
					{
					 while($member = mysql_fetch_assoc($result))
                     {
                         $datamember[]=$member;
                     } 
                    }
              }
                    
                    return $datamember;
                    
}
function RenterEmid($var)
{
                global $real_name;
               $sql= "SELECT * From clients Where id='$var'";   
                        $resultcl=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($resultcl)
                         {
                                  $member3=mysql_fetch_array($resultcl);
                                  $real_name=$member3['emi_id'];
                                  
                         }    
                         
                         
                       return $real_name;
}
function RenterMob($var)
{
                global $real_name;
               $sql= "SELECT * From clients Where id='$var'";   
                        $resultcl=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                        if($resultcl)
                         {
                                  $member3=mysql_fetch_array($resultcl);
                                  $real_name=$member3['mob_no'];
                                  
                         }    
                         
                         
                       return $real_name;
}
function RealState_LeaseUnit($propertyName,$block)
{
    global $memberrea;
        $sql= "SELECT * From real_state_unit WHERE property_name='$propertyName' And block_no='block'";   
        $result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
        if($result2)
       {
        if(mysql_num_rows($result2) > 0) 
            {
                    while($member2= mysql_fetch_assoc($result2))
                    {
                        $memberrea=$member2['property_type'];
                    }
                    
              }
        } 
        return $memberrea;
}

function Dis_Add_Property($var)
{
	global $disarray;
	$sql= "SELECT DISTINCT owner_id FROM `add_property` where cid='$var'";   
	$result5=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result5)
		{

		while($member=mysql_fetch_array($result5))
		{						   
					$sql= "SELECT * From clients where id='".$member['owner_id']."'";   
					$result6=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
					if($result6)
					{

						while($member2=mysql_fetch_array($result6))
						{	
							$disarray[]=$member2;
						}
					}
		}
		}
		return $disarray;
}
function viewVendor($var)
{
					  global $data; 
		$sql= "SELECT * From clients where vendor='$var'";   
		$result6=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result6)
		{

		while($member2=mysql_fetch_assoc($result6))
			{	
				$data[]=$member2;
			}
		}
		return $data;
}

function Dis_Rent_Property($var)
{
	global $disarray;
	$sqly= "SELECT DISTINCT renter FROM `rent_property` where cid='$var'";   
	$result5=mysql_query($sqly)or  die('Invalid query: ' . mysql_error());
	if($result5)
		{
	     if(mysql_num_rows($result5) > 0) 
            {
				while($member44=mysql_fetch_assoc($result5))
				{						   
							$sqll= "SELECT * From clients where id='".$member44['renter']."'";   
							$result67=mysql_query($sqll)or  die('Invalid query: ' . mysql_error());
							if($result67)
							{

								while($member23=mysql_fetch_assoc($result67))
								{	
									$disarray[]=$member23;
								}
							}
				}
			}
		}
		return  $disarray;
}


function GetNoftifyDate()
{
	global $disnotifyarray;
	$sqlnotify = "SELECT * from customer_pkg_detail";
		$resultNoftifcation=mysql_query($sqlnotify)or  die('Invalid query: ' . mysql_error());
	if($resultNoftifcation)
		{
	     if(mysql_num_rows($resultNoftifcation) > 0) 
            {
				while($membernoftify=mysql_fetch_assoc($resultNoftifcation))
				{						   
				 
				 $disnotifyarray[] = $membernoftify;
				}
			}
		}
		return  $disnotifyarray;
}


function CustomerID($var)
{
	
	global $CustomerID;
	$sqlnotify = "SELECT * from registration Where Id= '$var'";
		$resultNoftifcation=mysql_query($sqlnotify)or  die('Invalid query: ' . mysql_error());
	if($resultNoftifcation)
		{
	     if(mysql_num_rows($resultNoftifcation) > 0) 
            {
				while($memberCsId=mysql_fetch_assoc($resultNoftifcation))
				{						   
				 
				 
				 $CustomerID = $memberCsId['email'];
				}
			}
		}
		return  $CustomerID;
}


function LeaseEndStart($date)
{
	 global $leaseend;
	$sqlnotify = "SELECT * from rent_property Where ending_date = '$date'";
		$resultNoftifcation=mysql_query($sqlnotify)or  die('Invalid query: ' . mysql_error());
	if($resultNoftifcation)
		{
	     if(mysql_num_rows($resultNoftifcation) > 0) 
            {
				while($memberCsId=mysql_fetch_assoc($resultNoftifcation))
				{						   
				 
				 
				 $leaseend[] = $memberCsId;
				}
			}
		}
		return  $leaseend;
}
?>