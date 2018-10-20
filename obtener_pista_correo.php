<?php

$pista_correo = "";

include("conexion.php");

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");


$query = "
			SELECT correo FROM usuario_web_app
			WHERE usuario='Carlos Gestionex'
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $pista_correo = $registro['correo'];
}  

$cadena = explode ("@", $pista_correo); 
echo substr($cadena[0], 0, 3)."***@$cadena[1]";
?>