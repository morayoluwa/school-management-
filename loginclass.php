<?php 


class login extends dbh {

   protected function getUser($name, $email, $status, $password) {
      $stmt = $this->connect()->prepare("SELECT * FROM user WHERE name= ? AND password = ?;");
      $stmt ->execute([$name, $email, $status, $password]);


    }
  }




  
    
     
  
   

