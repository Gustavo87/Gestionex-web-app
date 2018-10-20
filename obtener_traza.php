<?php


class posicion{
	public $lat;
	public $lng;
}

include("conexion.php");

$id_usuario   = $_GET['id_usuario'];
$fecha_inicio = $_GET['fecha_inicio']; 
$fecha_fin    = $_GET['fecha_fin'];

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$query  = "
						Select latitud,longitud from rastreo where id_usuario = $id_usuario and fecha between '$fecha_inicio' and '$fecha_fin' order by fecha asc 
		";

//echo $query;
		
$result = mysqli_query($con,$query);  	

$arrayPosiciones = new ArrayObject();

while ($registro = mysqli_fetch_array($result)){
	
//	echo "1";
//	echo "$registro[latitud]\n";
//	echo "$registro[longitud]\n";
	$objetoPosicion      = new posicion();
	$objetoPosicion->lat  = floatval($registro['latitud']);
	$objetoPosicion->lng = floatval($registro['longitud']);
	$arrayPosiciones->append($objetoPosicion);

}

$myJSON = json_encode($arrayPosiciones);
echo $myJSON;
  
mysqli_close($con); 

?>