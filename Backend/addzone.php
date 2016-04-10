<?php
  
  $db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 
	
  $id = $_GET['id']; 
	$lat = $_GET['latitude']; 
	$long = $_GET['longitude']; 
	$msg_txt = $_GET['msg_txt']; 
	$msg_email = $_GET['msg_email']; 
	$sound = $_GET['sound']; 
  
  if ($db_connection->connect_error) {
    echo "FALSE" . $db_connection->error;  
  } 

  $request = "INSERT INTO zone (id, latitude, longitude, msg_txt, msg_email, sound) 
  						VALUES (" . "'" . $id . "'," . "'" . $lat "'," . "'" . $long . "'," . "'" . $msg_txt . "'," 
    									. "'" $msg_email "'," . "'" . $sound . "'" . ")"; 

  if ($db_connection->query($request)) {
    echo "TRUE"; 
  } else {
    echo "FALSE";
  }

  mysqli_close($db_connection);
  ?>
