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

# testing if you can knock off
$t = date("H");

if ($t < "15") {
  echo " Keep on working" . "<br>";
} else {
  echo " You may knock off". "<br>";
}
# testing if you can go to lunch
$t = date("H");

if ($t < "12") {
  echo " You make go to lunch"."<br>";
} else {
  echo "It's not yet your lunch"."<br>";
}



$conn->close(); 
?>