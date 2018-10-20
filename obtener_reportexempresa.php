<?php
// Llamado: http://localhost:8080/obtener_reportexempresa.php?id_empresa=16&fecha_inicial=2018-6-15&fecha_final=2018-6-15
class reporte{
       public $id;
	   public $actividad;
	   public $usuario;
       public $fechaInicio;
       public $fechaFin;
       public $duracion;
       public $toneladas;
       public $lugar;
       public $idUsuario;
       public $distancia;
}

include("conexion.php");

$id_empresa    = $_GET["id_empresa"];
$fecha_inicial = $_GET["fecha_inicial"];
$fecha_final    = $_GET["fecha_final"];

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd"); 

$query  = "
			SELECT
			  id,
			  Actividad,
			  Usuario,
			  FechaInicio,
			  FechaFin,
			  Duracion,
			  toneladas,
			  lugar,
			  idUsuario,
			  truncate(distancia,0) AS distancia
			FROM ((SELECT
			  R.id AS id,
			  'Recoleccion' AS Actividad,
			  U.usuario AS Usuario,
			  R.FechaInicio AS FechaInicio,
			  R.FechaFin AS FechaFin,
			  TIMEDIFF(R.FechaFin, R.FechaInicio) AS Duracion,
			  '-' AS toneladas,
			  '-' AS lugar,
			  U.id AS idUsuario,
			 ((SELECT sum(distancia) FROM 
			rastreo RA WHERE
			id_usuario = U.id  AND RA.fecha between R.FechaInicio and R.FechaFin LIMIT 1) - (SELECT distancia FROM rastreo RA where id_usuario = U.id AND RA.fecha between R.FechaInicio and R.FechaFin LIMIT 1)) as distancia
			FROM recoleccion AS R
			INNER JOIN usuario AS U
			  ON R.id_usuario = U.id
			INNER JOIN empresa AS E
			  ON E.id = U.id_empresa
			WHERE E.id = $id_empresa
			AND DATE(R.FechaInicio) BETWEEN CAST('$fecha_inicial' AS date) AND CAST('$fecha_final' AS date))
			UNION
			(SELECT
			  D.id AS id,
			  'Disposicion' AS Actividad,
			  U.usuario AS Usuario,
			  D.FechaInicio AS FechaInicio,
			  D.FechaFin AS FechaFin,
			  TIMEDIFF(D.FechaFin, D.FechaInicio) AS Duracion,
			  D.Toneladas AS toneladas,
			  D.Lugar AS lugar,
			  U.id AS idUsuario,
			 ((SELECT sum(distancia) FROM 
			rastreo RA WHERE
			id_usuario = U.id  AND RA.fecha between D.FechaInicio and D.FechaFin LIMIT 1) - (SELECT distancia FROM rastreo RA WHERE id_usuario = U.id AND RA.fecha between D.FechaInicio and D.FechaFin LIMIT 1))  as distancia
			FROM disposicion AS D
			INNER JOIN usuario AS U
			  ON D.id_usuario = U.id
			INNER JOIN empresa AS E
			  ON E.id = U.id_empresa
			WHERE E.id = $id_empresa
			AND DATE(D.FechaInicio) BETWEEN CAST('$fecha_inicial' AS date) AND CAST('$fecha_final' AS date))) AS D
			ORDER BY IdUsuario, FechaInicio;
		 ";

										
$result = mysqli_query($con,$query); 

if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

$array  = new ArrayObject();
while ($registro = mysqli_fetch_array($result)){
	$objeto      = new reporte();
	$objeto->id=$registro['id'];
	$objeto->actividad=$registro['Actividad'];
	$objeto->usuario=$registro['Usuario'];
    $objeto->fechaInicio=$registro['FechaInicio'];
    $objeto->fechaFin=$registro['FechaFin'];
    $objeto->duracion=$registro['Duracion'];
    $objeto->toneladas=$registro['toneladas'];
    $objeto->lugar=$registro['lugar'];
    $objeto->idUsuario=$registro[idUsuario];
    $objeto->distancia=$registro[distancia];
	$array->append($objeto);
}

$myJSON = json_encode($array);
echo $myJSON;
 
mysqli_close($con); 

 ?>