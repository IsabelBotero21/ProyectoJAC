<?php

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'jac');

try{
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    $con="Conectado";
}catch(PDOException $e){
    exit("Error: ". $e->getMessage());
    $con="No conectado";
}

   
?>