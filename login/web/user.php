<?php
  //calling view template 
  $view = ['signup','login'];

  # choosing based on action chosen
  $action = Helper::getUrlParam('view');

if(! (array_key_exists('view',$_GET) && in_array($action, $view)))
{
    throw  new NotFoundException("View not found");  
}

$errors = [];
    if(array_key_exists('signup', $_POST))
    {
        #calling variables from classes
        $data = ['name' => isset($_POST['user']['name'])?$_POST['user']['name'] :'',
            'email' => isset($_POST['user']['email'])?$_POST['user']['email'] :'',
            'ID' => isset($_POST['user']['ID'])?$_POST['user']['ID'] :'',
            'password' => isset($_POST['user']['password'])?$_POST['user']['password'] :'',
            'passwordConfirm' => isset($_POST['user']['passwordRepeat'])?$_POST['user']['passwordRepeat'] :''];

            $obj = new User();  
            $errors = $obj->signup($data);
    }  