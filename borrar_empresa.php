<?php
// Llamado: http://localhost:8080/borrar_empresa.php?id_empresa=2
include("conexion.php");

$id_empresa     = $_GET["id_empresa"];


$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); 

mysqli_query($con,"delete from empresa where id=$id_empresa") or die("Error: El dato no se inserto");
mysqli_query($con,"delete from usuario where id_empresa=$id_empresa") or die("Error: El dato no se inserto");
echo "Exito"


?>