
<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];





 
     $query = "SELECT * FROM productos WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo);

?>






<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal88">Editar</button>


<div class="modal fade" id="exampleModal88" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" method="post"  action="281.modificar_productos.php"><center>Modificar Productos<center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>




      <div class="modal-body">

        <form class="input form-reg" method="post"  action="281.modificar_productos.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id:</label>
            <input class="input form-control" type="text"  name="nu9"  placeholder="" value=" <?php echo $mostrar['id'] ;?>"required autofocus>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Producto:</label>
            <input class="input form-control" type="text"  name="nu1"  placeholder="" value=" <?php echo $mostrar['nombre'] ;?>"required autofocus>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input class="input form-control" type="text"  name="nu2"  placeholder="" value=" <?php echo $mostrar['marca'] ;?>" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad:</label>
            <input class="input form-control" type="text"  name="nu3"  placeholder="" value="<?php echo $mostrar['cantidad'] ;?> " required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input class="input form-control" type="text-date"  name="nu4"  placeholder="" value="<?php echo $mostrar['fecha'] ;?> " required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Serial:</label>
            <input class="input form-control" type="text"  name="nu6"  placeholder="" value="<?php echo $mostrar['codigo'] ;?> " required autofocus>

          </div>

          <div class="form-group">

            
            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <select class="input form-control" type="text"  name="nu7" placeholder=""required value="<?php echo $mostrar['tipo'] ;?> ">
    <option selected>Entrada</option>
     <option selected>Salida</option>

         </select>
          </div>



          <div class="form-group">

            
            <label for="recipient-name" class="col-form-label">Almacenes:</label>
            <?php     
   
            include ('0.conexion.php');
            $query = 'SELECT * FROM almacenes;';
            $resulatdo = pg_query($query) or die ("error ");
            $numReg = pg_num_rows($resulatdo);



  ?>


            <select class="input form-control" name="nu5" placeholder="almacen"required value=" <?php echo $mostrar['almacen'] ;?>">
    <option selected>Selecciona el Almacen</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input class="input form-control" type="text"  name="nu8"  placeholder="" value="<?php echo $mostrar['usuario'] ;?> " required autofocus>

          </div>











        
      </div>
      <div class="btn-form">
    
    <center><input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

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
 
