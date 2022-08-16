<?php
include ('0.conexion.php');



$edit_usu=$_POST['edit_usu'];
$edit_con=$_POST['edit_con'];
$edit_tipo=$_POST['edit_tipo'];

 
     $query = "UPDATE usuarios SET  usuario ='$edit_usu' ,

                                      pass='$edit_con', 

                                      tipo='$edit_tipo'
                                        ";
     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:24.principalparacrearusuario.php");
      
  echo "SE BORRO EL REGISTRO";
?>


