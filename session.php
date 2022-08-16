<link rel="shortcut icon" href="img/de.ico">

<?php

session_start();
function verificar_sesion(){
   if(!isset($_SESSION['usuario'])){
   unset($_SESSION);
   header("location: index.php");

}
}



?>