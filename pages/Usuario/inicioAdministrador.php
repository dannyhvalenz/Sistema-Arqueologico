<!DOCTYPE html>
<html lang="es">

<head>
    <title>Admnistración de usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="../../icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
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
                    <a class="nav-link active" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Pastas/analisis-Pastas-Admin.php">Análisis de Pastas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Conteo/conteo-Colecciones-Admin.php">Conteo de Colecciones</a>
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

    <!-- MODAL PARA MOSTRAR MENSAJES DE ERROR -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
                    <h4 class="modal-title">Usuario Fallido</h4>
				</div>
				<div class="modal-body">
					<p>
                    <?php $reasons = array("errorconexion" => "Error de conexion con la base de datos"); 
							if ($_GET["usuarioFallido"]) 	
								echo "<span style='color:red;'>". $reasons[$_GET["reason"]] . "</span>"; 
						?>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
    
    <!--MODAL PARA ELIMINAR-->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4>
                </div>
            
                <div class="modal-body">
                    <p>Estas apunto de eliminar un usuario y esta operacion ya no se podra revertir</p>
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

    <!--TITULO-->
    <div class="container-fluid text-center">
        <h1><b>Usuarios</b></h1>
    </div>

    <!--DIV ACCIONES-->
    <div class="" style="margin:15px;margin-left:30px">
        <div class="row">

            <!--BOTON AGREGAR USUARIO-->
            <a href="nuevoRegistro-Usuarios.php" class="btn btn-success btn-lg">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Nuevo Registro
            </a>
            <!--BUSCAR USUARIO-->
            <form class="form-inline" style="margin-left:30px">
            <input type="text" name="search_text" id="search_text" placeholder="Buscar usuario" class="form-control" style="width:300px; margin-right:10px"/> 
            
            <button type="button" class="btn btn-lg btn-outline-info" data-toggle="popover" title="Búsqueda" data-content="Puedes hacer busquedas por Nombre o Apellido" style="border-radius:50px;">
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
                url: "buscar-usuarios.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
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
	 <!--SCRIPT MENSAJE CONFIRMACION AL ELIMINAR-->
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>
    
    <!--SCRIPT PARA QUE SE MUESTRA EL MENSAJE DE ERROR EN EL MODAL-->
    <script type="text/javascript">
		var url = window.location.href;
		if(url.indexOf('?usuarioFallido=true&reason=errorconexion') != -1) {
		   	$('#myModal').modal('show');
		} else {
			$('#myModal').modal('hide');
		}
	</script>
    
</body>

</html>