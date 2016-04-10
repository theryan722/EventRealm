<?php

include_once('dbinfo.php');

$event = $_GET['event']; 
$zone = $_GET['zone'];
$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 
if ($db_connection->connect_error) {
  echo "FALSE" . $db_connection->error;  
} 

$request = "DELETE FROM zones WHERE id = '" . $event . "' AND name = '" . $zone . "'";
if ($db_connection->query($request)){
	echo "TRUE";  
}else{
	echo "FALSE";
}
?>
