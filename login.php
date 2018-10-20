<?php

$usuario     = $_GET["usuario"];
$clave       = $_GET["clave"];
$id			 = 0;

include("conexion.php");

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$query = "
			SELECT id FROM usuario
			WHERE usuario='$usuario' AND contrasena='$clave'
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $id = $registro['id'];
}  

echo $id;

?>
