<?php
    // llamado: http://localhost:8080/obtener_usuariosxempresa.php?id_empresa=16
	class usuario{
		public $id;
		public $usuario;
		public function __construct ( $id, $usuario ) {
			$this->id = $id;
			$this->usuario = $usuario;
		}
	}

	$id_empresa     = $_GET["id_empresa"];
	
	$array = new ArrayObject();	
	
	include("conexion.php");
	
	$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
	mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");
	
	$query = "select id,usuario from usuario where id_empresa = $id_empresa"; 
	
	$result = mysqli_query($con,$query);  	

    while ($registro = mysqli_fetch_array($result)){  
      $registro = array_map('utf8_encode', $registro);    
      $array->append(new usuario($registro['id'],$registro['usuario']));
	}  


	mysqli_close($con); 
	$myJSON = json_encode($array);
	echo $myJSON;
	
?>

