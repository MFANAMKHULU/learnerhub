<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katdb"; 

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
# Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

# 18 july 10:00
# create table
$sql = "CREATE TABLE Students (
    Studentnum INT(6) PRIMARY KEY,   
    StudentName VARCHAR(60) NOT NULL,
    Surname VARCHAR(60) NOT NULL,
    StudentID INT(13) NOT NULL,
    Initials VARCHAR(5) NOT NULL,
    Test1 INT (3),
    Test1 INT (3),
    FinalMark INT (3),

   )";
   
   if ($conn->query($sql) === TRUE) {
     echo " Student Table created successfully";
   } else {
     echo "Error creating table: " . $conn->error;
   }

$conn->close();
?>