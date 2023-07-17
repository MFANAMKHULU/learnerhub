<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katdb";

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);# Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('1001','Katleho', 'Mofokeng', '0735725485')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('2002','Teddy', 'Charmaine', '0637993375')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('3003','Bongi', 'Shabalala', '0825947973')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('4004','Banele', 'Nyoni', '0815475685')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('5005','Lorraine', 'Montle', '0712253670')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('6006','Angela', 'Yolanda', '0787756624')";

$sql = "INSERT INTO TechCodeInterns (learnerid,internName, Surname, empNum)
VALUES ('7007','Melusi', 'Shaku', '0635208844')";

if ($conn->multi_query($sql) === TRUE) {
    echo " new Data successfully inserted";
  } else {
    echo "No Data inserted: " . $conn->error;
  }


$conn->close(); 
?>