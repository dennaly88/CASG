

<link rel="shortcut icon" href="img/de.ico">


<?php
session_start();
$_SESSION['usuario'] ;
$var = $_SESSION['usuario'] ;
if($var == null || $var = '')   {
header("Location:index.php");
}
?>



<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <title>CASG</title>

                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



<?php
include ('0.conexion.php');
//extract($_GET);
$id=$_GET['id'];





 
     $query = "SELECT * FROM productos WHERE id='$id'";
     $resulatdo = pg_query($query) or die ("error ");
     $row = pg_fetch_array($resulatdo);

?>



 <link rel="shortcut icon" href="img/de.ico">

<center><div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header card text-white bg-primary mb-3">Modificar Productos</div>
         <div class="card-body text-primary">
          

           <center><form class="input form-reg" method="post"  action="281.modificar_productos.php">
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














  <script type="text/javascript"src="js/bootstrap.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/estilos.css">


                  
                  
            
                </head>
   <body>
  
  
<body>



<div class="modal fade" id="modal.php" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRUEBA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>









  <br><br><br><br><br> <br><br><br><br><br><br><br><br><br >


 
                  
       <footer class="footer py-2 text-xs-center">
         <div class="container">

<p>2020 Departamento de Desarrollo VTV Canal 8</p>
   
    </div>
    </footer > 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>            
    </body>
</html>


















   









           					