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



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/login.css">
  


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<title>CASG</title>
  </head>
            
            <link rel="shortcut icon" href="img/de.ico">
            
          
       <center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Buscar Almacen</div>
         <div class="card-body text-primary">     
  <table id="paginacion" class="table active border-primary responsive"style="max-width: 50rem";>
    <thead>
      
        <tr class="bg-primary text-white">
           <h4>
              <td>Nombre</td>
              <td>Ubicacion</td>
          </h4>
      </tr>
  </thead>
<tbody>
<?php
include ('0.conexion.php');

$query = 'SELECT * FROM almacenes 
';

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

                             
                                                                    

   </tbody>         
</TABLE>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/jquery-3.2.1.min.js" integrity="sha384-q8i/x+965Dzo0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"></script>
</div>
</div>

</body>
<center><script type="text/javascript">
$(document).ready( function () {
    $('#paginacion').DataTable();
  

  

} );
</script>
</html>












             
              
                
           
               