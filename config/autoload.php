<?php

class autoloader {
    static function register()
{
        spl_autoload_register(array(__CLASS__, "autoload"));
}
    static function autoload($class)
 {
       // echo str_replace("//", "\",$class);
       if(file_exists("../model/".$class.".php"))
         {
          require_once "../model/".$class.".php";
         }
        else if(file_exists("../controller/".$class.".php"))
         {
          require_once "../controller/".$class.".php";
         }

     //namespace
        else if(file_exists(str_replace("\\","/",$class.".php")))
          {
            require_once str_replace("\\","/",$class.".php");
          }
        else{
        die("merci d'utiliser le mot cle use");
            }
        
autoloader::register();
}
}
 ?>