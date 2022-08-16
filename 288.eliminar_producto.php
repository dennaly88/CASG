<?php

include ('0.conexion.php');

$id=$_GET['id'];


$query = "SELECT * FROM productos WHERE id='$id'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$numReg = pg_fetch_array($result);

$nom=$numReg['nombre'];
$mar=$numReg['marca'];
$cant=$numReg['cantidad'];
$alm=$numReg['almacen'];
$cod=$numReg['codigo'];
$gere=$numReg['gerencia'];


$fec=date('d-m-Y');
$usu='Prueba';
$tipo='Eliminacion';
$des='Prueba';


$query2 = "INSERT INTO movimiento(nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion) VALUES ('$nom','$mar','$cant','$fec','$alm','$cod','$tipo','$usu','$gere','$des');";
$result3 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
  

 
     $query3 = "DELETE FROM productos WHERE  id='$id'" ;
     $result1 = pg_query($query3) or die('Query failed: ' .pg_last_error());



header("Location: http:122.buscar.php");
      
  echo "SE BORRO EL REGISTRO"  ;

?>











