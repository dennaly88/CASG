<?php
 

$conexion=pg_connect("host=localhost port=5432 dbname=inventario  user=postgres password=123456") or die 
     ("PROBLEMASSSSSSSSS
     	" . pg_last_error());
 
 
if(!$conexion) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "\n";
}
 

 
?>