<?php

require 'conexion.php';
$sql = "SELECT  * FROM  productos ";
$resultados = $conexion->query($sql);

// print_r($resultados);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>




<form action="insertarProd.php" method="post" style=" padding: 1.3vw; width: 17vw; border:4px solid #000; position:relative; left:35%;">

  <div class="mb-2">
    <label >Nombre</label>
    <input type="text"  name="nombre"   >
  </div>
  <div class="mb-2">
    <label  >Precio</label>
    <input type="text" name="precio" c  >
  </div>

  <button type="submit" class="btn btn-primary">Insertar</button>
</form>
<div class="tabla">

</div>

</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>

    </tr>
  </thead>
  <tbody>

  <?php foreach ($resultados as $producto) {
    // print_r($producto);

    echo
        "<tr>
        <th scope='row'>" . $producto['id'] . "</th>
        <td>" . $producto['nombre'] . "</td>
        <td>" . $producto['precio'] . "</td>
        </tr>";
}
?>
    <!-- <tr>
      <th scope="row">1</th>
      <td><</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr> -->


  </tbody>
</table>

<a  class="btn btn-danger " href="eliminarimpares.php">Eliminar Impares</a>
<a  class="btn btn-success " href="insertar100Prod.php">Insertar 100 Productos</a>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>