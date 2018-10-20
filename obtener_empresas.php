<?php

	class empresa{
		public $id;
		public $nombre_empresa;
		public function __construct ( $id, $nombre_empresa ) {
			$this->id = $id;
			$this->nombre_empresa = $nombre_empresa;
		}
	}
	
$arrayobj = new ArrayObject();	

include("conexion.php");

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
	
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$query = "select * from empresa"; 
$result = mysqli_query($con,$query);  	

    while ($registro = mysqli_fetch_array($result)){  
      $registro = array_map('utf8_encode', $registro);
      $arrayobj->append(new empresa($registro['id'],$registro['nombre_empresa']));
	}  


mysqli_close($con); 
//var_dump($arrayobj);

$myJSON = json_encode($arrayobj);
//$myJSON = json_encode(array_map('utf8_encode', $arrayobj));
//var_dump($myJSON);
echo $myJSON;

?>
