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
		
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<link rel="stylesheet" href="dist/css/bootstrap-select.min.css">

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
	
	/*Hacemos override de estas clases para customizar el datepicker con los colores corporativos*/
	.daterangepicker td.active, .daterangepicker td.active:hover {
		background-color: #ff0000;
		border-color: transparent;
		color: #fff;
	}

	.btn-primary {
		background-color: #ff0000;
		border-color: #ff0000;
	}

	.daterangepicker td.in-range {
		background-color: #f8ebed;
		border-color: transparent;
		color: #000;
		border-radius: 0;
	}	
	
	.btn-primary:hover, .btn-primary:active, .btn-primary.hover {
		background-color: #ff0000;
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #ff0000;
		border-color: #ff0000;
	}
	
	#rangoFecha{
		width: 220px;
	}
	
	/*Hacemos override de estas clases para customizar el select  de bootstrap*/
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		color: #fff;
		text-decoration: none;
		background-color: #ff0000;
		outline: 0;
	}
	
	.input-group {
		position: relative;
		display: table;
		border-collapse: separate;
		width: 220px;
	}	
	/*Estilos para el reporte*/
	#datosReporte{
		margin-top: 25px;
	}
	#datosReporte > thead > tr > th{
		color: #ff0000;
		text-align: center;
	}
	#datosReporte>thead>tr>th {
    border-bottom: 2px solid #ff0000;
	}
	#datosReporte>tbody>tr>td{
		border-top: 1px solid #e21225;
		text-align: center;
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
		<li class="">
          <a href="rastreo.php">
            <i class="fa fa-map"></i><span>Rastreo</span>
          </a>
        </li>
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-file"></i><span>Reportes</span>
			<span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li class="active"><a href="reportexempresa.php">Por Empresa</a></li>
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
        Reporte por Empresa
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
		<h4>Empresa</h4>		
		<div id='contenedor_filtro_empresa'></div>
		<h4>Fecha</h4>
		<input type="text" id='rangoFecha' name="daterange"/>
		<div>
			<button id='filtrar' type="button" class="btn btn-danger" style="width: 220px; margin-top: 20px;">Filtrar</button>
			<a href="#"  target='_blank' id="reporte" class="btn btn-default btn-flat" style="width: 220px; margin-top: 20px; margin-left: 30px;">Exportar PDF</a>
			<a href="#"  target='_blank' id="reporte_excel" class="btn btn-default btn-flat" style="width: 220px; margin-top: 20px; margin-left: 30px;">Exportar EXCEL</a>
		</div>

		<table class="table" id="datosReporte">
		  <thead>
			<tr>
			  <th scope="col">Actividad</th>
			  <th scope="col">Fecha Inicio</th>
			  <th scope="col">Fecha Fin</th>
			  <th scope="col">Duraci&oacute;n (Horas)</th>
			  <th scope="col">Distancia (Metros)</th>
			  <th scope="col">Toneladas</th>
			  <th scope="col">Lugar</th>
			  <th scope="col">Traza</th>
			</tr>
		  </thead>
		  <tbody>
		  </tbody>
		</table>
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


<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="dist/js/bootstrap-select.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>

	$( document ).ready(function() {
		
		var idIntervaloActualizacion;
		var empresa;
		var fechain;
		var fechafi
		
		$('#filtrar').on('click',function(){
			
			// Borramos el intervalo anterior...
			clearInterval(idIntervaloActualizacion);
			
			// Definimos un nuevo intervalo...
			idIntervaloActualizacion = setInterval(function(){
			        //console.log('1 minuto');
        			var url = "/obtener_reportexempresa.php?id_empresa=" + empresa + "&fecha_inicial=" + fechain + "&fecha_final=" + fechafi;	
        			
        			$.ajax({
        			url: url,
        			type: 'GET',
        			success: function(resultado){ 
        				var filas = Object.values(JSON.parse(resultado));
        				if(filas.length === 0 ){
        					//$("#datosReporte tbody").html("<tr><td colspan='6' id='filamensaje' style='text-align:center'>No hay datos para esta selecci&oacute;n...</td><tr>");
        				}else{
        					
        					$.each(filas, function( i, item ) {
        					    
        					        $('#filamensaje').remove();
        					    
        					        var fecha = item.fechaInicio;
        					        var fecha_inicio_formateada = fecha.split(" ")[0].split("-")[2] + "/" + fecha.split(" ")[0].split("-")[1] + "/" + fecha.split(" ")[0].split("-")[0] + " " + fecha.split(" ")[1];
        					        fecha = item.fechaFin;
        					        var fecha_fin_formateada = fecha.split(" ")[0].split("-")[2] + "/" + fecha.split(" ")[0].split("-")[1] + "/" + fecha.split(" ")[0].split("-")[0] + " " + fecha.split(" ")[1]; 
        					    
        			        		if($('#'+item.id).length === 0){
                					    var elemento =   `
                                    					   <tr id='${item.id}'>
                                    						  <td>${item.actividad}</td>
                                    						  <td>${fecha_inicio_formateada}</td>
                                    						  <td>${fecha_fin_formateada}</td>
                                    						  <td>${item.duracion}</td>
                                    						  <td>${item.distancia}</td>
                                    						  <td>${item.toneladas}</td>
                                    						  <td>${item.lugar}</td>
                                    						  <td><a href='https://www.app.gestionex.co/traza.php?id_usuario=${item.idUsuario}&fecha_inicio=${item.fechaInicio}&fecha_fin=${item.fechaFin}' target='_blank'>Ver</a></td>
                                    						</tr>
                					                    `;
                
                                        $(elemento).insertBefore( "#datosReporte tbody tr:first" );    
            					}else{
            					    
            					    //if($("#" + item.id + " td:nth-child(3)").html() == "null"){
            					        
            					        $("#" + item.id + " td:nth-child(3)").html(fecha_fin_formateada);  console.log("Fecha Fin:" + fecha_fin_formateada );
            					        $("#" + item.id + " td:nth-child(4)").html(item.duracion);  console.log("Fecha Fin:" + item.duracion );
            					        $("#" + item.id + " td:nth-child(5)").html(item.distancia); console.log("Fecha Fin:" + item.distancia );
            					        $("#" + item.id + " td:nth-child(6)").html(item.toneladas); console.log("Fecha Fin:" + item.toneladas );
            					        $("#" + item.id + " td:nth-child(7)").html(item.lugar);     console.log("Fecha Fin:" + item.lugar );
            					        
            					    //}
            					    
            					}		    
        					    
        					    
        					});

        				}
        			},
        			error: function(data) {
        				alert('Error de red, no se cargaron los datos, favor intente otra vez.');
        			}
        			});				    
			    
			    
			}, 1000);			
			
			
			// Ponemos el cargando en el reporte...
			$("#datosReporte tbody").html("<tr><td colspan='7' style='text-align:center'>cargando...</td><tr>");
		
			    empresa = $('#select_empresa').val();
			    fechain = $('input[name="daterange"]').data('daterangepicker').startDate._d;
				fechain = fechain.getFullYear() + "-" + ( fechain.getMonth() + 1 ) + "-" + fechain.getDate();
			    fechafi = $('input[name="daterange"]').data('daterangepicker').endDate._d;
				fechafi = fechafi.getFullYear() + "-" + ( fechafi.getMonth() + 1 ) + "-" + fechafi.getDate();
			var url = "/obtener_reportexempresa.php?id_empresa=" + empresa + "&fecha_inicial=" + fechain + "&fecha_final=" + fechafi;	
			
			var url_pdf = "http://www.app.gestionex.co/obtener_reportexempresa_pdf.php?id_empresa="+empresa+"&fecha_inicial="+fechain+"&fecha_final="+fechafi;
			var url_excel = "http://www.app.gestionex.co/obtener_reportexempresa_excel.php?id_empresa="+empresa+"&fecha_inicial="+fechain+"&fecha_final="+fechafi;
			$("#reporte").attr("href",url_pdf);
			$("#reporte_excel").attr("href",url_excel);
			
			$.ajax({
			url: url,
			type: 'GET',
			success: function(resultado){ 
				var filas = Object.values(JSON.parse(resultado));
				if(filas.length === 0 ){
					$("#datosReporte tbody").html("<tr><td colspan='7' id='filamensaje' style='text-align:center'>No hay datos para esta selecci&oacute;n...</td><tr>");
				}else{
					
					var htmlfila = "";
					$.each(filas, function( i, item ) {
					  
					  var fecha = item.fechaInicio;
        			  var fecha_inicio_formateada = fecha.split(" ")[0].split("-")[2] + "/" + fecha.split(" ")[0].split("-")[1] + "/" + fecha.split(" ")[0].split("-")[0] + " " + fecha.split(" ")[1];
        			  fecha = item.fechaFin;
        			  var fecha_fin_formateada = fecha.split(" ")[0].split("-")[2] + "/" + fecha.split(" ")[0].split("-")[1] + "/" + fecha.split(" ")[0].split("-")[0] + " " + fecha.split(" ")[1]; 
					  
					  htmlfila += `
					   <tr id='${item.id}'>
						  <td>${item.actividad}</td>
						  <td>${fecha_inicio_formateada}</td>
						  <td>${fecha_fin_formateada}</td>
						  <td>${item.duracion}</td>
						  <td>${item.distancia}</td>
						  <td>${item.toneladas}</td>
						  <td>${item.lugar}</td>
						  <td><a href='https://www.app.gestionex.co/traza.php?id_usuario=${item.idUsuario}&fecha_inicio=${item.fechaInicio}&fecha_fin=${item.fechaFin}' target='_blank'>Ver</a></td>
						</tr>
					  `;
					});	
					$("#datosReporte tbody").html(htmlfila);
					
				}
			},
			error: function(data) {
				alert('Error de red, no se cargaron los datos, favor intente otra vez.');
			}
			});			
			
		});
		
		$("#contenedor_filtro_empresa").html('cargando filtro empresas...');
		// Cargamos la lista de empresas
		$.ajax({
		url: '/obtener_empresas.php',
		type: 'GET',
		success: function(resultado){ 
			var empresas = Object.values(JSON.parse(resultado));
			var select_html = "<select id='select_empresa' class='selectpicker' data-live-search='true'>";
			$.each( empresas, function( i, item ) {
				select_html+="<option value='" + item.id + "' data-tokens='ketchup mustard'>" + item.nombre_empresa + "</option>";
			});
			select_html+="</select>";
			$("#contenedor_filtro_empresa").html(select_html);
			$("#select_empresa").selectpicker('refresh');
			
		},
		error: function(data) {
			alert('Error de red, no se cargo el filtro de empresas, favor intente cargar la pagina otra vez.');
		}
		});		
		
		$('input[name="daterange"]').daterangepicker(
		   {

			  format: 'DD/MM/YYYY',
			  locale: {
				  applyLabel: 'Aceptar',
				  cancelLabel: 'Cancelar',
				  fromLabel: 'Desde',
				  toLabel: 'hasta',
				  daysOfWeek: ['D', 'L', 'M', 'X', 'J', 'V','S'],
				  monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			  }
		   }
		);

		// Tomar los valores del date range picker...
		//$('input[name="daterange"]').data('daterangepicker').startDate._d;
		//$('input[name="daterange"]').data('daterangepicker').endDate._d;
		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("font-size","25px");
		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("font-weight","bold");
		$("body > div > aside.main-sidebar > section > ul > li > a > span").css("margin-left","15px");
		$("body > div > aside.main-sidebar > section > ul > li > a > i").css("font-size","25px");
		$('body > div > aside.main-sidebar > section > ul > li > ul > li > a').css("font-size","25px");
		$('.main-header .logo').css("font-size","32px");
		$("body > div > aside.main-sidebar > section > div > div.pull-left.info > p").css("font-size","18px");
		$("body > div > aside.main-sidebar > section > div > div.pull-left.info > a").css("font-size","15px");
		$('body > div > header > nav > a').css('font-size','28px');
		$('body > div > header > nav > a').css('padding-left','15px');
		$('body > div > header > nav > a').css('padding-top','4px');
		$('body > div > header > nav > a').css('padding-right','0px');
		$('body > div > header > nav > a').css('padding-bottom','0px');	
		
	});

</script>	 
</body>
</html>