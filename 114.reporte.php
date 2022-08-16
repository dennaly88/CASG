<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>


<link rel="shortcut icon" href="img/de.ico">


<!DOCTYPE html>
<html>
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
					<title>CASG</title>
						<link rel="stylesheet" href="css/bootstrap.min.css">
						<link rel="stylesheet" href="css/estilos.css">
								</head>
  <body style="background-color: silver;">

<?php 
  session_start();
 
?>
<?php require ("5.menuprincipal.php");?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <title>CUERPO DE MIS PAGINAS CON BOOTSTRAP</title>

                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<br><br><br><br>
  <center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Generar Reporte Por Stock </div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="115.pre.php">
            <br><br>
            

<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ") ;
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="nombre" placeholder="almacen"required value="">
    <option selected>Producto</option><br><br>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }





?> 

<div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Generar PDF">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br>
   </div>
    
  </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





           						<script src="js/iquery.js"></script>
		   						<script src="js/bootstrap.min.js"></script>
    </body>
    <footer class="footer py-2 text-xs-center">
  <div class="container">

<p>2020 Departamento de Desarrollo VTV Canal 8</p>
   
    </div>
    </footer >
</html>