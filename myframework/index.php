<?php
  session_start();

  //$_SESSION // it's a global variable it can be accessed by any page

include("connection.php");
include("function.php");

$user_data = check_login($con)  // for checking if user exists
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>This is a practise site</title>
</head>

<body>
<a href = "https://localhost/learnerhub/logout.php"> logout </a>
<h1> This is the index page </h1>

<br>

Hello username.
</body>
</html>