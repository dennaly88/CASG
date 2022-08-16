<!DOCTYPE html>


<?php
session_start();
$_SESSION['usuario'];

?>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/login.css">
  


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json>

<title>CASG</title>
  </head>
            
            
            
          
       <center><div class="card border-primary mb-3" style="max-width: 60rem;">
        <div class="card-header card text-white bg-primary mb-3">Stock</div>
         <div class="card-body text-primary">     
  <table id="paginacion" class="table active border-primary responsive"style="max-width: 60rem";>
    <thead>
      
        <tr class="bg-primary text-white">
           <h4>
              <td>Nombre</td>
              <td>Marca</td>
              <td>Cantidad</td>
              <td>Fecha</td>
              <td>Almacen</td>
              <td>Serial</td>
              <td>Tipo</td>
              <td>Usuario</td> 
              <td>Editar</td> 
              <td>Eliminar</td> 
          </h4>

      </tr>
  </thead>
<tbody>
<?php
include ('0.conexion.php') ;

$query = 'SELECT * FROM stocks
';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
    
      <center><td><?php echo $mostrar['nombre'] ?></td><center>
      <center><td><?php echo $mostrar['marca'] ?></td><center>
      <center><td><?php echo $mostrar['cantidad'] ?></td><center>
      <center><td><?php echo $mostrar['fecha'] ?></td><center>
      <center><td><?php echo $mostrar['almacen'] ?></td><center>
      <center><td><?php echo $mostrar['codigo'] ?></td><center>
      <center><td><?php echo $mostrar['tipo'] ?></td><center>
      <center><td><?php echo $mostrar['usuario'] ?></td><center>
      <td><button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#modal_edit"><i class="fas fa-edit">&#x1f4dd;</i></button></td> 
      <td><button class="btn btn-sm btn-danger"data-toggle="modal" data-target=""><i class="fas fa-edit">&#x1f5d1;</i></button></td> 
<?php 
    } 
 ?>



 <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center>Editar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"  action="123.principal.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required value="" name="usuario">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" id="marca" required value="" name="usuario1">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" required value="" name="usuario2">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input type="date" class="form-control" id="fecha" required value="" name="usuario3">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Almacen:</label>
            <input type="text" class="form-control" id="almacen" required value="" name="usuario4" >
          </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>

                             
                                                                    

   </tbody>         
</TABLE>


<script>
function popup() {
    alert("DANNY EL MEJOR ")

}
</script>







<link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json>


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












             
              
                
           
               