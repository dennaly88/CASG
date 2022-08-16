<?php
include ('0.conexion.php');
$id = $_GET['id'];

 
     $query = "DELETE FROM usuarios WHERE id ='$id'";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:24.principalparacrearusuario.php");
      
  echo "SE BORRO EL REGISTRO";
?>