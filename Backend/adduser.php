<?php 
  
include_once('dbinfo.php');
$tuser = $_GET['username'];
$tname = $_GET['eventname'];
$tcode = $_GET['eventcode'];
$tinfo = $_GET['eventinfo'];

$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 

if ($db_connection->connect_error) {
  echo "FALSE" . $db_connection->error;  
} 

$request = "INSERT INTO events (id, name, code, eventinfo) VALUES (" . "'" . $tuser . "','" . $tname . "'" . "," . "'" . $tcode . "'" . "," . "'" . $tinfo . "'" . ")";

if ($db_connection->query($request)) {
  echo "TRUE"; 
} else {
  echo "FALSE";
}
mysqli_close($db_connection);
?>
