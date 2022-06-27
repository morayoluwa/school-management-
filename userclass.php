<?php 


class User extends dbh {

   protected function setUser($name, $email, $status, $password) {
      $stmt = $this->connect()->prepare('INSERT INTO user (name, email, status, password) VALUES (?, ?, ?, ?);');

      $hashedPwd = password_hash($password, PASSWORD_BCRYPT);

      $stmt->execute([$name, $email, $status,   $hashedPwd]); 
  
  }
  }
 
     
   
  //  protected function checkuser($name, $email) {
  //       $stmt = $this->connect()->prepare('SELECT name FROM user WHERE name=? or email = ?;');

  //       if( !$stmt->execute(array($name, $email))) {
  //         $stmt = null;
  //         header("location: user.php");
  //         exit();
  //       }

  //       $resultcheck;
  //       if ( $stmt->rowCount() > 0) {
  //        $resultcheck = false;
  //     }
  //     else {
  //        $resultcheck = true;
  //     }

  //     return $resultcheck;
  //    }

