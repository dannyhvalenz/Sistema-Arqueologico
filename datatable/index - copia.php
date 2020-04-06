<?php
	require 'conexion.php';
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!--<script src="js/jquery.dataTables.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "conteo_colecciones.php"
				});	
			});
			
		</script>
		<style>
            .navbar-default navbar-fixed-top li a:hover, .navbar-nav li.active a {
                background-color: #fff !important;
              }
        </style>
	</head>
	
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" style="background: #36622C">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#">Proyecto</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a href="index.php">Análsis de pastas</a></li>
                <li class="nav-item"><a href="index%20-%20copia.php">Conteo de colecciones</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="fa fa-sign-out"></span> Usuario</a></li>
              </ul>
            </div>
          </div>
        </nav>
        
        <div class="" style="margin:35px;margin-left:150px">
           <div class="container-fluid text-center">
            <h1><b>Análisis de Pastas</b></h1>
        </div>
            <div class="row">
                <!--BOTON AGREGAR REGISTRO-->
                <a href=".php" class="btn btn-success btn-lg">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Nuevo Registro
                </a>
            </div>
        </div>
		<div class="" style="margin-left:5px; margin-right:5px">
			<br>
			<!-- <div class="table-responsive">
 <table class="table table-bordered"> -->
			<div class="table" id="result" style="min-height:65vh">
			<div class="table-responsive">
				<table class="table table-bordered" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Material</th>
							<th>ConteoArti</th>
							<th>Colecto</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Observaciones</th>
							<th>IdAna.</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
            </div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
        <footer class="card-footer text-muted" style="margin-top:20px;position:relative;bottom:0">
            Este es un proyecto para el gestionamiento de datos arqueológicos
        </footer>	
		
	</body>
</html>	