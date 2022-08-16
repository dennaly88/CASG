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

include ('0.conexion.php');
$usuario = $_POST['usuario'];
$usuario1 = $_POST['usuario1'];

$query = "SELECT * from usuarios where '$usuario'=usuario and '$usuario1'=pass";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());



 if(pg_num_rows($result)>0){
       session_start();  
     $_SESSION['usuario']=$usuario;



$query1 = "SELECT * from usuarios where '$usuario'=usuario and '$usuario1'=pass and 'Administrador'=tipo";
$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());



 if(pg_num_rows($result1)>0){
       session_start();  
     $_SESSION['usuario']=$usuario;


header("Location:998.principal_menu_administrador.php");

    
    }
    else{
     header("Location:4.paginaprincipal.php");

    }



 }  
 else{
 	
 
header("Location:mensajes/1.mensaje.html");

 }

  ?>


  </body>
  </html>