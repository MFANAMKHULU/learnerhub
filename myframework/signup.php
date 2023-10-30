<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && is_numeric($user_name))
    {
         // save to database

         $user_id = random_num(20);
         $query = "insert into users(user_id,user_name,password) values ($user_id, $user_name,$password)";
         mysqli_query($query);

         header("Location: login.php");
         die;

    }
    else
    {
        echo "Enter some valid information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>signup</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


    <div id = "box">
        
       <form method = "post">
        <div style = "font-size: 20px; margin:10px; color = white;">signup</div>
       <input id ="text" type = "text" name="user_name" placeholder="Username" required><br><br>
        <input id ="text" type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">signup</button><br><br>

            <a href = "https://localhost/learnerhub/myframework/login"> Click to login </a><br><br>
      </form>
       
    </div>
</body>
<html>
