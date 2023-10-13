<?php
 require 'conexionPDO.php';

 $sql = "SELECT  * FROM  productos ";
 $resultados = $conexion->query($sql);

 foreach($resultados as $producto){
    if($producto['id'] %2 !=0 ){
        $id=$producto['id'];
        $sql="DELETE  FROM productos WHERE id='$id'";
        $conexion->query($sql);
    }
 }

 header("location:index.php")


?>