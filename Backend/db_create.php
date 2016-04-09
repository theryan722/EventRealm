<?php 

$servername = "localhost"; 
$db_username = "";			// Replace with username 
$db_password = "";			// Replace with password 


//	Create Connection 
$db_conn = new mysqli($servername, $db_username, $db_password); 

//	See if connection went through 
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); 
}

$db_table = "CREATE TABLE row1 (
	username VARCHAR(30) PRIMARY KEY NOT NULL, 
	password VARCHAR(30) NOT NULL,
	events   INT(6) UNSIGNED AUTO_INCREMENT)";

//	Test to see if table was made
if ($conn->query($db_table) === TRUE) {
	echo "Table db_table was created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}



?>
