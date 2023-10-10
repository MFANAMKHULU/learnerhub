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
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$cellnumber = $_POST['cellnumber'];
$password = $_POST['password'];

// Perform data validation here (e.g., checking if fields are not empty)
// ...

if (empty($name) ||empty($lastname) || empty($email) || empty($password) || empty($cellnumber) ) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Password validation logic goes here...


// Insert data into the database
$sql = "INSERT INTO attendee (first_name, last_name, email, phone, password) VALUES ('$name', '$lastname', '$email', '$cellnumber', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
