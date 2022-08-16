
<link rel="shortcut icon" href="img/de.ico">

<?php 
  session_start();
  $resultado = $_SESSION['almacen'];
?>



<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <title>CASG</title>

                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script type="text/javascript"src="js/bootstrap.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/estilos.css">        
                  
            
                </head>

    <body style="background-color: silver;">
    <?php require ("5.menuprincipal.php");?>  
   
  <?php require ("70.busquedaalmacen.php");?>



<div class="card border-primary mb-3" style="max-width: 80rem;">

  <center><table class="table primary border-secondary mb-3" style="max-width: 80rem;">
    
  
    
    

  <tr class="bg-primary text-white">
  
    <h4>
      <td>Nombre</td>
      <td>Marca</td>
      <td>Cantidad</td>
      <td>Fecha</td>
      <td>Almacen</td>
      <td>Tipo</td>
      <td>Serial</td>
      <td>Usuario</td>
  </h4>
  </tr>

<?php
session_start();
include ('0.conexion.php');


$query = "SELECT nombre,marca,cantidad,fecha,almacen,tipo,codigo,usuario FROM productos where '$resultado'= almacen;";

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
    
      <center><td><?php echo $mostrar['nombre'] ?></td><center>
      <center><td><?php echo $mostrar['marca'] ?></td><center>
      <center><td><?php echo $mostrar['cantidad'] ?></td><center>
      <center><td><?php echo $mostrar['fecha'] ?></td><center>
      <cente><td><?php echo $mostrar['almacen'] ?></td><center>
      <cente><td><?php echo $mostrar['tipo'] ?></td><center>
      <cente><td><?php echo $mostrar['codigo'] ?></td><center>
      <cente><td><?php echo $mostrar['usuario'] ?></td><center>
    </tr>
<?php 
    } 
 ?>
</TABLE><br><br><br><br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>            
    </body>

</html>
