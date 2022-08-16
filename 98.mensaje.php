

<link rel="shortcut icon" href="img/de.ico">
<?php

session_start();
include ('0.conexion.php');
$usuario=$_GET["usuario"];

?>


<html>
<head>
<meta charset="utf-8">
<title>CASG</title>
</head>
<body>
<script>

alert("No hay registro en dicho Almacen");
window.location.href ="96.reporteporalmacen.php";
</script>

</body>
</html>