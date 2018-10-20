<?php 
    $metros = 0;
	$latitudes  = array(12.431922,12.432221,12.432553);
	$longitudes = array(-86.870375,-86.869816,-86.869968);
	
	$contador = count($latitudes) - 2;
	for ($i = 0; $i <= $contador; $i++) {
		
		$j = $i + 1;
		$direccionInicio = "$latitudes[$i],$longitudes[$i]";
		$direccionFin    = "$latitudes[$j],$longitudes[$j]";
        //echo "$direccionInicio\n";
        //echo "$direccionFin\n";
		$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=".$direccionInicio."&destinations=".$direccionFin."&key=AIzaSyCT65ymAmhcS9GzeBVFyxj9TGs1pga3_S0";
		echo "$urlApi\n";
		$result = file_get_contents($urlApi);
		$data = json_decode($result, true);
		$metros +=  $data['rows'][0]['elements'][0]['distance']['value'];
	}
	
    echo "La distancia recorrida en metros: $metros";
?>
