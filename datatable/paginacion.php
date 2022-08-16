
<?php
session_start();
$_SESSION['usuario'];
$var=$_SESSION['usuario'] ;
if($var == null || $var = '')   {
session_unset();
session_destroy();
  
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






  <script type="text/javascript">
             function Confirma(){
              var respuesta = confirm("Estas Seguro que quieres Eliminar el Producto");
                 if(respuesta==true){
                            return true;
                                     }
                  else
     {
         return false;
     }

     }


  </script>

         <center><div class="card border-primary mb-3" style="max-width: 80rem;">
         <div class="card-header card text-white bg-primary mb-3">Productos</div>
         <div class="card-body text-primary">     
         <table id="paginacion" class="table active border-primary responsive"style="max-width: 80rem";>
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
                            <td>Gerencia</td>
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

  
                $id=$mostrar['id'];
                $nom=$mostrar['nombre'];
                $mar=$mostrar['marca'];
                $cant=$mostrar['cantidad'];
                $fec=$mostrar['fecha'];
                $alm=$mostrar['almacen'];
                $cod=$mostrar['codigo'];
                $tipo=$mostrar['tipo'];
                $usu=$mostrar['usuario'];
                $gere=$mostrar['gerencia'];
                $des=$mostrar['descripcion'];




?>  

  <tr>
              <cente><td><?php echo $mostrar['id'] ?></td><center>
              <center><td><?php echo $mostrar['nombre'] ?></td><center>
              <center><td><?php echo $mostrar['marca'] ?></td><center>
              <center><td><?php echo $mostrar['cantidad'] ?></td><center>
              <center><td><?php echo $mostrar['fecha'] ?></td><center>
              <center><td><?php echo $mostrar['almacen'] ?></td><center>
              <center><td><?php echo $mostrar['codigo'] ?></td><center>
              <center><td><?php echo $mostrar['tipo'] ?></td><center>
              <center><td><?php echo $mostrar['usuario']?></td><center>
              <center><td><?php echo $mostrar['gerencia']?></td><center>


                
          <center><td>
         
        

             
          


          
                <a href="#"  data-target="#myModal" class="edit" data-toggle="modal"

                     data-id="<?php echo $id; ?> "
                     data-nom="<?php echo $nom;?>"
                     data-mar="<?php echo $mar?>" 
                     data-cant="<?php echo $cant?>"
                     data-fec="<?php echo $fec?>"
                     data-alm="<?php echo $alm?>"
                     data-cod="<?php echo $cod?>"
                     data-tipo="<?php echo $tipo?>"
                     data-usu="<?php echo $usu?>"
                     data-gere="<?php echo $gere?>"
                     data-des="<?php echo $des?>">
                  
                   
      

                  <i class="btn btn-warning" data-toggle="tooltip" title="Visualizar">&#128269;</i></a>
                
                        




                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Visualizar Producto</h5>  
                                <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                          
                                <div class="card border-primary mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-primary">


                         <center>
    <form method="post"  action="281.modificar_productos.php">


      Id
      <input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id"  value="" required ><br>Nombre<br>
      <input class="input form-control" type="text" name="edit_nom" readonly id="edit_nom" placeholder="nombre" value="" required ><br>Marca<br>
      <input class="input form-control" type="text" name="edit_mar" readonly id="edit_mar" placeholder="marca" value="" required ><br>Cantidad<br>
      <input class="input form-control" type="text" name="edit_cant" readonly id="edit_cant" placeholder="cantidad" value="" required ><br> Fecha<br>
      <input class="input form-control" type="text" name="edit_fec" readonly id="edit_fec" placeholder="fecha" value="" required ><br>  Almacen    <br>
      <input class="input form-control" type="text" name="edit_alm" readonly id="edit_alm" placeholder="almacen" value="" required ><br> Codigo   <br>
      <input class="input form-control" type="text" name="edit_cod" readonly id="edit_cod" placeholder="codigo" value="" required ><br> Tipo    <br>
      <input class="input form-control" type="text" name="edit_tipo" readonly id="edit_tipo" placeholder="tipo" value="" required ><br>   Usuario  <br>
      <input class="input form-control" type="text" name="edit_usu" readonly id="edit_usu" placeholder="usuario" value="" required ><br> Gerencia   <br>
      <input class="input form-control" type="text" name="edit_gere" readonly id="edit_gere" placeholder="gerencia" value="" required ><br> Descripcion <br>
      <input class="input form-control" type="text" name="edit_des" readonly id="edit_des" placeholder="descripcion" value="" required ><br> <br>
      
           
            
  
    <div class="btn-form">
    
    
          </div>
          </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> 




         


        
      </div>
      <div class="btn-form">
    
    

   </div>
    </div>
  </div>
</div>



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

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ex" data-whatever="" title="Agregar">&#x2795;</button>


<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel" method="post" title="Agregar" action="12.insertarproductos1.php"><center>Ingresar Productos<center></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="input form-reg" method="post" title="Agregar" action="12.insertarproductos1.php" >
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
            <input class="input form-control"  type="text"  name="usuario3"readonly value="<?php echo date("d/m/Y"); ?>" size="10" />
            
          </div>
                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Serial:</label>
                <input class="input form-control" type="text"  name="usuario4"  placeholder="" value="" required autofocus>
          </div>


          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <input class="input form-control" name="usuario6"  readonly placeholder=""required value="Entrada">
    
          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Gerencia:</label>
            <input class="input form-control" name="usuario7"  readonly placeholder=""required value="Servicio General">
    
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
          <div class="form-group">
<label for="recipient-name" class="col-form-label">Descripcion:</label>
            
            <textarea class="input form-control" type="text" name="usuario8"  placeholder= "" value="" ></textarea>
            
    
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




</div>
</div>
<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script type="text/javascript"src="js/bootstrap.js"></script>
</body>
<center><script type="text/javascript">
$(document).ready( function () {
    $('#paginacion').DataTable();
  

  

} );
</script>
</html>

<script src="js/productos.js"></script>











             
              
                
           
                