<!DOCTYPE html>
<html>
<head>
  <title>CASG</title>
</head>
<link rel="shortcut icon" href="img/de.ico">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <title>CUERPO DE MIS PAGINAS CON BOOTSTRAP</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript"src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/estilos.css">

<body>



  
<br><br><br><center><TABLE borde="2"></center>
   <table class="table active border-primary mb-3" style="max-width: 50rem;">
    <thead class="thead-dark">

  <tr class="bg-primary text-white">

 
    <h4>
      <td>Nombre</td>
      <td>Ubicacion</td>
  </h4>
  </tr>

<?php
include ('0.conexion.php');

$query = 'SELECT nombre,ubicacion FROM almacenes;';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
    
      <center><td><?php echo $mostrar['nombre'] ?></td><center>
      <center><td><?php echo $mostrar['ubicacion'] ?></td><center>
      
    </tr>
<?php 
    } 
 ?>
</TABLE>


</body>
</html>