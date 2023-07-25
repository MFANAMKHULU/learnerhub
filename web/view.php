<!DOCTYPE html>
<html>
<head>
    <title> Result</title>
</head>
<body>
    <h2> Result</h2>
    <?php

    // calling functions and classes
     require_once 'model/model.php';
     setParam();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $ID = $_POST['ID'];
        $CellNumber = $_POST['CellNumber'];

        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>ID number: $ID</p>";
        echo "<p>Cell number: $CellNumber</p>";
    
    } else {
        echo "<p>No data submitted.</p>";
    }

    ?>
</body>
</html>