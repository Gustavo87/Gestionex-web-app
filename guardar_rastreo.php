<?php
// Llamado: http://www.app.gestionex.co/guardar_rastreo.php?id_usuario=13&latitud=12.42975345&longitud=-86.86628559
include("conexion.php");

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

//var_dump($_POST);

// Guardamos el Log

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); // en mysql_select_db la con es el 2do parametro.

mysqli_query($con,"INSERT INTO log(url,llamado) values('http://www.app.gestionex.co/guardar_rastreo.php','$rest_json')") or die("Error: El dato no se inserto");




$reg_insertados= "";


foreach($_POST as $objeto){

    $insertar = "INSERT INTO rastreo(id_usuario,fecha,latitud,longitud,distancia,id_app) values(".$objeto["id_usuario"].",'".$objeto["fecha"]."',".$objeto["latitud"].",".$objeto["longitud"].",".$objeto["distancia"].",".$objeto["id_local"].")";
    //echo $insertar."\n";
    mysqli_query($con,$insertar) or die("Error: El dato no se inserto");    
    $reg_insertados = $reg_insertados.$objeto["id_local"].",";
}

$reg_insertados = "(".$reg_insertados."0)";

//pasar el id de usuario a esta query
$query = "
			select id,id_app from rastreo where id_app in $reg_insertados
		";
		
//echo $query;		
$lista = "";

$result = mysqli_query($con,$query);  	

while ($registro = mysqli_fetch_array($result)){  
  $lista = $lista.$registro['id_app']."-".$registro['id']."|";
}  

$lista = $lista."0-0";

echo $lista;

?>