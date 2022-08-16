<?php
session_start(); 
$_SESSION['usuario'];   

include ('0.conexion.php');
$nombre =$_POST['nombre'];
$marca =$_POST['marca'];
$cantidad= $_POST['cantidad'];
$fecha= $_POST['fecha'];
$serial= $_POST['serial'];
$almacen= $_POST['almacen'];
$tipo= $_POST['tipo'] ;
$usuario=$_SESSION['usuario'];
     
$query1 = "INSERT INTO stocks(nombre,marca,cantidad,fecha,codigo,almacen,tipo,usuario) VALUES ('$nombre','$marca','$cantidad','$fecha','$serial','$almacen','$tipo','$usuario');";
$result = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);

pg_free_result($result);
header("Location: http:122.buscar.php");


?>