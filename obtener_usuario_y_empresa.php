<?php


class usuario{
	public $nombre;
	public $empresa;
	public $id_usuario;
}

include("conexion.php");


$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$query  = "
			SELECT U.usuario, E.nombre_empresa, U.id from usuario as U join empresa as E on U.id_empresa = E.id
		";

		
$result = mysqli_query($con,$query);  	

$arrayUsuarios = new ArrayObject();

while ($registro = mysqli_fetch_array($result)){
	$registro = array_map('utf8_encode', $registro);
	$objetoUsuario      = new usuario();
	$objetoUsuario->nombre      = $registro['usuario'];
	$objetoUsuario->empresa     = $registro['nombre_empresa'];
	$objetoUsuario->id_usuario  = $registro['id'];
	$arrayUsuarios->append($objetoUsuario);

}

$myJSON = json_encode($arrayUsuarios);
echo $myJSON;
  
mysqli_close($con); 

?>

