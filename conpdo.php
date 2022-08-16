<?php

$servidor="postgres:dbname=inventario;host=localhost";
$user="postgres";
$password="123456";


try{


	$pdo= new PDO ($servidor,$user,$password);
	echo "CONEXION EXITOSA ";
}catch(PDOException $e){

	echo "CONEXION MALA " .$e->getMessage();
}


?>