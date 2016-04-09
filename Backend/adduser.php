<?php
/* $server_name;
$db_username;
$db_password;
$db_name; */
  
include_once('dbinfo.php');

$tuser = $_GET['username'];
$tpass = $_GET['password'];

$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 

if ($db_connection->connect_error) {
  echo "FALSE" . $db_connection->error;  
} 

$request = mysqli_($db_connection, "SELECT * FROM users WHERE username = '" . $tuser . "'"); 

if (mysqli_($request) > 0) {
  echo "FALSE";
} else {
  $add_user = "INSERT INTO users (username, password) VALUES (" . "'" . $tuser . "'" . "," . "'" . $tpass . "'" . ")";
  if ($db_connection->$add_user === TRUE) {
    echo "TRUE";
  } else {
    echo "FALSE"; 
  }
}
