 <?php
  
	include_once('dbinfo.php');

	$tuser = $_GET['username'];
	$tpass = $_GET['password'];
  
	$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name); 

  if ($db_connection->connect_error) {
    echo "FALSE" . $db_connection->error;  
  } 

  $query = "SELECT username from users where username='" . $tuser . "'";
  $result = mysql_query($query);

  if(mysql_num_rows($result) > 0)	{
    $check_password = "SELECT password from users where username='" . $tuser . "'";
    if ($db_connection->query($check_password)) {
      echo "TRUE"; 
    } else {
      echo "FALSE";
    }
  } else{
   		echo "FALSE"; 
  }
  
  ?>
