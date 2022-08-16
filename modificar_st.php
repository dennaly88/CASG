
<?php
include ('0.conexion.php');

$nu1=$_POST['nu1'];
$nu2=$_POST['nu2'];
$nu3=$_POST['nu3'];
$nu4=$_POST['nu4'];
$nu5=$_POST['nu5'];
$nu6=$_POST['nu6'];
$nu7=$_POST['nu7'];
$nu8=$_POST['nu8'];
$nu9=$_POST['nu9'];

 
     $query = "UPDATE stocks SET  nombre ='$nu1', marca='$nu2', cantidad='$nu3',fecha='$nu4', almacen='$nu5', codigo='$nu6',tipo='$nu7', usuario='$nu8'  WHERE id='$nu9'";
     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:122.buscar.php");
      
  echo "SE BORRO EL REGISTRO";
?>
