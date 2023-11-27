<?php

// Database connection details
$dbhost = "localhost";
$dbuser = "root";
$db_password = "";

// Create a connection
$mysqli = new mysqli($dbhost, $dbuser, $db_password);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Create a new database
$databaseName = "e_logging_system"; 
$queryCreateDatabase = "CREATE DATABASE IF NOT EXISTS $databaseName";

if ($mysqli->query($queryCreateDatabase) === TRUE) {
    echo "Database '$databaseName' created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}

// Create employee table
$queryEmployee = "
CREATE TABLE IF NOT EXISTS employee (
    Staff_id INT PRIMARY KEY,
    emp_name VARCHAR(255) NOT NULL,
    emp_Lastname VARCHAR(255) NOT NULL,
    emp_id INT NOT NULL,
    emp_email VARCHAR(255) NOT NULL,
    emp_phone VARCHAR(20) NOT NULL,
    emp_jobtype VARCHAR(100) NOT NULL
);";

if ($mysqli->query($queryEmployee) === FALSE) {
    die("Error creating employee table: " . $mysqli->error);
}

// Create Manager table 
$queryManager = "
CREATE TABLE IF NOT EXISTS Manager (
    Manager_id INT PRIMARY KEY,
    manager_name VARCHAR(255) NOT NULL,
    manager_lastname VARCHAR(255) NOT NULL,
    manager_emp_id INT NOT NULL,
    manager_email VARCHAR(255) NOT NULL,
    manager_phone VARCHAR(20) NOT NULL,
    manager_jobtype VARCHAR(100) NOT NULL
);";

if ($mysqli->query($queryManager) === FALSE) {
    die("Error creating Manager table: " . $mysqli->error);
}

// Create LeaveBalance table
$queryLeaveBalance = "
CREATE TABLE IF NOT EXISTS LeaveBalance (
    Staff_id INT PRIMARY KEY,
    leavebalance INT,
    leavetype VARCHAR(100) NOT NULL
);";

if ($mysqli->query($queryLeaveBalance) === FALSE) {
    die("Error creating LeaveBalance table: " . $mysqli->error);
}

// Create SessionTime table
$querySessionTime = "
CREATE TABLE IF NOT EXISTS SessionTime (
    Session_id INT PRIMARY KEY AUTO_INCREMENT,
    Staff_id INT,
    starttime TIME,
    endtime TIME,
    workdate DATE
);";

if ($mysqli->query($querySessionTime) === FALSE) {
    die("Error creating SessionTime table: " . $mysqli->error);
}



// Close the connection
$mysqli->close();

?>
