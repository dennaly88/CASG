<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>


<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel" method="post"  action="12.insertarproductos1.php"><center>Ingresar Productos<center></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="input form-reg" method="post"  action="12.insertarproductos1.php" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Producto:</label>
            <input class="input form-control" type="text"  name="usuario"  placeholder="" value="" required autofocus>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input class="input form-control" type="text"  name="usuario1"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad:</label>
            <input class="input form-control" type="text"  name="usuario2"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input class="input form-control" type="date"  name="fecha"  placeholder="" value="" required autofocus>

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Serial:</label>
            <input class="input form-control" type="text"  name="usuario4"  placeholder="" value="" required autofocus>

          </div>


          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <select class="input form-control" name="usuario6" placeholder=""required value="">
    <option selected>Entrada</option>
     <option selected>Salida</option>
