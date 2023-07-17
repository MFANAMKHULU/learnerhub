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

# 14 July

#09:00
# Select *
$sql = "SELECT learnerid, internName, Surname, empNum FROM TechCodeInternLearners ";
$result = $conn->query($sql);
/*
#10:00
#Select ORDER BY clause
$sql = "SELECT learnerid, internName, Surname FROM TechCodeInternLearners ORDER BY Desc internName";
$result = $conn->query($sql);
*/
#11:00
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> learner id: ". $row["learnerid"]. " - Name: ". $row["internName"]. " " . $row["Surname"] . " Number: ".$row["empNum"]. "<br>";
        
    }
  
  } else {
    echo "0 results";
  }

$conn->close(); 
?>