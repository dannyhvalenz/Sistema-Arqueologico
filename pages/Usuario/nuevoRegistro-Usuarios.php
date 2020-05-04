<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Nuevo registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="../../icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/hierarchy-select.min.css">

    <style>
    .col-6 {
        padding-top: 10px;
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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #36622C">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../Admin/inicioAdministrador.php">Usuarios</a>
                </li>
                <li class="nav-item ">
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
                            
                            echo "<script>console.log('Sesion de: " . $user . "' );</script>";

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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
                    <h4 class="modal-title">Usuario Fallido</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
					<p>
                    <?php $reasons = array("existe" => "Ya hay un registro con este nombre de usuario"
								, "errorconexion" => "Error de conexion con la base de datos"); 
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



    <div class="container-fluid text-center" style="margin-bottom:20px">
        <h2>Agregar Usuarios</h2>
    </div>
    <div class="container" style="min-height:72vh">
        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        <form class="form-horizontal validate-form needs-validation" novalidate action="../../functions/Admin/crearUsuarios.php" method="POST"
            enctype="multipart/form-data" autocomplete="off">

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" type="text" maxlength="30" minlength="0" placeholder="Nombre" name="nombre" required>
                    </div>
                    <div class="col-6">
                        <label>Apellido(s)</label>
                        <input class="form-control" id="apellido" type="text" maxlength="30" minlength="0" placeholder="Apellido(s)"
                            name="apellido" required>
                    </div>
                    <div class="col-6">
                        <label>Nombre de usuario</label>
                        <input class="form-control" id="usuario" type="text" maxlength="30" minlength="0" placeholder="Usuario"
                            name="usuario" required>
                    </div>
                    <div class="col-6">
                        <label>Cargo</label>
                        <select class="form-control"  id="comment" maxlength="30" minlength="0"
                            placeholder="Cargo" name="cargo" id="Cargo">
                            <option value="Administrador" selected>Administrador</option>
                            <option value="Arqueologo">Arqueologo</option>
                        </select>    
                    </div>
                    <div class="col-6">
                        <label>Contraseña</label>
                        <div class="input-group">
                            <input type="password" name="contrasena" id="contrasena" class="form-control" data-toggle="password" placeholder="Contraseña" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-row-reverse" style="margin-top:20px">
                <input type="submit" class="btn btn-success" value="Guardar Registro">
                <a href="inicioAdministrador.php" type="submit" class="btn btn-danger" style="margin-right:20px">Cancelar
                    Registro</a>
            </div>
        </form>

    </div>

    <footer class="card-footer text-muted absolute-bottom" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueológicos
    </footer>

    <script src="../../js/main.js"></script>
    <!-- jQuery -->
    <script src="../../other/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../other/jquery/jquery-3.4.1.min.js"></script>
    <!-- Popper Js -->
    <script src="../../other/popper/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../other/bootstrap/js/bootstrap-4.3.1.min.js"></script>
    <!-- Hierarchy Select Js -->
    <script src="../../js/hierarchy-select.min.js"></script>
    
    <!--SCRIPT PARA VALIDAR LOS CAMPOS VACIOS-->
    <script src="../../js/validarcampos.js"></script>

    <!--SCRIPT PARA VER LA CONTRASEÑA-->
    <script type="text/javascript">
        window.onload = function(){
            /**
            * @author Abdo-Hamoud <abdo.host@gmail.com>
            * https://github.com/Abdo-Hamoud/bootstrap-show-password
            * version: 1.0
            */
            !function(a){
                a(function(){
                    a('[data-toggle="password"]').each(function(){
                        var b = a(this); 
                        var c = a(this).parent().find(".input-group-text"); 
                        c.css("cursor", "pointer").addClass("input-password-hide"); 
                        c.on("click", function(){
                            if (c.hasClass("input-password-hide")){
                                c.removeClass("input-password-hide").addClass("input-password-show"); 
                                c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); 
                                b.attr("type", "text")
                            } else{
                                c.removeClass("input-password-show").addClass("input-password-hide"); 
                                c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); 
                                b.attr("type", "password")
                            }
                        })
                    })
                })
            }(window.jQuery);
        }
    </script>


    <!--SCRIPT PARA QUE EL TEXT AREA SE EXPANDA CONFORME SE LLENE-->
    <script>
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
    </script> 

    <!--SCRIPTS NECESARIOS PARA LOS MENSAJES EN EL MODAL-->

    <script type="text/javascript">
		var url = window.location.href;
		if(url.indexOf('?usuarioFallido=true&reason=errorconexion') != -1 || url.indexOf('?usuarioFallido=true&reason=existe') != -1) {
            $('#myModal').modal('show');
		} else {
			$('#myModal').modal('hide');
		}
	</script>   

</body>
</html>