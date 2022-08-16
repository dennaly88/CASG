<?php
 

$conexion=pg_connect("host=192.168.6.35 port=5432 dbname=inventario  user=postgres password=postgres") or die 
     ("PROBLEMASSSSSSSSS
     	" . pg_last_error());
 
 
if(!$conexion) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "\n";
}
 

 
?>