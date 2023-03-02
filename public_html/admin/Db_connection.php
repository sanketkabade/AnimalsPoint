<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName="animals_point";

// Create connection
//$conn = \mysqli_connect($servername, $username, $password,$dbName);
$con =  mysqli_connect($serverName, $userName, $password, $dbName);
// Check connection
//if (mysqli_connect_error()) {
//  echo "Connected faild";
//  exit();
//}
//echo "Connected succ";
?>
