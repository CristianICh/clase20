<?php
require 'conexion.php';


$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
print_r($_POST);
$sql = "INSERT INTO  productos VALUE (null,'$nombre','$precio')";
$conexion->query($sql);

header("location:index.php")
?>