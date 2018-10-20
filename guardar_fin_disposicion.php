<?php
include("conexion.php");
$lista = "0";


$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); 

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

//echo "Valor: ".$_POST[0][7];
//var_dump($_POST);
//echo count($_POST);
//var_dump($_POST[0]["toneladas"]);
//echo $_POST[0]["toneladas"];

//$objetos = json_decode(json_encode($_POST),true);
//$objetos = json_decode($_POST[0]);

//var_dump($objetos);

$usuario;
foreach($_POST as $objeto){
    
 // echo "UPDATE disposicion SET FechaFin=$objeto->fecha_final,Toneladas=$objeto->toneladas,Lugar='$objeto->lugar' WHERE id=$objeto->id_servicio";
  
  $usuario = $objeto["id_usuario"];
  //echo "UPDATE disposicion SET FechaFin='".$objeto["fecha_final"]."',Toneladas=".$objeto["toneladas"].",Lugar='".$objeto["lugar"]."' WHERE id=".$objeto["id_servicio"];
  mysqli_query($con,"UPDATE disposicion SET FechaFin='".$objeto["fecha_final"]."',Toneladas=".$objeto["toneladas"].",Lugar='".$objeto["lugar"]."' WHERE id=".$objeto["id_servicio"]) or die("Error: El dato no se inserto");
  echo $value->sm_id;
}

//pasar el id de usuario a esta query
$query = "
			select id from disposicion where FechaFin is not NULL and id_usuario=$usuario
		";
		
//echo $query;		

$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $lista = $lista. "|".$registro['id'];
}  

echo $lista;

?>