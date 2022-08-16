
<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location:index.php'); 
        
        exit();
     }

?>



<link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Eliminar Usuario</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="37.eliminarusuario.php">




   <br><br><input class="input form-control" type="text" size="80" name="usuario1"  placeholder="Usuario" value="" required><br><br><input class="input form-control" type="text" size="80" name="usuario2"     placeholder="Contraseña" value="" required><br><br>
   
   <div class="btn-form">
    <input class="btn-submit btn btn-danger" type="submit" value="Eliminar">
    <input class="btn-reset btn-reset btn btn-success" type="reset" value="Limpiar"><br><br><br><br>
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br><br>