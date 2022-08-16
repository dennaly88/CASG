<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];



     $query = "SELECT * FROM stocks WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo);

?>



 <link rel="shortcut icon" href="img/de.ico">   

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Modificar Stock</div>
         <div class="card-body text-primary">
          

           <center><form class="input form-reg" method="post"  action="modificar_st.php">
           	<input class="input form-control" type="text" name="nu1"  placeholder="nombre" value="<?php echo $row['nombre'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu2"  placeholder="marca" value="<?php echo $row['marca'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu3"  placeholder="cantidad" value="<?php echo $row['cantidad'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu4"  placeholder="fecha" value="<?php echo $row['fecha'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu5"  placeholder="almacen" value="<?php echo $row['almacen'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu6"  placeholder="codigo" value="<?php echo $row['codigo'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu7"  placeholder="tipo" value="<?php echo $row['tipo'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu8"  placeholder="usuario" value="<?php echo $row['usuario'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="nu9"  placeholder="Clave" value="<?php echo $row['id'] ;?>" required ><br><br>
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>