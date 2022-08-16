
<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location:index.php'); 
        
        exit();
     }

?>


<link rel="shortcut icon" href="img/de.ico">
<body style="background: silver;">
<html>        
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <title>CASG</title>

                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script type="text/javascript"src="js/bootstrap.js"></script>





  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">





  <link rel="stylesheet" type="text/css" href="css/estilos.css">     
  </head>
   
                
  <?php require ("5.menuprincipal.php");?> 
  <?php require ("6.cuerpomenuprincipal.php");?> 
<script> 
  

      alert("Bienvenido al Sistema CASG Control Almacen Servicio General ");

  </script>

 
                  
       <footer class="footer py-2 text-xs-center">
  <div class="container">

<center><p>2020 Departamento de Desarrollo VTV Canal 8</p>
   
    </div>
    </footer > 
            
    </body>
    
</html>