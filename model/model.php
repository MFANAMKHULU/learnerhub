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

    /**
     * Get value of the URL param.
     * @return string parameter value
     * @throws NotFoundException if the param is not found in the URL
     */
    public static function getUrlParam($name) {
        if (!array_key_exists($name, $_GET)) {
            throw new NotFoundException('URL parameter "' . $name . '" not found.');
        }
        return $_GET[$name];
    }

    /**
     * Redirect to the given page.
     * @param type $page target page
     * @param array $params page parameters
     */
    public static function redirect($page, array $params = []) {
        header('Location: ' . self::createLink($page, $params));
        die();
    }

    /**
     * Generate link.
     * @param string $page target page
     * @param array $params page parameters
     * @return 
     */
    public static function createLink($page, array $params = []) {
        unset($params['page']);
        return (empty($params))?$page :$page.'&'.http_build_query($params);
    }

    /**
     * Capitalize the first letter of the given string
     * @param string $string string to be capitalized
     * @return string capitalized string
     */
    public static function capitalize($string) {
        return ucfirst(mb_strtolower($string));
    }

    /**
     * Escape the given string
     * @param string $string string to be escaped
     * @return string escaped string
     */
    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES);
    }
};

final class User{

    private $name;
    private $email;
    private $ID;
    private $CellNumber;
    

    function __construct(){

    }

    public function setParam(stdClass $user){


        if(array_key_exists('name', $user)){
            $this->name = $user->name;
        }

        if(array_key_exists('email', $user)){
            $this->email = $user->email;
        }

        if(array_key_exists('ID', $user)){
            $this->ID = $user->ID;
        }

        if(array_key_exists('CellNumber', $user)){
            $this->CellNumber = $user->CellNumber;
        }
    }


};

final class ValidatorError {

    private $source;
    private $message;

    /**
     * Create new validation error.
     * @param mixed $source source of the error
     * @param string $message error message
     */
    function __construct($source, $message) {
        $this->source = $source;
        $this->message = $message;
    }

    /**
     * Get source of the error.
     * @return mixed source of the error
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Get error message.
     * @return string error message
     */
    public function getMessage() {
        return $this->message;
    }
};
?>