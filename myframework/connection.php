<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$db_name = "login_db_sample";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$db_name))
{
die("couldn't connect ");
}
?>