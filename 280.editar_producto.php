<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];

 
     $query = "SELECT * FROM productos WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo) ;

?>



 <link rel="shortcut icon" href="img/de.ico ">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Agregar Productos</div>
         <div class="card-body text-primary">
          

           <center>Id<form class="input form-reg" method="post"  action="281.modificar_productos.php">
            
            <input class="input form-control" type="text" name="edit_id"   readonly placeholder="id" value="<?php echo $row['id'] ;?>" required >Producto<br>
           	<input class="input form-control" type="text" name="edit_nom"    readonly placeholder="nombre" value="<?php echo $row['nombre'] ;?>" required >Marca<br>
            <input class="input form-control" type="text" name="edit_mar"   readonly placeholder="marca" value="<?php echo $row['marca'] ;?>" required >Fecha<br>
            <input class="input form-control" type="text" name="edit_fec"   readonly placeholder="fecha" value="<?php echo $row['fecha'] ;?>" required >Almacen<br>
            <input class="input form-control" type="text" name="edit_alm"  readonly placeholder="almacen" value="<?php echo $row['almacen'] ;?>" required >Codigo<br>
            <input class="input form-control" type="text" name="edit_cod"   readonly placeholder="codigo" value="<?php echo $row['codigo'] ;?>" required >Tipo<br>
            <input class="input form-control" type="text" name="edit_tipo"  readonly placeholder="tipo" value="<?php echo $row['tipo'] ;?>" required >Cantidad en Stock<br>
            <input class="input form-control" type="text" name="edit_cant"   readonly placeholder="cantidad"  value="<?php echo $row['cantidad'] ;?>" required ><br>
            
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-info"  type="submit" size="35" value="Ingreso">

    <input class="btn-reset btn btn-secondary"  type="reset" size="35" value="Limpiar"><br><br><br>


    
Cantidad a Ingresar
<input class="input form-control" type="number" min="1" max="1000"name="edit_cant1"   placeholder=""  value="" required >Descripcion<br>


<input class="input form-control" type="text" name="edit_des"   placeholder="descripcion"  value="<?php echo $row['descripcion'] ;?>"  >Gerencia<br>

<input class="input form-control" type="text" name="edit_gere"  readonly placeholder="gerencia"  value="Servicio General" required >Usuario<br>

    <input class="input form-control" type="text" name="edit_usu"  readonly placeholder="usuario" value="<?php echo $row['usuario'] ;?>" required >Tipo<br>

    <input class="input form-control" type="text" name="edit_tipo"  readonly placeholder="tipo" value="Entrada" required >Fecha<br>
    <input class="input form-control" type="text" name="edit_fec"   readonly placeholder="fecha" value="<?php echo date("d/m/Y"); ?>" required ><br>

   </div>