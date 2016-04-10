<?php

function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else if ($unit == "F") {
       return ($miles * 5280);
     }else{
        return $miles;
      }
}

include_once('dbinfo.php');
$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name);

$lat = $_GET['latitude'];
$long = $_GET['longitude'];

if ($db_connection->connect_error){
echo "FALSE" . $db_connection->error;
}

$result = mysql_query("SELECT id, name, radius, latitude, longitude, msg_txt FROM zones WHERE name='bitcamp16'");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
if (distance($lat, $long, $row["latitude"], $row["longitude"], "F") <= $row["radius"]
    echo $row["msg_txt"];
    break;
}

?>
