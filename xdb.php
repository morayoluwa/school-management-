<?php 
   
class dbh {

   protected function connect() {

try {
   $host_name = "127.0.0.1:3307";
   $database = "school"; 
   $username = "root";          
   $password = "";          

   $dbh = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
   return $dbh;
   }
    catch (PDOException $e) {
     print "Error!: " . $e->getMessage() . "<br/>";
   die();
   }
}

}

