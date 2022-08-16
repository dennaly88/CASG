<link rel="shortcut icon" href="img/de.ico">


<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Actualizar Productos</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="88.modificar.php">


    <p>Producto Viejo</p>
        <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM productos;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario" placeholder="Usuario"required value="">
    <option selected>Selecciona Productos</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['cantidad'].">".$fila['nombre']."</option>";
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
  <select class="input form-control" name="usuario1" placeholder="Cantidad"required value="">
    <option selected>Selecciona la Cantidad</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['cantidad']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<br><br><p>Producto Actualizado </p>

 <center><input class="input form-control" type="text" size="80" name="usuario2"  placeholder="Nombre Producto" value="" required autofocus><br><br>
   <input class="input form-control" type="pass"size="80"name="usuario3" placeholder="Cantidad" value="" required autofocus><br><br>
   <div class="btn-form">



       
      
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Actualizar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br>
   <div class="btn-form">
    
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br><br>

