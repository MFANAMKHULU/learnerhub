<?php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "electronic_Logging";

// Create a connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
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

// Create Admin table
$queryAdmin = "
CREATE TABLE IF NOT EXISTS Admin (
    Staff_id INT PRIMARY KEY,
    emp_name VARCHAR(255) NOT NULL,
    emp_Lastname VARCHAR(255) NOT NULL,
    emp_id INT NOT NULL,
    emp_email VARCHAR(255) NOT NULL,
    emp_phone VARCHAR(20) NOT NULL,
    emp_jobtype VARCHAR(100) NOT NULL
);";

if ($mysqli->query($queryAdmin) === FALSE) {
    die("Error creating Admin table: " . $mysqli->error);
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

// Create LogTime table
$queryLogTime = "
CREATE TABLE IF NOT EXISTS LogTime (
    logid INT PRIMARY KEY AUTO_INCREMENT,
    Session_id INT,
    Actiondone VARCHAR(255) NOT NULL,
    endtime TIME,
    workdate DATE
);";

if ($mysqli->query($queryLogTime) === FALSE) {
    die("Error creating LogTime table: " . $mysqli->error);
}

// Adding foreign keys 
$queryAddForeignKeySessionTime = "
ALTER TABLE SessionTime
ADD FOREIGN KEY (Staff_id) REFERENCES employee(Staff_id);";

if ($mysqli->query($queryAddForeignKeySessionTime) === FALSE) {
    die("Error adding foreign key to SessionTime: " . $mysqli->error);
}

$queryAddForeignKeyLogTime = "
ALTER TABLE LogTime
ADD FOREIGN KEY (Session_id) REFERENCES SessionTime(Session_id);";

if ($mysqli->query($queryAddForeignKeyLogTime) === FALSE) {
    die("Error adding foreign key to LogTime: " . $mysqli->error);
}

// Indexes for searching for employees based on staffid or emails
$queryIndexEmployeeStaffId = "
CREATE INDEX idx_employee_Staff_id ON employee (Staff_id);";

if ($mysqli->query($queryIndexEmployeeStaffId) === FALSE) {
    die("Error creating index on employee Staff_id: " . $mysqli->error);
}

$queryIndexEmployeeEmail = "
CREATE INDEX idx_employee_emp_email ON employee (emp_email);";

if ($mysqli->query($queryIndexEmployeeEmail) === FALSE) {
    die("Error creating index on employee emp_email: " . $mysqli->error);
}

$queryIndexSessionTimeSessionId = "
CREATE INDEX idx_SessionTime_Session_id ON SessionTime (Session_id);";

if ($mysqli->query($queryIndexSessionTimeSessionId) === FALSE) {
    die("Error creating index on SessionTime Session_id: " . $mysqli->error);
}

$queryIndexLogTimeLogId = "
CREATE INDEX idx_LogTime_logid ON LogTime (logid);";

if ($mysqli->query($queryIndexLogTimeLogId) === FALSE) {
    die("Error creating index on LogTime logid: " . $mysqli->error);
}

// Close the connection
$mysqli->close();

?>
