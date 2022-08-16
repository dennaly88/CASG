<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];





 
     $query = "SELECT * FROM almacenes WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo);

?>



 <link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Modificar Almacenes</div>
         <div class="card-body text-primary">
          

           <center><form class="input form-reg" method="post"  action="editar_almacen2.php">
           	
            <input class="input form-control" type="text" name="nombre"  placeholder="nombre" value="<?php echo $row['nombre'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="ubicacion"  placeholder="unicacion" value="<?php echo $row['ubicacion'] ;?>" required ><br><br>
            <input class="input form-control" type="text" name="id"  placeholder="Id" value="<?php echo $row['id'] ;?>" required ><br><br>
            
            
            
            
            
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>