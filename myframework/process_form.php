<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organizerdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone =$_Post['phone']
//$role = $_POST['role'];


// checking if all info is entered 
if (empty($name) ||empty($lastname) || empty($email) || empty($password) || empty($cellnumber) ) {
    die("All fields are required.");
}

   //checking if email format is correct
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if ( 'attendee') {
    $sql = "INSERT INTO attendees (first_name, last_name, email, phone, password ) VALUES ('$first_name', '$last_name', '$email', '$phone' '$password')";
} elseif ( 'organizer') {
    $sql =
    $sql = "INSERT INTO organizer (organizer_name, organizer_surname, email, phone, password ) VALUES ('$first_name', '$last_name', '$email', '$phone' '$password')";
}

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
