<link rel="shortcut icon" href="img/de.ico">


<?php
include ('0.conexion.php');
$usuario1 =$_POST['usuario'];
$usuario2 =$_POST['usuario1'];
$usuario3= $_POST['usuario2'];
$usuario4= $_POST['usuario3'];


$query = "UPDATE usuarios SET usuario='$usuario3' , pass='$usuario4' where  usuario='$usuario1' ";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);


if(pg_num_rows($cmdtuples)>0){  
     $_SESSION['usuario']=$usuario;
    header("Location:84.mensaje.php");
     
 
ECHO"".$usuario;
 }  
 else{
 	
 
header("Location:84.mensaje.php");
                                   
     
 }






?>


 
     
    
     
 




 
