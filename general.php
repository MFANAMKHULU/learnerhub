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
# while loop
$x = 2;

/*while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}
"<br>";
# do_while
$x = 2;*/

/*do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 8);*/


# forloop
/*for ($x = 6; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
*/

# break statements
for ($x = 1; $x < 10; $x++) {
    if ($x == 7) {
      break;
    }
    echo "The number is: $x <br>";
  }

$conn->close(); 
?>