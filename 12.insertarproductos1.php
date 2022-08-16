<?php
session_start(); 
$_SESSION['usuario'];

include ('0.conexion.php');
$usuario1 =$_POST['usuario'];//nombre
$usuario2 =$_POST['usuario1'];//marca
$usuario3= $_POST['usuario2'];//cantidad
$usuario4= $_POST['usuario3'];//fecha
$usuario5= $_POST['usuario4'];//SERIAL
$usuario6= $_POST['usuario5'];//ALMACEN
$usuario7= $_POST['usuario6'] ;//TIPO
$usuario8= $_POST['usuario7'] ;//GERENCIA
$usuario9= $_POST['usuario8'] ;//DESCRIPCION
$usuario11=$_SESSION['usuario'];

     $query = "INSERT INTO productos(nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion) VALUES (
                                 '$usuario1','$usuario2','$usuario3','$usuario4','$usuario6','$usuario5','$usuario7','$usuario11','$usuario8','$usuario9');" ;

     
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);

$query1 = "INSERT INTO stocks(nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion) VALUES ('$usuario1','$usuario2','$usuario3','$usuario4','$usuario6','$usuario5','$usuario7','$usuario11','$usuario8','$usuario9');";
$result = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);

$query2 = "INSERT INTO movimiento(nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion) VALUES ('$usuario1','$usuario2','$usuario3','$usuario4','$usuario6','$usuario5','$usuario7','$usuario11','$usuario8','$usuario9');";
$result = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);


header("Location: http:7.ingresarproductos.php");
echo $cmdtuples . " datos registrados.\n";

pg_free_result($result);
header("Location: http:31.mensajeproductos.html");


 ?>