<!DOCTYPE html>
<html>
<head>
  <title>CASG</title>
</head>
<body>


<link rel="shortcut icon" href="img/de.ico">
  
<br><br><br><center><TABLE borde="2"></center>
  <center><table class="table active border-primary mb-3" style="max-width: 50rem;">
    <thead class="thead-dark">

  <tr class="bg-primary text-white">
    <h4>
      <center><td>Usuario</td>
      <center><td>Contraseña</td>
  </h4>
  </tr>

<?php
include ('0.conexion.php');

$query = 'SELECT usuario,pass FROM usuarios;';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
    
      <center><td><?php echo $mostrar['usuario'] ?></td><center>
      <center><td><?php echo $mostrar['pass'] ?></td><center>
      
    </tr>
<?php 
    } 
 ?>
</TABLE>


</body>
</html>