
<link rel="shortcut icon" href="img/de.ico">

<html>
<head>
<meta charset="utf-8">
<title>CASG</title>
</head>
<body>
<script src="js/iquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
<?php
session_start();
include ('0.conexion.php');
$usuario = $_POST['almacen'];

$query = "SELECT * from almacenes where '$usuario' =nombre ";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

 if(pg_num_rows($result)>0){  
     $_SESSION['almacen']=$usuario;
     

    header("Location:72.busquedaalmacen.php");
     
 }  
 else{
  
 
header("Location:73.busquedaalmacen.php");
                                   
     
 }

  ?>
