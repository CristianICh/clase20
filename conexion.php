<?php

$conexion=new mysqli('localhost','root','','basephp');
if($conexion->connect_errno) {
    die('lo siento hubo un problema con el servidor');
}else
{
// echo 'conexion OK';
}
?>