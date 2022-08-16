<?php
include ('0.conexion.php');
extract($_GET);

 
     $query = "DELETE FROM almacenes WHERE  id='$id'";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:15.principalderegistraralmacen.php");
      
  echo "SE BORRO EL REGISTRO" ;
?>