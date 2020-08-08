<?php
//use PDO;
//use PDOException;

          $host = 'localhost';
          $user = 'root';
          $password = '';
          $dbname = 'banque_peupleorm';
          $options = array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
          $dsn = "mysql:host=$host;dbname=$dbname";
          try{
               $db = new PDO($dsn, $user, $password, $options);

          }catch (PDOException $exe){
               die('erreur :'.$exe->getMessage());
          }



  
     // if(exec($sql))
     // {
     //     echo "données insérées";
     // }
     // else{
     //     echo "données non insérées";
     // }

?>