<?php 

   // this page is passed unto the action part of the form and determine how the code runs.
    
    if(isset($_POST['submit'])) {

    $name =     $_POST['name']; 
    $email =    $_POST['email'];
    $status =   $_POST['status'];
    $password = $_POST['password'];
    $image = $_POST['image'];
 

   
    
    include "xdb.php";
    include "userclass.php";
    include "usercont.php";
    $signup = new usercont($name, $email, $status,  $password,  $image);

    $signup->signupuser();

    
    echo "<script>alert('registered successfully')</script>";
    }








































    
