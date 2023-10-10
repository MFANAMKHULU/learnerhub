<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['name'])) {
    header("Location: login.html");
    exit();
}
?>

<!-- Your dashboard content goes here -->
<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<a href="logout.php">Logout</a>
