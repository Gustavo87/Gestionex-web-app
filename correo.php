<?php
// Llamado: http://localhost:8080/correo.php?correo=gtellez88@gmail.com

$correo       = $_GET["correo"];

$flag_correo = 0;

include("conexion.php");

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");


$query = "
			SELECT correo FROM usuario_web_app
			WHERE usuario='Carlos Gestionex' and correo='$correo'
		";
		
$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $flag_correo = 1;
} 

if($flag_correo == 1){
	$clave_autogenerada = substr( md5(microtime()), 1, 8);
	//echo $clave_autogenerada;
	
	$mail = "<h1 style='padding-left:20px;background-color:#ff0000; color:#ffffff'>Gestionex</h1><p>Se ha generado la siguiente contrase&ntilde;a:<br><b style='font-size: 30px'>$clave_autogenerada</b><br><br><p>Este es un correo generado autom&aacute;ticamente</p></p>";
	//Titulo
	$titulo = "[Gestionex] Clave de acceso";
	//cabecera
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	//direcci贸n del remitente 
	$headers .= "From: Gestionex < gtellez87@gmail.com >\r\n";
	//Enviamos el mensaje a tu_dirección_email 
	$bool = mail($correo,$titulo,$mail,$headers);
	if($bool){
		// Modificar clave de usuario...
		mysqli_query($con,"UPDATE usuario_web_app SET contrasena='$clave_autogenerada' WHERE usuario='Carlos Gestionex'") or die("Error: El dato no se inserto");
		echo "Mensaje enviado, verifique la nueva clave en su correo. Verifique en la carpeta de spam";
	}else{
		echo "Mensaje no enviado, intente nuevamente";
	}
	
}else{
	echo "Correo Incorrecto";
}

/*
$mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Geeky Theory < gtellez87@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("gtellez87@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
*/
 ?>