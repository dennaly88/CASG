<link rel="shortcut icon" href="img/de.ico">


<?php
session_start();
$_SESSION['usuario'] ;
$var = $_SESSION['usuario'] ;
if($var == null || $var = '')   {
header("Location:index.php");
}
?>



<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <title>CASG</title>

                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 ">

 <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">





  <link rel="stylesheet" type="text/css" href="css/estilos.css"> 


                  
                  
            
                </head>
  <body style="background-color: silver;">  
  <?php require ("5.menuprincipal.php");?> 
  <?php require ("datatable/sctok.php");?>  






  <br><br><br><br><br> <br><br><br><br><br><br><br><br><br ><br><br><br ><br><br><br><br><br><br >





 
                  
       <footer class="footer py-2 text-xs-center">
         <div class="container">

<p>2020 Departamento de Desarrollo VTV Canal 8</p>
   
    </div>
    </footer > 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> </script>            
    </body>
</html>