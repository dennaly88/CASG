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




<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Crear Usuario</div>
         <div class="card-body text-primary">

      <link rel="shortcut icon" href="img/de.ico">     

<br><br><center><form class="form-reg" method="post" size="80" action="29.crearusuario2.php">
  <input class="input form-control" type="text"size="80"name="usuario" placeholder=" Usuario" value="" required autofocus><br><br>
   
   <input class="input form-control" type="text"size="80"name="usuario1" placeholder=" Contraseña" value="" required autofocus><br><br>
   <select class="input form-control" name="usuario2" placeholder="tipo de usuario"required value="">

    <option selected>Administrador</option>
     <option selected>Usuario</option>
      <option selected>Tipo</option>
<br><br>
  </select>
  <br><br>
  <input class="input form-control" type="text"size="80"name="usuario3" placeholder="Nombre" value="" required autofocus><br><br>
  <input class="input form-control" type="text"size="80"name="usuario4" placeholder=" Apellido" value="" required autofocus><br><br>
  <input class="input form-control" type="text"size="80"name="usuario5" placeholder=" Cedula" value="" required autofocus><br><br>
  <input class="input form-control" type="text"size="80"name="usuario6" placeholder=" Correo" value="" required autofocus><br><br>

   
   <div class="btn-form">
    
    <br><br><input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>



   
  </form>

            </div>
    
  </div>
</div>
<br><br><br><br>
