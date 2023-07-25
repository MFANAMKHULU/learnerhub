<?php

final class MyClass{
 // variables   
private $name;
private $email;
private $ID;
private $CellNumber;

function __construct(){}
// Accept input from editboxes and set the variables
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
// validate that you have filled in all boxes
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
        $errors[] = new ValidatorError('ID','ID cannot be empty');
    }

    if(trim($MyClass['CellNumber'])){
        $this->CellNumber = $MyClass['CellNumber'];
    }
    else{
        $errors[] = new ValidatorError('CellNumber','placement cannot be empty');
    }
    
    return $errors;
}}


final class Helper{ 	
  // Don't touch anything here
    public static function getUrlParam($name) {
        if (!array_key_exists($name, $_GET)) {
            throw new NotFoundException('URL parameter "' . $name . '" not found.');
        }
        return $_GET[$name];
    }

    public static function redirect($page, array $params = []) {
        header('Location: ' . self::createLink($page, $params));
        die();
    }

    public static function createLink($page, array $params = []) {
        unset($params['page']);
        return (empty($params))?$page :$page.'&'.http_build_query($params);
    }

    public static function capitalize($string) {
        return ucfirst(mb_strtolower($string));
    }

    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES);
    }
};

?>