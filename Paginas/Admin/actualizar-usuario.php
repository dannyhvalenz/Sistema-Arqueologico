<?php
   require ('../../operaciones/conexion/conexion.php');
   $idUsuario = $_GET['idUsuario'];
   
   $sql = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
   
   $resultado = mysqli_query($conexion, $sql);
   $row = mysqli_fetch_array($resultado) ; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="../../icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../..//css/main.css">
</head>

<body>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        Nombre del Usuario
                    </a>
                </li>
                <button class="btn btn-outline-light btn-lg " type="button">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Cerrar Sesion
                </button>
            </form>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <h2>Agregar Usuario</h2>
    </div>
    <div class="container">

        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        <form class="form-horizontal validate-form" method="POST" action="../operaciones/Usuarios/editarUsuario.php"  method="POST">
            <div class="">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <label for="ex3">Nombre</label>
                        <input class="form-control" type="text" maxlength="30" minlength="0"
                            placeholder="Nombre" name="nombre" id="nombre" value="<?php echo $row['Nombre']?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Apellidos</label>
                        <input class="form-control" type="text" maxlength="30" minlength="0"
                            placeholder="Apellidos" name="apellido" id="apellido" value="<?php echo $row['Apellido']?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Contraseña</label>
                        <input class="form-control" type="text" maxlength="30" minlength="0" placeholder="Contraseña"
                            name="contrasena" id="contrasena" value="<?php echo $row['Contrasena']?>"> 
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Cargo</label>
                        <input class="form-control" type="text" maxlength="20" minlength="0"
                            placeholder="Cargo" name="cargo" id="cargo" value="<?php echo $row['Cargo']?>">
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px; margin-left: 90px;">
                <a href="usuarios.php" type="submit" class="btn btn-danger" style="margin-right:20px">Cancelar</a>
                <button type="submit" class="btn btn-success" value="Actualizar">Guardar</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-muted" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueológicos
    </div>

    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>