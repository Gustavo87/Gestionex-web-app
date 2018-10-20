<?php
include("conexion.php");

$nombre_empresa  = $_GET["nombre_empresa"];
$direccion       = $_GET["direccion"];
$telefono        = $_GET["telefono"];
$nombre_contacto = $_GET["nombre_contacto"];
$email           = $_GET["email"];
 
$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"INSERT INTO empresa(nombre_empresa,direccion,telefono,nombre_contacto,email) values('$nombre_empresa','$direccion','$telefono','$nombre_contacto','$email')") or die("Error: El dato no se inserto");

echo "Empresa insertada con exito"
?>