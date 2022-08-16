<?php
session_start();

include ('0.conexion.php');
$_SESSION['usuario'];

$usuario1 =$_POST['usuario'];//nombre producto
$usuario2 =$_POST['usuario1'];//marca
$usuario3= $_POST['usuario2'];//cantidad no
$usuario4= $_POST['usuario3'];//fecha no
$usuario5= $_POST['usuario4'];//almacen no
$usuario6= $_POST['usuario5'];//codigo no
$usuario7= $_POST['usuario9'];//tipo

$usuario8= $_POST['usuario6'];//nombre
$usuario9= $_POST['usuario7'];//cantidad
$usuario10= $_POST['usuario8'];//fecha
$usuario19= $_POST['usuario19'];//tipo
$usuario18=$_SESSION['usuario'];//usuario

$query = "UPDATE stocks SET cantidad='$usuario9', fecha='$usuario10' , tipo='$usuario19', usuario='$usuario18' where  nombre='$usuario1' " ;
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());


$cmdtuples = pg_affected_rows($result);
$se = "SELECT *FROM producto "; 


$query1 = "INSERT INTO movimiento(nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario) VALUES ('$usuario8','$usuario2','$usuario9','$usuario10','$usuario5','$usuario6','$usuario19','$usuario18');";
$result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result1);

if(pg_num_rows($cmdtuples)>0){  
     
    header("Location:109.mensaja.php");
     
 
ECHO"".$usuario;
 }  
 else{
 	
 
header("Location:109.mensaje.php");
                                       
 }
?>

