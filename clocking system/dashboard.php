<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Display clock-in/out options
echo "<h2>Welcome, {$_SESSION['username']}!</h2>";
echo "<button onclick='clockIn()'>Clock In</button>";
echo "<button onclick='clockOut()'>Clock Out</button>";

// Add JavaScript to handle clock-in/out actions
echo "<script src='js/script.js'></script>";


//code
