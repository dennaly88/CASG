<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/login.css">
  


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<title>CASG</title>
  </head>
            
            
            
          
       <center><div class="card border-primary mb-3" style="max-width: 60rem;">
        <div class="card-header card text-white bg-primary mb-3">Productos</div>
         <div class="card-body text-primary">     
  <table id="paginacion" class="table active border-primary responsive"style="max-width: 60rem";>
    <thead>
      
        <tr class="bg-primary text-white">
           <h4>
             <td>Id</td>
              <td>Nombre</td>
              <td>Marca</td>
              <td>Cantidad</td>
              <td>Fecha</td>
              <td>Almacen</td>
              <td>Serial</td>
              <td>Tipo</td>
              <td>Usuario</td>
              <td>Accion</td >

          </h4>
      </tr>
  </thead>
<tbody>
<?php
include ('0.conexion.php');

$query = 'SELECT * FROM productos 
';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {
?>  

  <tr>
      <cente><td><?php echo $mostrar['id'] ?></td><center>
      <center><td><?php echo $mostrar['nombre'] ?></td><center>
      <center><td><?php echo $mostrar['marca'] ?></td><center>
      <center><td><?php echo $mostrar['cantidad'] ?></td><center>
      <center><td><?php echo $mostrar['fecha'] ?></td><center>
      <cente><td><?php echo $mostrar['almacen'] ?></td><center>
      <cente><td><?php echo $mostrar['codigo'] ?></td><center>
      <cente><td><?php echo $mostrar['tipo'] ?></td><center>
      <cente><td><?php echo $mostrar['usuario'] ?></td><center>

          <center><td>
         
          <a class="btn-submit btn btn-danger" href="288.eliminar_producto.php?id=<?php echo $mostrar['id']; ?>">&#x274e;</a>
          <a class="btn-submit btn btn-Success"  href="289.editar_producto.php?id=<?php echo $mostrar['id']; ?>">&#x1f4dd;</a>


<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $mostrar['id']; ?>">EDITAR</button> 





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        

        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>  
        
      </div>
      <div class="modal-body">
        








 
     


        
        <div class="card border-primary mb-3" style="max-width: 50rem;">
         <div class="card-body text-primary">
          

           <center><form class="input form-reg" method="post"  action="281.modificar_productos.php">
            <input class="input form-control" type="text" name="nu1"  placeholder="nombre" value="<?php echo $mostrar['nombre'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu2"  placeholder="marca" value="<?php echo $mostrar['marca'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu3"  placeholder="cantidad" value="<?php echo $mostrar['cantidad'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu4"  placeholder="fecha" value="<?php echo $mostrar['fecha'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu5"  placeholder="almacen" value="<?php echo $mostrar['almacen'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu6"  placeholder="codigo" value="<?php echo $mostrar['codigo'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu7"  placeholder="tipo" value="<?php echo $mostrar['tipo'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu8"  placeholder="usuario" value="<?php echo $mostrar['usuario'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu9"  placeholder="Clave" value="<?php echo $mostrar['id'] ;?>" required ><br><br>
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> 




         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type=""></script>



        
       



  

        
      </div>
      <div class="btn-form">
    
    

   </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type=""></script>
<script src="js/bootstrap.min.js"></script>















</form>

         </td><center >
    </tr>

<?php 
    } 
 ?>
 

 <?php     
   
            include ('0.conexion.php');
            $query = 'SELECT * FROM almacenes;';
            $resulatdo = pg_query($query) or die ("error ");
            $numReg = pg_num_rows($resulatdo);



  ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ex" data-whatever="@mdo">&#x2795;</button>


<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" method="post"  action="12.insertarproductos1.php"><center>Ingresar Productos<center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="input form-reg" method="post"  action="12.insertarproductos1.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Producto:</label>
            <input class="input form-control" type="text"  name="usuario"  placeholder="" value="" required autofocus>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input class="input form-control" type="text"  name="usuario1"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad:</label>
            <input class="input form-control" type="text"  name="usuario2"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input class="input form-control" type="date"  name="usuario3"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Serial:</label>
            <input class="input form-control" type="text"  name="usuario4"  placeholder="" value="" required autofocus>

          </div>

          <div class="form-group">

            
            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <select class="input form-control" name="usuario6" placeholder=""required value="">
    <option selected>Entrada</option>
     <option selected>Salida</option>

         </select>
          </div>



          <div class="form-group">

            
            <label for="recipient-name" class="col-form-label">Almacenes:</label>
            


            <select class="input form-control" name="usuario5" placeholder=""required value="">
    <option selected>Selecciona el Almacen</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
          </div>



















        
      </div>
      <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
    </div>
  </div>
</div>

</form>
























































 <br><br>
 

                             
                                                                    

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












             
              
                
           
               