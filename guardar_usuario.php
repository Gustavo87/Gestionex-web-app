<?php
include("conexion.php");

$id_empresa  = $_GET["id_empresa"];
$usuario     = $_GET["usuario"];
$contrasena  = $_GET["contrasena"];
 
$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"INSERT INTO usuario(id_empresa,usuario,contrasena) values($id_empresa,'$usuario','$contrasena')") or die("Error: El dato no se inserto");

echo "Usuario insertado con exito"
?>