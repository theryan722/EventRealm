<?php

$server_name = "localhost"; 
$db_username = ""; 
$db_password = ""; 


//	Create Connection
$db_connect = new mysqli($server_name, $db_username, $db_password);

// 	Check Connection
if ($db_connect->connect_error) {
	echo "There was an error opening the database: " . $db_connect->error; 
} 

echo "Connected successfully"; 

$event = $_GET['event']; 

$query = mysqli_query($db_connect, "SELECT * FROM event WHERE code='".$event"'");
$result = mysqli_query($query);

if ($result > 0) {
	$value = mysqli_fetch_object($result); 
	$event_info = $value->eventinfo;
	echo $event_info;
} else {
	echo "FALSE";
}


?>
