<?php
include ('0.conexion.php');
$usuario1 = $_POST['usuario1'];
$usuario2 = $_POST['usuario2'];

 
     $query = "DELETE FROM stocks WHERE '$usuario1' =nombre";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:121.mensaje.php");
      
  echo "SE BORRO EL REGISTRO";
?>

