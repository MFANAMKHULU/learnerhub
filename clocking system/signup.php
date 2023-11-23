<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $IDNumber = $_POST["IDNumber"];
    $Address = $_POST["Address"];
    $cellnumber = $_POST["cellnumber"];
    $role = $_POST["role"];
    $job = $_POST["job"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    // Validate form data
    $errors = [];

    // Basic validation - Check if required fields are not empty
    if (empty($name) || empty($lastname) || empty($email) || empty($IDNumber) || empty($Address) || empty($password) || empty($password2)) {
        $errors[] = "All fields must be filled out";

?>