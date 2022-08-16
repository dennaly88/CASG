<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>


<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];





 
     $query = "SELECT * FROM usuarios WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo);

?>



 <link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Modificar Usuarios</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="modificar_usuario1.php">
           	
            <input class="input form-control" type="text" name="id" readonly id="id" placeholder="ID"  value="<?php echo $row['id'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="Usuario" value="<?php echo $row['usuario'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="Contraseña" value="<?php echo $row['pass'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_tipo" id="edit_tipo" placeholder="tipo" value="<?php echo $row['tipo'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_nom" readonly id="edit_nom" placeholder="nombre" value="<?php echo $row['nombre'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="<?php echo $row['apellido'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="<?php echo $row['correo'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="<?php echo $row['cedula'] ?>" required ><br><br>
            
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>