<?php
include ('0.conexion.php');
$usuario1 = $_POST['usuario1'];

 
     $query = "DELETE FROM almacenes WHERE nombre ='$usuario1'";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:35.mensajeeliminaralmacen.html");
      
  echo "SE BORRO EL REGISTRO";
?>