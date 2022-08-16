<html>
<head>
<meta charset="utf-8">
<title> CASG</title>
</head>
<body>
<script src="js/iquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
<?php
session_start();
include ('0.conexion.php');
$usuario = $_POST['usuario'];
$usuario1 = $_POST['usuario1'];

$query = "SELECT * from administrador where '$usuario'=usuario and '$usuario1'=pass";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

 if(pg_num_rows($result)>0){  
     $_SESSION['usuario']=$usuario;
    header("Location:23.validarparacrearusuario2.php");
     
 
ECHO"".$usuario;
 }  
 else{
 	
 
header("Location:28.validarparacrearusuario3.php");
                                   
     
 }

  ?>


  </body>
  </html>