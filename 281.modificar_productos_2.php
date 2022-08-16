<?php
include ('0.conexion.php');





$edit_id=$_POST['edit_id'];
$edit_nom=$_POST['edit_nom'];
$edit_mar=$_POST['edit_mar'];
$edit_cant=$_POST['edit_cant'];
$edit_cant1=$_POST['edit_cant1'];
$edit_fec=$_POST['edit_fec'];
$edit_alm=$_POST['edit_alm'];
$edit_cod=$_POST['edit_cod'];
$edit_tipo=$_POST['edit_tipo'];
$edit_usu=$_POST['edit_usu'];
$edit_gere=$_POST['edit_gere'];
$edit_des=$_POST['edit_des'];


$edit_canttotal2= $edit_cant-$edit_cant1;




 
     $query = "UPDATE productos SET  nombre ='$edit_nom',

                                      marca='$edit_mar', 

                                      cantidad='$edit_canttotal2',

                                      fecha='$edit_fec', 

                                      almacen='$edit_alm', 

                                      codigo='$edit_cod',

                                      tipo='$edit_tipo' ,

                                      usuario='$edit_usu' ,

                                      gerencia='$edit_gere' ,

                                      descripcion='$edit_des'

                                      WHERE '$edit_id'=id
                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());


header("Location: http:122.buscar.php");
      
  echo "SE BORRO EL REGISTRO";
?>

<?php



$edit_id=$_POST['edit_id'];
$edit_nom=$_POST['edit_nom'];
$edit_mar=$_POST['edit_mar'];
$edit_cant=$_POST['edit_cant'];
$edit_cant1=$_POST['edit_cant1'];
$edit_fec=$_POST['edit_fec'];
$edit_alm=$_POST['edit_alm'];
$edit_cod=$_POST['edit_cod'];
$edit_tipo=$_POST['edit_tipo'];
$edit_usu=$_POST['edit_usu'];
$edit_gere=$_POST['edit_gere'];
$edit_des=$_POST['edit_des'];



     $query = "INSERT INTO movimiento(id,nombre,marca,cantidad,fecha,almacen,codigo,tipo,usuario,gerencia,descripcion) VALUES (
                                 '$edit_id','$edit_nom','$edit_mar','$edit_cant1','$edit_fec','$edit_alm','$edit_cod','$edit_tipo','$edit_usu','$edit_gere','$edit_des');" ;

     
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);


 
     

                        


header("Location: http:122.buscar.php");
      
  echo "SE BORRO EL REGISTRO";
?>




