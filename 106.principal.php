<?php
session_start();
$_SESSION['usuario'];
$usuario18=$_SESSION['usuario'];
?>


            </div>
    
  </div>
</div>
<br><br><br>

<link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Actualizar Productos</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="108.principal.php">


    <p>Producto Viejo</p>
        <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario" placeholder="Usuario"required value="">
    <option selected>Nombre</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['cantidad'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="usuario1" placeholder="Cantidad"required value="">
    <option selected>Marca</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['marca']."</option>";
    }
    ?>


  </select>
 

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ") ;
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "date" name="usuario2" placeholder="Fecha"required value="">

    <option selected>Cantidad</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['cantidad']."</option>";

    }
    ?>


  </select>
    

    <?php
  }else{

    echo "NO HAY REGISTRO" ;
  }

?> 

<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="usuario3" placeholder="fecha"required value="">
    <option selected>Fecha</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['fecha']."</option>";
    }
    ?>


  </select>
 

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 


<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="usuario4" placeholder="almacen"required value="">
    <option selected>Almacen</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['almacen']."</option>";
    }
    ?>


  </select>
 

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 

<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);

if($numReg>0){
  ?>
  <select class="input form-control" name="usuario5" placeholder="Cantidad"required value="">
    <option selected>Codigo</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['codigo']."</option>";
    }
    ?>
  </select>


    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM stocks;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);

if($numReg>0){
  ?>
  <select class="input form-control" name="usuario9" placeholder="Cantidad"required value="">
    <option selected>Tipo</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['nombre'].">".$fila['tipo']."</option>";
    }
    ?>
  </select>


    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 





<br><br><p>Producto Actualizado </p>

 <center><input class="input form-control" type="text" size="80" name="usuario6"  placeholder="Nombre Producto" value="" required autofocus><br>
   <input class="input form-control" type="number"size="80"name="usuario7" placeholder="Cantidad" value="" required autofocus><br>
   <input class="input form-control" type="date" name="usuario8" placeholder="Fecha Ingreso" value="" required ><br>
   <div class="btn-form">
    <select class="input form-control" name="usuario19" placeholder="Tipo"required value="">
    <option selected></option>
    <option selected>Salida</option>
    <option selected>Entrada</option>

    <br><br>
    
  </select>




       
      
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Actualizar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br>
   <div class="btn-form">
    
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br><br>

