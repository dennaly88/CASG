

<link rel="shortcut icon" href="img/de.ico">
 <center><div class="card border-primary mb-3" style="max-width: 80rem;">
        <div class="card-header card text-white bg-primary mb-3">Buscar Productos</div>


         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="50.busquedaespecifica.php">



<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM productos;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="producto" placeholder="almacen"required value="">
    <option selected>Producto</option><br><br>
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
          
           
   <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Buscar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br>
   </div>
    
  </div>
</div>

