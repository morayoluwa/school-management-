<?php 

 class logincont extends login  {
    
   private $name;       
   private $password; 

   
 
   public function __construct($name, $password ) {
   
    $this->name = $name;
    $this->password = $password;
   

   }

   public function loginuser() {
   if($this->emptyInput() == false) {
    header("location: login.php?error=emptyinput");
    exit();
   }

   $this->loginUser($this->name, $this->password);

}

   private function emptyInput() {
       $result;
      if(empty($this->name) || empty($this->password))  {
        $result = false;

      }
      else {
        $result = true;
      }
      return $result;

 }
 }



