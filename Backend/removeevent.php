<?php
  
include_once('dbinfo.php');
$event = $_GET['event'];
$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name);
if ($db_connection->connect_error){
	echo "FALSE";
}
$request = "DELETE FROM events WHERE id = '" . $event . "'";
$request2 = "DELETE FROM zones WHERE id = '" . $event . "'";
if ($db_connection->query($request)){
  if ($db_connection->query($request2)){
   echo "TRUE";
  }else{
    echo "FALSE";
  }
}else{
 echo "FALSE"; 
}
mysqli_close($db_connection);
?>
