<?php
// Llamado: http://localhost:8080/guardar_inicio_disposicion.php?id_usuario=2
include("conexion.php");

$id_usuario     = $_GET["id_usuario"];
$fecha_inicio   = $_GET["fecha_inicio"];

$id			 = 0;

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); 

//echo "INSERT INTO disposicion(id_usuario,FechaInicio) values($id_usuario,$fecha_inicio";

mysqli_query($con,"INSERT INTO disposicion(id_usuario,FechaInicio) values($id_usuario,'$fecha_inicio')") or die("Error: El dato no se inserto");

$query = "
			SELECT id from disposicion order by id desc limit 1
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $id = $registro['id'];
}  

echo $id;

?>