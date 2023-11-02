<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$db_name = "login_db_sample";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
