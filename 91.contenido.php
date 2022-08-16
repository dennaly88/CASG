<link rel="shortcut icon" href="img/de.ico">


<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Actualizar Almacen</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="92.contenido.php">


    <p>Almacen Viejo</p>
        <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario" placeholder="Usuario"required value="">
    <option selected>Selecciona el Almacen</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
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
$query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="usuario1" placeholder="Nombre Almacen"required value="">
    <option selected>Selecciona la Ubicacion</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['ubicacion']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 


<br><br><p>Almacen Nuevo</p>

 <center><input class="input form-control" type="text" size="80" name="usuario2"  placeholder="Nombre Almacen" value="" required autofocus><br><br>
   <input class="input form-control" type="pass"size="80"name="usuario3" placeholder="Ubicacion Almacen" value="" required autofocus><br><br>
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