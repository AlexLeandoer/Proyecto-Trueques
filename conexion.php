<?php
    $host = "localhost";
    $db = "trueques";
    $user = "root";
    $password = "";
    $charset = "utf8";
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try{
        $conexion = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        $e->getMessage();
    }
?>