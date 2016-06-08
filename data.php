<?php 
require_once("codebase/connector/scheduler_connector.php");
 
$res=mysql_connect("localhost","root","");
mysql_select_db("test");
 
$conn = new SchedulerConnector($res);
 
$conn->render_table("rent_property","id","ending_date,ending_date,property_name,unit");
?>