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
        <div class="card-header card text-white bg-primary mb-3">Salida Productos</div>
         <div class="card-body text-primary">
          

 <center><form class="input form-reg" method="post"  action="281.modificar_productos_2.php">
            
        Id<input class="input form-control" type="text" name="edit_id"    readonly  readonly placeholder="id" value="<?php echo $row['id'] ;?>" required >Producto<br>
        <input class="input form-control" type="text" name="edit_nom"   readonly  placeholder="nombre" value="<?php echo $row['nombre'] ;?>" required >Marca<br>
        <input class="input form-control" type="text" name="edit_mar"   readonly  placeholder="marca" value="<?php echo $row['marca'] ;?>" required >Fecha<br>
        <input class="input form-control" type="text" name="edit_fec"   readonly  placeholder="fecha" value="<?php echo $row['fecha'] ;?>" required >Almacen<br>
        <input class="input form-control" type="text" name="edit_alm"   readonly  placeholder="almacen" value="<?php echo $row['almacen'] ;?>" required >Codigo<br>
        <input class="input form-control" type="text" name="edit_cod"   readonly  placeholder="codigo" value="<?php echo $row['codigo'] ;?>" required >Tipo<br>
        <input class="input form-control" type="text" name="edit_tipo"  readonly  placeholder="tipo" value="<?php echo $row['tipo'] ;?>" required >
        Cantidad en Stock<br>        
        <input class="input form-control" type="text" name="edit_cant"   readonly placeholder="cantidad" value="<?php echo $row['cantidad'] ;?>" required ><br>
    <div class="btn-form">
    
    <input class="btn-submit btn btn-danger"  type="submit" size="35" value="Salida" >

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br>






    Cantidad a Descontar

    <input class="input form-control" id="numero" min="0" max="1000" type="number" name="edit_cant1"    placeholder="" value="" required ><br>








 Gerencia
 <select class="input form-control" type="text" name="edit_gere"  placeholder="Gerencia" value="" required ><br >

                            <option selected>Tecnologia</option>
                            <option selected>Administracion</option>
                            <option selected>Consultoria</option>
                            <option selected>Gestion Humana</option>
                            <option selected>Comercializacion y Venta</option>
                            <option selected>Logistica</option>
                            <option selected>Seguridad</option>
                            <option selected>Servicio General</option>
                            <option selected>Auditoria</option>
                            <option selected>Planificacion</option>
                            <option selected>Servicio a la Produccion</option>
                            <option selected> Programacion</option>
                            <option selected> Programas</option>
                            <option selected>Selecciona la Gerencia</option>

  </select><br>Descripcion
  <input class="input form-control" type="text" name="edit_des"   placeholder="descripcion"  value="<?php echo $row['descripcion'] ;?>"  ><br>Usuario
  <input class="input form-control" type="text" name="edit_usu"   readonly placeholder="usuario" value="<?php echo $row['usuario'] ;?>"required><br>Tipo

  <input class="input form-control" type="text" name="edit_tipo"  readonly  placeholder="tipo" value="Salida" required ><br>
  <input class="input form-control" type="text" name="edit_fec"   readonly placeholder="fecha" value="<?php echo date("d/m/Y"); ?>" required ><br>


   </div>