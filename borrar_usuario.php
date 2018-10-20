<?php
// Llamado: http://localhost:8080/borrar_empresa.php?id_empresa=2
include("conexion.php");

$id_usuario     = $_GET["id_usuario"];


$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); 

mysqli_query($con,"delete from usuario where id=$id_usuario") or die("Error: El dato no se inserto");

echo "Exito"


?>