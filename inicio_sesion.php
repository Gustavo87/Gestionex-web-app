<?php
session_start();
if(isset($_POST['claveDigitada'])){
	$usuario   = $_POST['usuario'];
	$clave     = $_POST['claveDigitada'];
	$id		 = 0;
	include("conexion.php");
	$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
	mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");
	$query = "
			SELECT id FROM usuario_web_app
			WHERE usuario='$usuario' AND contrasena='$clave'
		";
		
	$result = mysqli_query($con,$query);  	

	while ($registro = mysqli_fetch_array($result)){  
	  $id = $registro['id'];
	  $_SESSION['username'] = $usuario;
	  
	}  

	echo $id;	
	
}else{
	header("location: logueo.php");
}


?>