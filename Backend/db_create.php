<?php 

$servername = "localhost"; 
$db_username = "";			// Replace with username 
$db_password = "";			// Replace with password 


//	Create Connection 
$db_conn = new mysqli($servername, $db_username, $db_password); 

//	See if connection went through 
if ($db_conn->connect_error) {
	die("Connection failed: " . $db_conn->connect_error); 
}

$db_table = "CREATE TABLE row1 (
	username VARCHAR(30) 	PRIMARY KEY NOT NULL, 
	password VARCHAR(30) 	NOT NULL,
	events   INT(6) 	 	UNSIGNED AUTO_INCREMENT)";

//	Test to see if table was made
if ($db_conn->query($db_table) === TRUE) {
	echo "Table db_table was created successfully";
} else {
	echo "Error creating table: " . $db_conn->error;
}

$db_events_table = "CREATE TABLE row2 (
	id 	 INT(6) 		UNSIGNED PRIMARY KEY,
	code INT(6) 		UNSIGNED,
	name VARCHAR(30)    NOT NULL,
	zone VARCHAR(30)    NOT NULL)";

if ($db_conn->query($db_events_table) === TRUE) {
	echo "Table db_events_table was created successfully"; 
} else {
	echo "Error creating table: " . $db_conn->error;
}

$db_zone_table = "CREATE TABLE row3 (
	id 		INT(6)			UNSIGNED PRIMARY KEY,
	msg 	VARCHAR(30)		NOT NULL
	lat 	DOUBLE(6,2), 
	long 	DOUBLE(6,2),
	radius 	DOUBLE(6,2))";

if ($db_conn->query($db_zone_table) === TRUE) {
	echo "Table db_zone_table was created successfully"; 
} else {
	echo "Error creating table: " . $db_conn->error;
}



?>
