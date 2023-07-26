<?php

final class MyClass{
    // Where we get input and process it
    // we control how data is represented here
    public function processinfo($data)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        #$ID = $_POST['ID'];
        #$ID = $_POST['CellNumber']

        $result = $this->processinfo($name,$email);
    }

};

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