<?php
include ('0.conexion.php');
$id=$_GET['id'];
$nom=$_GET['nombre'];
$marca=$_GET['marca'];
$cant=$_GET['cantidad'];
$fe=$_GET['fecha'];
$alm=$_GET['almacen'];
$cod=$_GET['codigo'];
$tipo='Eliminado';
$usu=$_GET['usuario'];
$ger=$_GET['gerencia'];
$des=$_GET['descripcion'];
    

    
    $query = "INSERT INTO movimiento(id,nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion ) VALUES (
        '$id',$nom','$marca' , '$cant' ,$fe,'$alm','$cod','$tipo' ,'$usu','$ger', '$des' )" ;
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


 
     



header("Location: http:122.buscar.php");
      
  echo "SE BORRO EL REGISTRO"  ;
?>