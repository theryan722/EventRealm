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

if (mysqli_query($query) > 0) {
	echo "TRUE";
} else {
	echo "FALSE";
}

?>
