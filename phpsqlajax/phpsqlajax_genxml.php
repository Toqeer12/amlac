<?php
require("phpsqlajax_dbinfo.php");

$doc =new DomDocument('1.0');
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);
 // Opens a connection to a mySQL server
$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM add_property WHERE cid='".$_GET['cid']."' AND  owner_id='".$_GET['owner']."'";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row =  mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);

  $newnode->setAttribute("name", $row['propty_name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['longi']);
 }

$html=$doc->saveHTML();

echo $html;


 
?>
