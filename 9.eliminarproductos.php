
<link rel="shortcut icon" href="img/de.ico">



<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Eliminar Productos</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="11.eliminarproductos.php">

<br><br>

 <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM productos;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario1" placeholder="Producto"required value="">
    <option selected>Selecciona Productos</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['marca'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM productos;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario2" placeholder="Marca"required value="">
    <option selected>Selecciona Marca</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre '].">".$fila['marca']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<br><br><br><br>
  
   <div class="btn-form">
    <input class="btn-submit btn btn-danger" type="submit" value="Eliminar">
    <input class="btn-reset btn-reset btn btn-success" type="reset" value="Limpiar">
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br>















