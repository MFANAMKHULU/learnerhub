<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (add your validation logic here)

    // If valid credentials, set session and redirect to dashboard
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit();
} else {
    header('Location: index.php'); // Redirect if not submitted through form
}
