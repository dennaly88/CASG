<link rel="shortcut icon" href="img/de.ico">


<?php
include ('0.conexion.php');
$usuario1 =$_POST['usuario'];
$usuario2 =$_POST['usuario1'];
$usuario3= $_POST['usuario2'];
$usuario4= $_POST['usuario3'];


$query = "UPDATE productos SET nombre='$usuario3', cantidad='$usuario4' where  nombre='$usuario1' ";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);


if(pg_num_rows($cmdtuples)>0){  
     
    header("Location:89.modificar.php");
     
 
ECHO"".$usuario;
 }  
 else{
 	
 
header("Location:89.modificar.php");
                                   
     
 }






?>