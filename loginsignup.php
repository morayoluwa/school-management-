<?php

if(isset($_POST['submit'])) {

$name =     $_POST['name']; 
$password = $_POST['password'];


include "xdb.php";
include "loginclass.php";
include "logincont.php";
$loginup = new logincont($name,  $password);

 $loginup->loginuser();

}