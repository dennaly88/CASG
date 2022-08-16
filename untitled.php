
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



<link rel="shortcut icon" href="img/de.ico">


<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Actualizar Usuario</div>
         <div class="card-body text-primary">

           <center><form class="input form-reg" method="post"  action="83.proceso.php">


    <p>Usuario Y Contraseña Vieja</p>
        <?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM usuarios;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" type= "text" name="usuario" placeholder="Usuario"required value="">
    <option selected>Selecciona el Usuario</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['pass'].">".$fila['usuario']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 
<?php     
   
include ('0.conexion.php');
$query = 'SELECT * FROM usuarios;';
$resulatdo = pg_query($query) or die ("error ");
$numReg = pg_num_rows($resulatdo);


if($numReg>0){


  ?>
  <select class="input form-control" name="usuario1" placeholder="Usuario"required value="">
    <option selected>Selecciona la Contraseña</option>
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       echo "<option values".$fila['usuario1'].">".$fila['pass']."</option>";
    }
    ?>


  </select>
    <br><br>

    <?php
  }else{

    echo "NO HAY REGISTRO";
  }

?> 


<br><br><p>Usuario Y Contraseña Nueva</p>

 <center><input class="input form-control" type="text" size="80" name="usuario2"  placeholder="Usuario" value="" required autofocus><br><br>
   <input class="input form-control" type="pass"size="80"name="usuario3" placeholder="Contraseña" value="" required autofocus><br><br>
   <div class="btn-form">



       
      
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Actualizar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br>
   <div class="btn-form">
    
   </div>
   
  </form>







            </div>
    
  </div>
</div>
<br><br><br>