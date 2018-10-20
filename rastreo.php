<?php
	include("validar_sesion.php");
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestionex</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css?ver=20180609">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	body.sidebar-collapse > div > header > a > span.logo-mini{
		 width:50px;
	}

	body.sidebar-collapse > div > header > a{
		width:50px;
	}

	body.sidebar-collapse > div > header > nav{
		margin-left: 50px;
	}
	
	.skin-red .main-header li.user-header {
    background-color: #ff0000;
	}
	
	body > div > header > a{
		width: 250px;
	}
	body > div > header > nav{
	margin-left: 250px;
	}
	
	#map {
		height: 700px;
        width: 1000px;
    }
	
</style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="https://www.gestionex.co/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>..</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GESTIONEX</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <!--
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
			-->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/Gestionexicono.png" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <!--
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
			-->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <!--
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
			-->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/Gestionexicono.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/Gestionexicono.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']; ?> - Administrador
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--
			  <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>
			  -->
              <!-- Menu Footer-->
<li class="user-footer">
				<div class="pull-left">
                  <a href="configurar_cuenta.php" class="btn btn-default btn-flat">Configurar Cuenta</a>
                </div>
                <div class="pull-right">
                  <a href="cerrar_sesion.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
</li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--
		  <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
		  -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/Gestionexicono.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!--
	  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
	  -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
	    <li class="header"></li>
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Escritorio</span>
          </a>
        </li>
		<li class="">
          <a href="crear_empresa.php">
            <i class="fa fa-industry"></i><span>Crear Empresa</span>
          </a>
        </li>
		<li class="">
          <a href="crear_usuario.php">
            <i class="fa fa-user"></i><span>Crear Usuario</span>
          </a>
        </li>
		<li class="active">
          <a href="rastreo.php">
            <i class="fa fa-map"></i><span>Rastreo</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i><span>Reportes</span>
			<span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li class=""><a href="reportexempresa.php">Por Empresa</a></li>
            <li><a href="reportexusuario.php">Por Usuario</a></li>
          </ul>
        </li>
	   <!--		
	   <li class="header"></li>
        
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
		-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rastreo
        <small></small>
      </h1>
      <!--
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
	  -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		<div id="map"></div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <!--
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
   -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT65ymAmhcS9GzeBVFyxj9TGs1pga3_S0"></script>
<script>

    var arregloMarcas = [];

	$( document ).ready(function() {

		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("font-size","25px");
		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("font-weight","bold");
		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("margin-left","15px");
		$("body > div > aside.main-sidebar > section > ul > li > a > i").css("font-size","25px");
		$('body > div > aside.main-sidebar > section > ul > li > ul > li > a').css("font-size","25px");
	/*
		$(".main-sidebar").css("width","250px");
		$("body > div > header > a").css("width","250px");
		$("body > div > header > nav").css("margin-left","250px");
		$("body > div > div.content-wrapper").css("margin-left","250px");
	*/
		$('.main-header .logo').css("font-size","32px");
		$("body > div > aside.main-sidebar > section > div > div.pull-left.info > p").css("font-size","18px");
		$("body > div > aside.main-sidebar > section > div > div.pull-left.info > a").css("font-size","15px");
		$('body > div > header > nav > a').css('font-size','28px');
		$('body > div > header > nav > a').css('padding-left','15px');
		$('body > div > header > nav > a').css('padding-top','4px');
		$('body > div > header > nav > a').css('padding-right','0px');
		$('body > div > header > nav > a').css('padding-bottom','0px');
		
		//google.maps.event.addDomListener(window,"load",initMap);
		initMap();
	

	});
	
	function initMap() {
//		var mapOptions = { center: new google.maps.LatLng(-2.168188,-79.933739), zoom: 12 };
//		var map = new google.maps.Map(document.getElementById("map"),mapOptions);
				
		/*
		var rutas = [
						{
						  "posiciones": [
											 {lat: 12.434842, lng: -86.879077},
											 {lat: 12.436711, lng: -86.879244},
											 {lat: 12.438061, lng: -86.876726}
										],
						   "posicion_actual": {lat: 12.438061, lng: -86.876726},
						   "nombre_ruta" : "Gustavo Baca - Gestionex. Fecha: 12 Junio 2018. 3:00 p.m"
						},
						{
						  "posiciones": [
											{lat: 12.438448, lng: -86.880546},
											{lat: 12.435661, lng: -86.881565},
											{lat: 12.436447, lng: -86.883325}
										],
						   "posicion_actual": {lat: 12.436447, lng: -86.883325},
						   "nombre_ruta" : "Carlos - Agencia Activa Digital. Fecha: 12 Junio 2018. 5:00 p.m"		  
						}
					];
		*/
		
		var mapOptions = { center: new google.maps.LatLng(-2.168188,-79.933739), zoom: 5 };
		var map = new google.maps.Map(document.getElementById("map"),mapOptions);
		
		setInterval(function () {
		
    		$.ajax({
    		url: '/obtener_rastreo.php',
    		type: 'GET',
    		success: function(resultado){ 
    			var rutas = [];
    			var rutaActual;
    			$.each( Object.values(JSON.parse(resultado)), function( i, item ) {
    				rutaActual = {};
    				rutaActual.nombre_ruta     = item.nombre_ruta;
    				rutaActual.posicion_actual = item.posicion_actual;
    				rutaActual.posiciones      = Object.values(item.posiciones);
    				rutas.push(rutaActual);
    			});
    			//console.log(rutas); console.log(rutas[0].posiciones[0].latitud)
    			mostrar_rutas(rutas,map);
    		},
    		error: function(data) {
    			alert('Error de red, no se cargo el filtro de empresas, favor intente cargar la pagina otra vez.');
    		}
    		});	
		
			
        }, 1000);
		
	
					
//		mostrar_rutas(rutas);
	}
	
	function borrarMarcas(){
	    
	   for (var i = 0; i < arregloMarcas.length; i++) {
          arregloMarcas[i].posicion.setMap(null);
        }
        
	}

	function mostrar_rutas(rutas,map){
	
	    borrarMarcas();
	
//		var mapOptions = { center: new google.maps.LatLng(-2.168188,-79.933739), zoom: 12 };
//		var map = new google.maps.Map(document.getElementById("map"),mapOptions);
		
		var posiciones;
		var recorrido;
		//var posicion_actual;
		
		$.each( rutas, function( i, item ) {
			
    		var minuto_objeto = item.nombre_ruta.split("Fecha: ")[1].split(" ")[1].split(":")[1];
    		var minuto_actual = (new Date()).getMinutes();
    		if(minuto_objeto==minuto_actual){
    		
        		posiciones = item.posiciones;
    			
    			for (var i = 0; i < arregloMarcas.length; i++) {
                    var usuarioVigente = item.nombre_ruta.split(".")[0];
                    if(arregloMarcas[i].usuario == usuarioVigente){
                        arregloMarcas[i].posicion.setMap(null);
                    }
                }
    			
    		
    			latitud  = item.posicion_actual.lat;
    			longitud = item.posicion_actual.lng;
    			var posicion_actual = new google.maps.Marker({
    				position: new google.maps.LatLng(latitud,longitud),
    				title: item.nombre_ruta,
    				map:map
    			});
    			
    			var ObjetoMarcas = {};
    			ObjetoMarcas.usuario  = item.nombre_ruta.split(".")[0];
    			ObjetoMarcas.posicion = posicion_actual;
    			
    			arregloMarcas.push(ObjetoMarcas);
    		
    		}
		
		});
	}	 		  
	
</script>	 
</body>
</html>