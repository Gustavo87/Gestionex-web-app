<?php

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}


class ruta{
		public $posiciones;
		public $posicion_actual;
		public $nombre_ruta;
}
class posicion{
	public $lat;
	public $lng;
}

include("conexion.php");
$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$queryUsuariosxDia  = "
						SELECT DISTINCT
							US.id, US.usuario, EM.nombre_empresa  
						FROM 
							rastreo RA
						INNER JOIN
							usuario US ON RA.id_usuario = US.id 
						INNER JOIN
							empresa EM ON EM.id = US.id_empresa
						WHERE
							DATE(RA.fecha) = DATE(NOW())
					";
					
$resultUsuariosxDia = mysqli_query($con,$queryUsuariosxDia);  	

$arrayRutas = new ArrayObject();

while ($registroUsuariosxDia = mysqli_fetch_array($resultUsuariosxDia)){
	 $registroUsuariosxDia = array_map('utf8_encode', $registroUsuariosxDia);
	 $queryRastreoxUsuario  = "
								SELECT RA.latitud, RA.longitud, RA.fecha
								FROM rastreo RA
								WHERE RA.id_usuario = $registroUsuariosxDia[id]
								AND DATE(RA.fecha) = DATE(NOW())
								ORDER BY RA.fecha ASC
							  ";
							  
	$resultRastreoxUsuario = mysqli_query($con,$queryRastreoxUsuario); 
	$objetoRuta      = new ruta();
	$objetoRuta->posicion_actual = new posicion();
	$arrayPosiciones = new ArrayObject();
	
	while ($registroRastreoxUsuario = mysqli_fetch_array($resultRastreoxUsuario)){
		$objetoPosicion  = new posicion();
		$objetoPosicion->lat  = floatval($registroRastreoxUsuario['latitud']);
		$objetoPosicion->lng = floatval($registroRastreoxUsuario['longitud']);
		$arrayPosiciones->append($objetoPosicion);
		$objetoRuta->posicion_actual->lat = floatval($registroRastreoxUsuario['latitud']);
		$objetoRuta->posicion_actual->lng = floatval($registroRastreoxUsuario['longitud']); 
		$objetoRuta->nombre_ruta = "$registroUsuariosxDia[usuario] $registroUsuariosxDia[nombre_empresa]. Fecha: $registroRastreoxUsuario[fecha]";
	}
	
	$objetoRuta->posiciones = $arrayPosiciones;
	$arrayRutas->append($objetoRuta);

}


//var_dump(utf8ize($arrayRutas));

$myJSON = json_encode($arrayRutas);
echo $myJSON;
  
mysqli_close($con); 

?>