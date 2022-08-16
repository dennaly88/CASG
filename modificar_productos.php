<?php
include ('0.conexion.php');
$serial=$_POST['serial'];
$marca=$_POST['marca'];
$almacen=$_POST['almacen'];
$cantidad=$_POST['cantidad'];


$producto=$_POST['producto'];


 
     $query = "UPDATE stocks SET  nombre ='$producto', marca='$marca', almacen='$almacen' , cantidad='$cantidad' WHERE codigo='$serial'";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:121.mensaje.php");
      
  echo "SE BORRO EL REGISTRO";
?>
