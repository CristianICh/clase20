<?php 

try {
    $conexion =new PDO("mysql:host=localhost;dbname=basephp",'root','');
    echo 'conexion ok<br>';
    return $conexion;


} catch (PDOException $e) {
    return false;
}



?>