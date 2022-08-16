<html>
<head>
<meta charset="utf-8">
<title> CASG</title>
</head>
<body>
<script src="js/iquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<center><form class="input form-reg" method="get"  target="_blank"action="reporte/pruebareporte.php">

<?php
session_start();
include ('0.conexion.php');
$usuario = $_POST['nombre'];
$query = "SELECT * from stocks where '$usuario' =nombre ";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

 if(pg_num_rows($result)>0){  
     
     
     
      
    
    header("Location:reporte/otr.php?usuario=" .urlencode($usuario));
 }  
 else{

 	
  
 header("Location:98.mensaje.php?usuario=" .urlencode($usuario));

                                   
     
 }

  ?>

  </html>