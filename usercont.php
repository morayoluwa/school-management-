<?php 
session_start();


 class Usercont extends User  {
    
   protected $name;     
   protected $email;  
   protected $status;   
   protected $password;
   private $image; 
  
   
 
   public function __construct($name, $email, $status,  $password, $image ) {
   
    $this->name =$name;
    $this->email =$email;
    $this->status =$status;
    $this->password =$password;
    $this->image =$image;


   }

   public function signupuser() {
   if($this->emptyInput() == false) {
    
    $Message = "Please fill up the form";
    $_SESSION['user'] =$Message;
    header("location: user.php");
    exit();
   }
   
    if($this-> Invalidname() == false) {
      $Message = "Incorrect name";
       $_SESSION['user'] =$Message;
     header("location: user.php");
     exit();
    }

      if($this->Invalidemail() == false) {
       $Message = "Invalid email";
       $_SESSION['user'] =$Message;
       header("location: user.phpl");
       exit();
      }
      
    
    if($this->Incorrectstatus() == false) {
      $Message = "Status should be as student/lecturer";
      $_SESSION['user'] =$Message;
     header("location: user.php");
     exit();
    }

    // if($this->Invalidimage() == false) {
    //   $Message = "error uploading image";
    //   $_SESSION['user'] =$Message;
    //  header("location: user.php");
    //  exit();
    // }



    $this->setUser($this->name, $this->email, $this->status, $this->password, /*$this->image*/);

}

   private function emptyInput() {
    
       $result; 
      if(empty($this->name) || empty($this->email) || empty($this->status) || empty($this->password) ) {
        $result = false;

      }
      else {
        $result = true;
      }
      return $result;


   }

   private function Invalidname() {
    $result;
    if(!preg_match("/^[a-zA-Z ]*$/", $this->name)) {
  
     $result = false;
  
   }
   else {
     $result = true;
   }
   return $result;
  
  
  }

   private function Invalidemail() {
    $result;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

     $result = false;

   }
   else {
     $result = true;
   }
   return $result;


}

private function Incorrectstatus() {
  $result;

  if(!preg_match("/^[LlEeCcTtUuRrsSDdNn ]*$/", $this->status))  {

   $result = false;

 }
 else {
   $result = true;
 }
 return $result;


}

// private function InvalidImage() {
//   $result;
   
//             $img_loc  = $_FILES['image']['tmp_name'];
//             $img_name = $_FILES['image']['name'];
//             $imgerror = $_FILES['image']['error'];
//             $imgsize  =  $_FILES['image']['size'];

//             $img_ext = explode('.', $img_name);
//             $img_ext_check = strtolower(end($img_ext));
//             $valid_img_ext = array('png', 'jpg', 'jpeg');
            
//             if(in_array($img_ext_check, $valid_img_ext)) {
                
//               if ($imgerror === 0) { 

//                 if($imgsize < 1000000) { 
//                   $result = true;
//                 }
//                 else {
//                   $result = false;
//                 }
//      //for image size i.e mb size, that will be uploaded
                 
//                   $img_namenew = uniqid('', true).".". $img_ext_check;  //to prevent overwriting of images
                  
//                       $img_des = "uploadimage/" .$img_namenew;
//                        move_uploaded_file($img_loc,  $img_des); 
                     
              
//                 }
//               }
//             }

}




 
 