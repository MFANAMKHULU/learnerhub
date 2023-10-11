<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection already established
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    // Add your code to validate the username and password
    // and check against the database
    if ($username == "name" && $password == "password") {
        $_SESSION['name'] = $username; // Store username in session
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!-- Display any error messages, if applicable -->