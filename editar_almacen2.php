<?php
include ('0.conexion.php');

$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$id=$_POST['id'];


 
     $query = "UPDATE almacenes SET  nombre ='$nombre', ubicacion='$ubicacion' WHERE id='$id'";
     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:15.principalderegistraralmacen.php");
      
  echo "SE BORRO EL Registro";
  ?>