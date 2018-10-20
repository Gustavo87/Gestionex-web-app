<?php 
	include("validar_sesion.php");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
          html {
              height: 100%;
            }
            body {
          height: 100%;
          margin: 0;
          padding:0
        }

        #map {
          height: 100%;
          width: 100%;
        }
    </style>
    <!-- jQuery 3 -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Google Maps Javascript API-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT65ymAmhcS9GzeBVFyxj9TGs1pga3_S0"></script>
    <script>
		$( document ).ready(function() {
			
			var id_usuario   = <?php echo $_GET['id_usuario'] ?>;
			var fecha_inicio = <?php echo "'".$_GET['fecha_inicio']."'" ?>;
			var fecha_fin    = <?php echo "'".$_GET['fecha_fin']."'" ?>;
			console.log(id_usuario);
			console.log(fecha_inicio);
			console.log(fecha_fin);
			console.log("/obtener_traza.php?id_usuario=" + id_usuario + "&fecha_inicio=" + fecha_inicio + "&fecha_fin=" + fecha_fin);
		$.ajax({
			url: '/obtener_traza.php?id_usuario=' + id_usuario + '&fecha_inicio=' + fecha_inicio + '&fecha_fin=' + fecha_fin,
			type: 'GET',
			success: function(resultado){ 
				var ruta = Object.values(JSON.parse(resultado));
				console.log(ruta);
				mostrar_rutas(ruta);
			},
			error: function(data) {
				alert('Error de red, no se cargo el filtro de empresas, favor intente cargar la pagina otra vez.');
			}
		});	
			
			//google.maps.event.addDomListener(window,"load",initMap);
		});
		
	function mostrar_rutas(rutas){
	    
		//lat -2.168188
		//lng -79.933739
		
		var mapOptions = { center: new google.maps.LatLng(rutas[0].lat,rutas[0].lng), zoom: 18 };
		var map = new google.maps.Map(document.getElementById("map"),mapOptions);
				
		recorrido = new google.maps.Polyline({
				path: rutas,
				geodesic: true,
				strokeColor: '#FF0000',
				strokeOpacity: 1.0,
				strokeWeight: 2
		});
		recorrido.setMap(map);
				
		posicion_actual = new google.maps.Marker({
				position: new google.maps.LatLng(rutas[0].lat,rutas[0].lng),
				title: "Punto de partida",
				map:map
		});
	}		
	//});
//}	 	
		
    </script>
  </head>
    <body>
      <div id="map"></div>
    </body>
</html>
