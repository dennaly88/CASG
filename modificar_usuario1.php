<?php
include ('0.conexion.php');



$id=$_POST['id'];
$pass=$_POST['edit_pass'];
$usu=$_POST['edit_usu'];
$nom=$_POST['edit_nom'];
$tipo=$_POST['edit_tipo'];
$ape=$_POST['edit_ape'];
$cor=$_POST['edit_cor'];
$ced=$_POST['edit_ced'];





 
     $query = "UPDATE usuarios SET  usuario ='$usu', pass='$pass',tipo='$tipo', nombre='$nom', apellido='$ape' , correo= '$cor',cedula='$ced'  WHERE id='$id'";
     
     //'SELECT usuario,pass FROM usuario;';borra toda la informacion
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:24.principalparacrearusuario.php");
      
  echo "SE BORRO EL REGISTRO";
?>









