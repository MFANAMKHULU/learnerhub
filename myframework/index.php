<?php
include 'config/config.php';
include 'includes/validation.php';

// Connect to database (optional)
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $nameError = DataValidator::validateName($name);
    $emailError = DataValidator::validateEmail($email);

    if ($nameError === null && $emailError === null) {
        // Data is valid, you can proceed with inserting into the database
        if (isset($conn)) {
            $sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";
            $conn->query($sql);
        }

        echo 'Data inserted successfully!';
    } else {
        // Handle validation errors
        include 'templates/form_template.php';
        echo '<div style="color: red;">';
        if ($nameError !== null) {
            echo $nameError . '<br>';
        }
        if ($emailError !== null) {
            echo $emailError . '<br>';
        }
        echo '</div>';
    }
} else {
    include 'templates/form_template.php';
}
?>