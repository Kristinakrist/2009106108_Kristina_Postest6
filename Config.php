<?php
$server = "localhost"; 
$username = "root";
$password = ""; 
$db_name = "postest 6"; 


$db = new mysqli($server, $username, $password, $db_name);

if(!$db){ 
    die("Database connection failed");
}

?>