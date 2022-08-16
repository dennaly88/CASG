<link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Ingresar Stocks</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="ingresarstock1.php">
            
          <br><br><input class="input form-control" type="text"  name="nombre"  placeholder="Producto" value="" required autofocus><br><br>
           <input class="input form-control" type="numerico"name="marca" placeholder="Marca" value="" required autofocus><br><br>
           <input class="input form-control" type="text" name="cantidad"  placeholder="Cantidad" value="" required ><br><br>
           <input class="input form-control" type="date" name="fecha" placeholder="Fecha Ingreso" value="" required ><br><br>
           <input class="input form-control" type="text" name="serial"  placeholder="Serial" value="" required ><br><br>
           <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM almacenes;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="almacen" placeholder="almacen"required value="">
    <option selected>Selecciona el Almacen</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
    }
    ?>


  </select>
  <br><br>
  <select class="input form-control" name="tipo" placeholder="tipo"required value="">
    <option selected>Entrada</option>
     <option selected>Salida</option>

  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }





?> 
   <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
    
  </div>
</div>