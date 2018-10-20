<?Php

$id_usuario     = $_GET["id_usuario"];
$fecha_inicial  = $_GET["fecha_inicial"];
$fecha_final    = $_GET["fecha_final"];

include("conexion.php");

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$resultadoNombre = mysqli_query($con,"Select usuario from usuario where id =".$id_usuario);  	
$nombre = "";
while ($registro = mysqli_fetch_array($resultadoNombre)){
    
    $nombre =  $registro['usuario'];
    
}

/** Se agrega la libreria PHPExcel */
 require_once 'PHPExcel.php';
 
// Se crea el objeto PHPExcel
 $objPHPExcel = new PHPExcel();
 
 $tituloReporte = $nombre." desde el ". $fecha_inicial ." al ". $fecha_final;
 
 $titulosColumnas = array('ACTIVIDAD', 'FECHA INICIO', 'FECHA FIN', 'DURAC.', 'DISTAN.','TON.','LUGAR');
 
 // Se combinan las celdas A1 hasta D1, para colocar ahí el titulo del reporte
$objPHPExcel->setActiveSheetIndex(0)
    ->mergeCells('A1:G1');
 
// Se agregan los titulos del reporte
$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1',$tituloReporte) // Titulo del reporte
    ->setCellValue('A3',  $titulosColumnas[0])  //Titulo de las columnas
    ->setCellValue('B3',  $titulosColumnas[1])
    ->setCellValue('C3',  $titulosColumnas[2])
    ->setCellValue('D3',  $titulosColumnas[3])
	->setCellValue('E3',  $titulosColumnas[4])
	->setCellValue('F3',  $titulosColumnas[5])
	->setCellValue('G3',  $titulosColumnas[6])
	;
	

 
/*
$html= "<img src='logo.jpg' width='100px' height='50px'><br><br><br><br>";
$html= $html."<font face='arial' size='15px'>".$nombre." desde el ". $fecha_inicial ." al ". $fecha_final ."</font><BR><BR>";
$html= $html. '<table border="1">';
// Encabezado del Reporte...
// Cuerpo del Reporte
*/

$con = mysqli_connect($host,$user,$pasw) or die("Error: problemas al conectar con el servidor de db"); 
mysqli_select_db($con,$db) or die("Error: problemas al conectar con la bd");

$query  = "
			SELECT
			  Actividad,
			   DATE_FORMAT(FechaInicio, '%Y-%m-%d %H:%i')  as 'FechaInicio',
			  DATE_FORMAT(FechaFin, '%Y-%m-%d %H:%i')  as 'FechaFin',
			  Duracion,
			  toneladas,
			  lugar,
			  truncate(distancia,0) AS distancia
			FROM ((SELECT
			  'Recoleccion' AS Actividad,
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
			WHERE U.id = $id_usuario
			AND DATE(R.FechaInicio) BETWEEN CAST('$fecha_inicial' AS date) AND CAST('$fecha_final' AS date))
			UNION
			(SELECT
			  'Disposicion' AS Actividad,
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
			WHERE U.id = $id_usuario
			AND DATE(D.FechaInicio) BETWEEN CAST('$fecha_inicial' AS date) AND CAST('$fecha_final' AS date))) AS D
			ORDER BY FechaInicio;
		 ";
		
$result = mysqli_query($con,$query);  	
/*
 $i = 4; //Numero de fila donde se va a comenzar a rellenar
 while ($fila = $resultado->fetch_array()) {
     $objPHPExcel->setActiveSheetIndex(0)
         ->setCellValue('A'.$i, $fila['alumno'])
         ->setCellValue('B'.$i, $fila['fechanac'])
         ->setCellValue('C'.$i, $fila['sexo'])
         ->setCellValue('D'.$i, $fila['carrera']);
     $i++;
 }*/

$i = 4;
while ($registro = mysqli_fetch_array($result)){ 
    
    $fecha = $registro['FechaInicio'];
	$fecha_inicio_formateada = explode("-",explode(" ",$fecha)[0])[2]."/".explode("-",explode(" ",$fecha)[0])[1]."/".explode("-",explode(" ",$fecha)[0])[0]. " ".explode(" ",$fecha)[1];
	$fecha = $registro['FechaFin'];
	$fecha_fin_formateada = explode("-",explode(" ",$fecha)[0])[2]."/".explode("-",explode(" ",$fecha)[0])[1]."/".explode("-",explode(" ",$fecha)[0])[0]. " ".explode(" ",$fecha)[1];
    
     $objPHPExcel->setActiveSheetIndex(0)
         ->setCellValue('A'.$i, $registro['Actividad'])
         ->setCellValue('B'.$i, $fecha_inicio_formateada)
         ->setCellValue('C'.$i, $fecha_fin_formateada)
         ->setCellValue('D'.$i, $registro['Duracion'])
         ->setCellValue('E'.$i, $registro['distancia'])
         ->setCellValue('F'.$i, $registro['toneladas'])
         ->setCellValue('G'.$i, $registro['lugar']);
         
     $i++;
}  
$estiloTituloReporte = array(
    'font' => array(
        'name'      => 'Verdana',
        'bold'      => true,
        'italic'    => false,
        'strike'    => false,
        'size' =>16,
        'color'     => array(
            'rgb' => '000000'
        )
    ),
    'fill' => array(
      'type'  => PHPExcel_Style_Fill::FILL_SOLID,
      'color' => array(
            'argb' => 'FFFFFF')
  ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE
        )
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation' => 0,
        'wrap' => TRUE
    )
);
 
$estiloTituloColumnas = array(
    'font' => array(
        'name'  => 'Arial',
        'bold'  => true,
        'color' => array(
            'rgb' => 'FFFFFF'
        )
    ),
    'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
  'rotation'   => 90,
        'startcolor' => array(
            'rgb' => 'FF0000'
        ),
        'endcolor' => array(
            'argb' => 'FF0000'
        )
    ),
    'borders' => array(
        'top' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
            'color' => array(
                'rgb' => 'FF0000'
            )
        ),
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
            'color' => array(
                'rgb' => 'FF0000'
            )
        )
    ),
    'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
    )
);
 
$estiloInformacion = new PHPExcel_Style();
$estiloInformacion->applyFromArray( array(
    'font' => array(
        'name'  => 'Arial',
        'color' => array(
            'rgb' => '000000'
        )
    ),
    'fill' => array(
  'type'  => PHPExcel_Style_Fill::FILL_SOLID,
  'color' => array(
            'argb' => 'FFFFFF')
  ),
    'borders' => array(
        'left' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN ,
      'color' => array(
              'rgb' => 'FFFFFF'
            )
        )
    )
));


$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->applyFromArray($estiloTituloReporte);
$objPHPExcel->getActiveSheet()->getStyle('A3:G3')->applyFromArray($estiloTituloColumnas);
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:G".($i-1));

for($i = 'A'; $i <= 'G'; $i++){
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
}

// Se asigna el nombre a la hoja
$objPHPExcel->getActiveSheet()->setTitle('Reporte por Usuario');
 
// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
$objPHPExcel->setActiveSheetIndex(0);
 
// Inmovilizar paneles
//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

// Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ReportexUsuario.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

?>


