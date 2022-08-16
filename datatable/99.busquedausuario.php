<?php
session_start();
$_SESSION['usuario'];
$var=$_SESSION['usuario'] ;
if($var == null || $var = '')   {
session_unset();
session_destroy();
  
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/login.css">
  





                               <title>CASG</title>
                                   </head> 


<!--888888888888888888888888888888888888  codigo de eliminar  888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->


                   <script type="text/javascript">
                             function Confirma(){
                             var respuesta = confirm("Estas Seguro que quieres Eliminar el Usuario");
                                 if(respuesta==true){
                                              return true;
                                            }

                                             else
                                         {
                                             return false;

                                         }

                                         } 
  </script>
  <!--88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->



        <center><div class="card border-primary mb-3" style="max-width: 80rem;">
        <div class="card-header card text-white bg-primary mb-3">Usuarios</div>
        <div class="card-body text-primary">     
        <table id="paginacion" class="table active border-primary responsive"style="max-width: 80rem";>
    <thead>
        <tr class="bg-primary text-white">
                  <h4>
                              <td>id</td>
                              <td>Usuario</td>
                              <td>Contraseña</td>
                              <td>Tipo</td>
                              <td>Nombre</td> 
                              <td>Apellido</td>
                              <td>Correo</td>
                              <td>Cedula</td>
                              <td>Accion</td> 

                 </h4>
      </tr>
  </thead>
<tbody>

  <!--voy aqui-->
<?php
include ('0.conexion.php');

$query = 'SELECT * FROM usuarios 
';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($mostrar=pg_fetch_array($result)) {

  
                $id=$mostrar['id'];
                $usu=$mostrar['usuario'];
                $pass=$mostrar['pass'];
                $tipo=$mostrar['tipo'];
                $nom=$mostrar['nombre'];
                $ap=$mostrar['apellido'];
                $cor=$mostrar['correo'];
                $ced=$mostrar['cedula'];
              


?>  

  <tr>
        <center><td><?php echo $mostrar['id'] ?></td><center>
        <center><td><?php echo $mostrar['usuario'] ?></td><center>
        <center><td><?php echo $mostrar['pass'] ?></td><center>
        <center><td><?php echo $mostrar['tipo'] ?></td><center>
        <center><td><?php echo $mostrar['nombre'] ?></td><center>
        <center><td><?php echo $mostrar['apellido'] ?></td><center>
        <center><td><?php echo $mostrar['correo'] ?></td><center>
        <center><td><?php echo $mostrar['cedula'] ?></td><center>
        
        <center><td>     
                
          
         
<!--888888888888888888888888888888888888  boton de eliminar 888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->
        

             <a href="37.eliminarusuario.php?id=<?php echo $mostrar['id']; ?> "> 
          <button type= 'button' class= 'btn btn-danger' onclick="return Confirma()">&#x274e;  </button>
 
<!--888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->




<!--888888888888888888888888888888888888  boton para editar  8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->

  
          <a class="btn-submit btn btn-Success"  href="887.editar_usuario.php?id=<?php echo $mostrar['id']; ?>">&#x1f4dd;</a>

<!--888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->





          


          
                <a href="#"  data-target="#myModal8" class="edit" data-toggle="modal"

                     data-id="<?php echo $id ?> "
                     data-usu="<?php echo $usu?>"
                     data-pass="<?php echo $pass;?>"
                     data-tipo="<?php echo $tipo?>"
                     data-nom="<?php echo $nom?>"
                     data-ape="<?php echo $ape?>"
                     data-cor="<?php echo $cor?>"
                     data-ced="<?php echo $ced?>"

                     
                     >
                  
            



                  <i class="btn btn-secondary" data-toggle="tooltip" title="Editar">&#x1f4dd;</i></a>        

                <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>  
                      <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                              </div>
                              <div class="modal-body">
                          
                                <div class="card border-primary mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-primary">


           <center>
            <form method="post"  action="modificar_usuario1.php">


<input class="input form-control" type="text" name="id" readonly id="id" placeholder="Id"  value="<?php echo $mostrar['id'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="Usuario" value="<?php echo $mostrar['usuario'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="Contraseña" value="<?php echo $mostrar['pass'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_tipo" id="edit_tipo" placeholder="tipo" value="<?php echo $mostrar['tipo'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_nom" readonly id="edit_nom" placeholder="nombre" value="<?php echo $mostrar['nombre'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="<?php echo $mostrar['apellido'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="<?php echo $mostrar['correo'] ?>" required ><br><br>
<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="<?php echo $mostrar['cedula'] ?>" required ><br><br>
            
            
  
    <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> 
  </div>
      <div class="btn-form">
    
    

   </div>
    </div>
  </div>
</div>



</form>

         </td><center >
    </tr>

<?php 
    } 
 ?>
 
<!--888888888888888888888888888888888888  (CREAR USURARIO MODAL )888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
<!--888888888888888888888888888888888888 888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->



<!--888888888888888888888888888888888888  boton de crear USURAR888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->

<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel" method="post"  action="29.crearusuario2.php"><center>Crear Usuario<center></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="input form-reg" method="post"  action="29.crearusuario2.php" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input class="input form-control" type="text"  name="usuario"  placeholder="" value="" required autofocus>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input class="input form-control" type="text"  name="usuario1"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <select class="input form-control" name="usuario2" placeholder=""required value="">
               <option selected>Administrador</option>
               <option selected>Usuario</option>
         </select>
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre:</label>
              <input class="input form-control" type="text"  name="usuario3"  placeholder="" value="" required autofocus>
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Apellido:</label>
              <input class="input form-control" type="text"  name="usuario4"  placeholder="" value="" required autofocus>
          </div>
             <div class="form-group">
                 <label for="recipient-name" class="col-form-label">Correo:</label>
                 <input class="input form-control" type="text"  name="usuario5"  placeholder="" value="" required autofocus>
          </div>
          <div class="form-group">
                <label for="recipient-name" class="col-form-label">Cedula:</label>
                <input class="input form-control" type="text"  name="usuario6"  placeholder="" value="" required autofocus>

          </div>

   
      </div>
      <div class="btn-form">
    
    <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Ingresar">

    <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar"><br><br><br><br>

   </div>
    </div>
  </div>
</div>

</form>
 <br><br>
                                                                                      
   </tbody>         
</TABLE>




</div>
</div>
<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script type="text/javascript"src="js/bootstrap.js"></script>
</body>
<center><script type="text/javascript">
$(document).ready( function () {
    $('#paginacion').DataTable();
  

  

} );
</script>
</html>

<script src="js/productos.js"></script>











             
              
                
           



