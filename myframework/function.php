<?php

function check_login($con)
{

    if(isset($_SESSION['user_id'])) // checking if user has logged in       
    {
        $id = $_SESSION['user_id'];
        $query  = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1"; // selecting
        
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0) 
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // to redirect to login
    header("location: login.php");
    die;
}

function random_num($length)
{

    $text = "";
    if($length < 5 )
    {
       $length = 5;
    }

    for ($i = 0; $i < $length; $i++)
    {
        $text .= rand(0,9);
    }

    return $text;
}
?>
