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
 # today's date
 echo "Today is " . date("Y/m/d") . "<br>";

 # next payment
$date=date_create("2013-07-17");
date_add($date,date_interval_create_from_date_string("12 days"));
echo "Your next payment will be in ";
echo date_format($date,"Y-m-d") . "<br>";

# date difference
$date1=date_create("2023-07-17");
$date2=date_create("1999-06-11");
$diff=date_diff($date1,$date2);
echo  

$conn->close(); 
?>