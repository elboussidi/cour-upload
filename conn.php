<?php

$host="localhost";
$user="majid";
$password="CHICHAOUA";
$db="ofppt";

try {
    
 

$conn= new PDO("mysql:host=$host;dbname=$db", $user  ,$password);
        //echo '<script>alert("connected"); </script>';     
 }       
        
 catch (Exception $ex) {
     echo $ex->getMessage();;
     
  } 