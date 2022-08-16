<?php
include ('0.conexion.php');
$usuario1 =$_POST['usuario'];
$usuario2 =$_POST['usuario1'];
$usuario3 =$_POST['usuario2'];
$usuario4 =$_POST['usuario3'];
$usuario5 =$_POST['usuario4'];
$usuario6 =$_POST['usuario5'];
$usuario7 =$_POST['usuario6'];

$query = "INSERT INTO usuarios(usuario,pass,tipo,nombre,apellido,correo,cedula) VALUES ('$usuario1','$usuario2','$usuario3','$usuario4','$usuario5','$usuario6','$usuario7');";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:25.mensajeexitosodeusuario.html");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);

