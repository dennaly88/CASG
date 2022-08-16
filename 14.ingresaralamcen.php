<?php
include ('0.conexion.php');
$usuario1 =$_POST['usuario'];
$usuario2 =$_POST['usuario1'];

$query = "INSERT INTO almacenes(nombre,ubicacion) VALUES ('$usuario1','$usuario2');";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:34.mensajealmacen.html");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);

?>






