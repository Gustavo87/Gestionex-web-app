<?php
	include("validar_sesion.php");
?>
<?php
// Llamado: http://localhost:8080/guardar_datos_cuenta.php?correo=gt&clave=44
include("conexion.php");

$correo    = $_GET["correo"];
$clave     = $_GET["clave"];
$usuario   = $_SESSION['username'];

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"UPDATE usuario_web_app SET correo='$correo',contrasena='$clave' where usuario = '$usuario';") or die("Error: El dato no se inserto");

echo "Datos actualizados"
?>