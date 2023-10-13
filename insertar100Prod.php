


<?php 
require ("conexion.php");

$nombre="producto";
$precio=100;
$i=1;

// $sql = "INSERT INTO  productos VALUE (null,'$nombre.$i','$precio+$i')";
// $conexion->query($sql);

// 
$sum=0;
$producto="";
for ($i=0; $i <100 ; $i++) { 
    $sum=$precio+$i;
    $producto=$nombre.$i;

    $sql = "INSERT INTO  productos VALUE (null,'$producto','$sum')";
$conexion->query($sql);
}
header("location:index.php")

?>