<link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 60rem;">
        <div class="card-header card text-white bg-primary mb-3">Buscar Almacen</div>
         <div class="card-body text-primary">
           <center><form class="input form-reg" method="post"  action="71.busquedaalmacen.php">
            

<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="almacen" placeholder="almacen"required value="">
    <option selected>Selecciona el Almacen</option><br><br>
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



           
   <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Buscar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br>
   </div>
    
  </div>
</div>