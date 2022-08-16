 <?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['nombre'];
 
     $query2 = "SELECT * FROM stocks WHERE nombre='$id'";
     $resulatdo2 = pg_query($query2) or die ("error ");
     $row = pg_fetch_array($resulatdo2);
     
     $query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);






?>







 <link rel="shortcut icon" href="img/de.ico" >

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Ingresar Productos</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="modificar_productos.php">
           	<input class="input form-control" type="text" name="serial"  placeholder="Serial" value="<?php echo $row['codigo'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="cantidad"  placeholder="Serial" value="<?php echo $row['cantidad'] ;?>" required ><br><br>
            <br><br><input class="input form-control" type="text"  name="producto"  placeholder="Producto" value="<?php echo $row['nombre'] ;?>" required autofocus><br><br>
           <input class="input form-control" type="text" name="marca" placeholder="Marca" value="<?php echo $row['marca'] ;?>" required autofocus><br><br>
           

  


  
  <select class="input form-control" name="almacen" placeholder="almacen"required value="">
    <option selected>Selecciona el Almacen</option>
    <?php

  
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
    }
    ?>



           
           
              
  

   <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
    
  </div>
</div>