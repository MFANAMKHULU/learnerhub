<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katdb";

# 17 july
# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
# Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

 echo "Today is " . date("Y/m/d") . "<br>";

$date=date_create("2013-07-17");
date_add($date,date_interval_create_from_date_string("12 days"));
echo "Your next payment will be in ";
echo date_format($date,"Y-m-d");

$conn->close(); 
?>