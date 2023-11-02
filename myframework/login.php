<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = mysqli_real_escape_string($connection, $_POST['user_name']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if(!empty($user_name) && !empty($password) && is_numeric($user_name))
    {
        $query = "SELECT * FROM users WHERE user_name = '$user_name'";
        $result = mysqli_query($connection, $query);

        if($result && mysqli_num_rows($result) > 0) 
        {
            $user_data = mysqli_fetch_assoc($result);
            $hashed_password = $user_data['password'];

            if(password_verify($password, $hashed_password)) 
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: dashboard.php"); // Redirect to dashboard or wherever you want to go after successful login
                die;
            }
            else
            {
                echo "Invalid username or password";
            }
        }
        else
        {
            echo "Invalid username or password";
        }
    }
    else
    {
        echo "Enter some valid information";
    }
}
?>
