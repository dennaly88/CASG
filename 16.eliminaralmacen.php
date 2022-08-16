<link rel="shortcut icon" href="img/de.ico">
<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Eliminar Almacen</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="17.eliminaralmacen.php">

                     
   <br><br>
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario1" placeholder="Almacen"required value="">
    <option selected>Selecciona Productos</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['ubicacion'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 


   <select class="input form-control" type="text" name="usuario2" placeholder="Ubicacion del Almacen" value="" required>
    <option selected>Seleccione el Piso</option>
       <option >Piso4</option>
       <option >Piso3</option>
       <option >Piso2</option>
       <option >Piso1</option>
       <option >Sotano1</option>
       <option >Sotano2</option>

  </select><br><br><br><br>

  
   <div class="btn-form">
    <input class="btn-submit btn btn-danger" type="submit" value="Eliminar">
    <input class="btn-reset btn-reset btn btn-success" type="reset" value="Limpiar"><br><br><br><br>
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br><br>