<?php
// call the class
 $user = new MyClass

 if($_SERVER['REQUEST_METHOD'] === 'POST')
{   // fetching the input from class
    $user_name =$_POST["name"];
    $user_email =$_POST["email"];
    $user_ID =$_POST["ID"];
    $user_CellNumber =$_POST["CellNumber"];

    // assigning the data into edit boxes
    $user->set_name("$user_name");
    $user->set_email("$user_email");
    $user->set_ID("$user_ID");
    $user->set_CellNumber("$user_CellNumber");
  
}
?>