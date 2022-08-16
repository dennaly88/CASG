<link rel="shortcut icon" href="img/de.ico">  
<?php
session_start();
$var=$_SESSION['usuario'] ;
if($var == null || $var = '')   {
session_unset();
session_destroy();
  
}
?>

        <nav class="navbar navbar-dark bg-primary sticky-top">
          <img src="" >
        	<br>
  	    </nav>                                      

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  	<img src="img/logo.png" >

    <p align="center"><font face="" color="#FFFFFF"><b><?php echo  "  Bienvenido al Sistema :  " . $_SESSION['usuario']; ?></b> </font>

  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">

        <a class="nav-link" href="4.paginaprincipal.php">VTV<span class="sr-only">(current)</span></a>
      
      <li class="nav-item dropdown">
        <ul class="navbar-nav mx-auto">



          
      <li class="nav-item active">
        <center><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="20.mensajecrearusuario.html">Principal</a>
          
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="8.principaldeingresoproductos.php">Principal</a>
          	
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Stock
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <center><a class="dropdown-item" href="122.buscar.php">Principal</a>
            
           
        </div>
      </li>
     
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Almacenes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="15.principalderegistraralmacen.php">Opciones</a>
        </div>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="reporte/movimiento.php" target="_blank">Movimiento</a>
          <center><a class="dropdown-item" href="reporte/reporte.php" target="_blank">Ingresos</a>
           <center><a class="dropdown-item" href="96.reporteporalmacen.php">Almacen</a>
            <center><a class="dropdown-item" href="112.reporteporproductos.php">Productos</a>
            <center><a class="dropdown-item" href="114.reporte.php">Stocks Individual</a>
              <center><a class="dropdown-item" href="reporte/stockgeneral.php">Stocks General</a>
            <center><a class="dropdown-item" href="102.principalestadistica.php" target="_blank">Estadisticas</a>	
          
        </div>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movimientos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="109.movimiento.php">Visualizar</a>
            
        </div>
      </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buscar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="18.principaldebusquedageneral.php">General</a>
            <a class="dropdown-item" href="53.busquedaresulta.php">Por Productos</a>
            <a class="dropdown-item" href="74.busquedaalmacen.php">Por Almacenes</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Herramientas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <center><a class="dropdown-item" href="110.herramientas.php" target="_blank">Calculadora</a>
       <center><a class="dropdown-item" href="111.herramientas.php" target="_blank">Calendario</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="101.cerrar.php">Salir</a>
        <li class="nav-item active">
          <li class="nav-item">
        <a class="nav-link" href=""></a>
        <li class="nav-item active">
           
      </li>
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="">

        <?php 
$time = time();

echo  date("d-m-Y   (h:i:s)", $time);

?></a>
        <li class="nav-item active">
           
      </li>

 </ul>
  </div>


</nav>

<br><br>
