<?php

final class MyClass{
private $name;
private $email;
private $ID;
private $CellNumber;

function __construct(){}

public function setParam(stdClass $MyClass){

    if(array_key_exists('name', $MyClass)){
        $this->name = $MyClass->name;
    }

    if(array_key_exists('email', $MyClass)){
        $this->email = $MyClass->email;
    }

    if(array_key_exists('ID', $MyClass)){
        $this->ID = $MyClass->ID;
    }

    if(array_key_exist('CellNumber', $MyClass)){
        $this->CellNumber = $MyClass->CellNumber;
    }
  
}

public function register( array $MyClass)
{
    $errors = [];

    if(trim($MyClass['name'])){
        $this->name = $MyClass['name'];
    }
    else{
        $errors[] = new ValidatorError('name','name cannot be empty');
    }

    if(trim($MyClass['email'])){
        $this->email = $MyClass['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }

    if(trim($MyClass['ID'])){
        $this->ID = $MyClass['ID'];
    }
    else{
        $errors[] = new ValidatorError('ID','surname cannot be empty');
    }

    if(trim($MyClass['CellNumber'])){
        $this->CellNumber = $MyClass['CellNumber'];
    }
    else{
        $errors[] = new ValidatorError('CellNumber','placement cannot be empty');
    }
    
    return $errors;
}}
?>