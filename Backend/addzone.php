<?php

include_once('dbinfo.php');

$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 

$id = $_GET['event'];
$name = $_GET['name'];
$radius = $_GET['radius'];
$lat = $_GET['latitude']; 
$long = $_GET['longitude']; 
$msg_txt = $_GET['msg_txt']; 
$msg_email = $_GET['msg_email']; 
$sound = $_GET['sound'];

if ($db_connection->connect_error) {
  echo "FALSE" . $db_connection->error;  
} 

$req = "SELECT * FROM zones WHERE name = '" . $name . "'"; 
if (mysqli_query($db_connection, $req)){
 echo "FALSE";
}else{
$request = "INSERT INTO zones (id, name, radius, latitude, longitude, msg_txt, msg_email, sound) VALUES ('" . $id . "','" . $name . "','" . $radius . "','" . $lat . "','" . $long . "','" . $msg_txt . "','" . $msg_email . "','" . $sound . "')"; 

  if ($db_connection->query($request)) {
      echo "TRUE"; 
    } else {
      echo "FALSE";
    }
}
  

mysqli_close($db_connection);
?>
