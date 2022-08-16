<!DOCTYPE html>
<html>
<head>
  <title>CASG</title>
</head>
<body>

<link rel="shortcut icon" href="img/de.ico">

  
<br><br><br><center><TABLE borde="5"></center>
  <table class="table active border-primary mb-3" style="max-width: 50rem;">
    <thead class="thead-dark">

  <tr class="bg-primary text-white">

  
    <h4>
      <td>Nombre</td>
      <td>Marca</td>
      <td>Cantidad</td>
      <td>Fecha</td>
      <td>Almacen</td>
  </h4>
  </tr>

<?php
include ('0.conexion.php');

$query = 'SELECT nombre,marca,cantidad,fecha,almacen FROM productos;';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
    
      <center><td><?php echo $mostrar['nombre'] ?></td><center>
      <center><td><?php echo $mostrar['marca'] ?></td><center>
      <center><td><?php echo $mostrar['cantidad'] ?></td><center>
      <center><td><?php echo $mostrar['fecha'] ?></td><center>
      <cente><td><?php echo $mostrar['almacen'] ?></td><center>
    </tr>
<?php 
    } 
 ?>
</TABLE>


</body>
</html>