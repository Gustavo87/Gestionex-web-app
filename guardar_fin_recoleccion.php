<?php
// Llamado: http://localhost:8080/guardar_fin_recoleccion.php?id_recoleccion=8
include("conexion.php");
$id			 = 0;
$id_recoleccion     = $_GET["id_recoleccion"];
$fecha_final        = $_GET["fecha_final"];

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"UPDATE recoleccion SET FechaFin='$fecha_final' WHERE id=$id_recoleccion") or die("Error: El dato no se inserto");

$query = "
			select id from recoleccion where FechaFin is not NULL and id=$id_recoleccion
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $id = $registro['id'];
}  

echo $id;

?>