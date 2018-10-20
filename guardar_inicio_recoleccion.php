<?php
// Llamado: http://localhost:8080/guardar_inicio_recoleccion.php?id_usuario=2
include("conexion.php");

$id_usuario     = $_GET["id_usuario"];
$fecha_inicial  = $_GET["fecha_inicio"];  
//echo $fecha_inicial;
//echo "INSERT INTO recoleccion(id_usuario,FechaInicio) values($id_usuario,'$fecha_inicial')";
$id			 = 0;

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"INSERT INTO recoleccion(id_usuario,FechaInicio) values($id_usuario,'$fecha_inicial')") or die("Error: El dato no se inserto");

$query = "
			SELECT id from recoleccion order by id desc limit 1
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $id = $registro['id'];
}  

echo $id;'$fecha_inicial'

?>