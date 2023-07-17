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

#12:00
#updating records
$sql = "UPDATE TechCodeInterns SET Surname ='KUBEKHA' WHERE learnerid=6006";

if ($conn->query($sql) === TRUE) {
  echo "Surname updated";
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
