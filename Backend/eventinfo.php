<?php
include_once('dbinfo.php');

$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name);

if ($db_connection->connect_error) {
	echo "FALSE"; 
} 
$event = $_GET['event']; 
$query = "SELECT * FROM events WHERE code='" . $event . "'";
$result = mysqli_query($db_connection, $query);
if ($db_connection->query($query)) {
	$value = mysqli_fetch_object($result); 
	$event_info = $value->eventinfo;
	echo $event_info;
} else {
	echo "FALSE";
}
mysqli_close($db_connection);
?>
