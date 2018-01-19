<?php

$host = "localhost";
$db_name = "fourchonlng";
$username = "root";
$password = "";

try {
   $db= new PDO("mysql:host={$host};dbname={$db_name};",$username,$password) or die("Could not connect database");
}
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
