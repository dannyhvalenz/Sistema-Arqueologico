<!DOCTYPE html>
<html lang="es">

<head>
    <title>Análisis de Pastas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="../../icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    
    
    <style>
		
		.modal-content{
			position: absolute;
			display: inline-flex;
		}
		
        @media screen and (max-width: 320px) {
             table {
               display: block;
               overflow-x: auto;
             }
        }
    </style>
</head>

<body>
    <!--VERIFICA QUE ESTE LA SESION ACTIVA-->
    <?php
         session_start();

         if(isset($_SESSION['usuario'])){                   
         }else{
             header("Location:../../pages/Login/login.php");
         }
    ?>

    <!--BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #36622C">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../Pastas/analisis-Pastas.php">Análisis de pastas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Conteo/conteo-Colecciones.php">Conteo de colecciones <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <?php 
                        
                            require ('../../functions/conexion/conexion.php'); 
                            $user = $_SESSION['usuario'];
                            $sql = "SELECT * FROM usuarios WHERE usuario='$user'";

                            $result = mysqli_query($conexion, $sql);

                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo $row['nombre'] . " " .$row['apellido'];
                                }
                            } else {
                                echo "Nombre del Usuario";
                            }
                                            
                        ?>
                    </a>
                </li>
                <a class="btn btn-outline-light btn-lg" href="../../functions/Sesion/cerrarSesion.php">
                    <i class="fa fa-sign-out" onclick="cerrarSesion()" aria-hidden="true"></i>
                    Cerrar Sesion
                </a>
            </form>
        </div>
    </nav>

    <!--MODAL PARA ELIMINAR-->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Eliminar analisis de pastas</h4>
                </div>
            
                <div class="modal-body">
                    <p>Estas apunto de eliminar un analisis de pastas, si llegaras a necesitarlo de nuevo pideselo al administrador</p>
                    <br>
                    <p>¿Deseas proceder con la eliminación?</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
	<!-- MODAL PARA MOSTRAR IMAGENES CON CARRUSEL -->
   <div class="container text-center">
		<!-- Large modal -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
			  	<?php
					echo "soy otro mensaje";
					//$IdAnalisisPastas = $_POST['IdAnalisisPastas'];
					$directorio='imagenes/'.$IdAnalisisPastas;
					//$directorio='imagenes/3';
					if (is_dir($directorio)){
						$carpeta = scandir($directorio);
						if (count($carpeta) > 2){
							$dirint = dir($directorio);
							echo '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
								echo '<div class="carousel-inner">';
									echo '<div class="item active">';
										echo '<img class="img-responsive" src="imagenes/cargando2.gif" alt="...">';
									echo '</div>';
										while (($archivo = $dirint->read()) !== false){
											if( $archivo != "." && $archivo != "..") {
												echo '<div class="item">';
													echo '<img class="img-responsive" src="'.$directorio."/".$archivo.'" >';
													echo $directorio."/".$archivo;
												echo '</div>';
											}
										}
								echo '</div>';
							echo '</div>';
							echo '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">';
							echo '<span class="glyphicon glyphicon-chevron-left"></span>';
					  		echo '</a>';
							echo '<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">';
							echo '<span class="glyphicon glyphicon-chevron-right"></span>';
							echo '</a>';
							$dirint->close();	
						}else{
							echo 'El directorio existe, pero agrega imagenes.';
						}
					}else{
						 echo 'El directorio no existe, agrega imagenes para crear el directorio.';
						//$directorio='imagenes/'.$IdAnalisisPastas.'/';
						//echo $directorio;
						echo $IdAnalisisPastas;
					}
				?> 
				 
				</div>
			  </div>
		</div>
	</div>
   
    <!--TITULO-->
    <div class="container-fluid text-center">
        <h1><b>Análisis de Pastas</b></h1>
    </div>

    <!--DIV ACCIONES-->
    <div class="" style="margin:15px;margin-left:30px">
        <div class="row">

            <!--BOTON AGREGAR REGISTRO-->
            <a href="nuevoRegistro-Pastas.php" class="btn btn-success btn-lg">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Nuevo Registro
            </a>
            <!--BUSCAR REGISTRO-->
            <form class="form-inline" style="margin-left:30px">
            <input type="text" name="search_text" id="search_text" placeholder="Buscar análisis" class="form-control" style="width:300px; margin-right:10px"/> 
            
            <button type="button" class="btn btn-lg btn-outline-info" data-toggle="popover" title="Búsqueda" data-content="Puedes hacer busquedas por Tipo o ID" style="border-radius:50px;">
            <i class="fa fa-question" aria-hidden="true"></i>
            </button>  
            </form>
        </div>
    </div>
    
    <!--TABLA-->
    <div class="table" id="result" style="min-height:65vh"></div>
    
    <footer class="card-footer text-muted absolute-bottom" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueológicos
    </footer>

    <!--SCRIPTS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "buscar-analisis.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
					$.ajax({
						url: "obtenerId.php",
						method: "POST",
						success: function(result){
							//alert(result);
							var arreglo = result.split("/");
							//alert(arreglo[1]);
							for(var i=1;i<arreglo.length;i++){
								document.getElementById(arreglo[i]).innerHTML='<a href="#"value="'+arreglo[i]+'"data-toggle="modal" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="'+arreglo[i]+'" class="btn btn-primary  glyphicon glyphicon-picture" id="'+arreglo[i]+'"></a>';
							}
						}
					});
                }
            });
        }
        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
    </script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })

    </script>

    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>
    <script type="text/javascript">
		$(document).ready(function(){
			$('#tableDinamica').DataTable();
		});
	</script>
</body>

</html>