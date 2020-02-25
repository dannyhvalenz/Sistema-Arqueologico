<?php
    $conexion=mysqli_connect("localhost","root","12345","abdarqueologia");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Conteo de Colecciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
    <!--BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #36622C">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="prueba.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analisis-Pastas.php">Análsis de pastas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="conteo-Colecciones.php">Conteo de colecciones <span class="sr-only">(current)</span></a>
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

    <!--TITULO-->
    <div class="container-fluid text-center">
        <h1><b>Conteo de Colecciones</b></h1>
    </div>

    <!--DIV ACCIONES-->
    <div class="" style="margin:15px;margin-left:30px">
        <div class="row">

            <!--BOTON AGREGAR REGISTRO-->
            <a href="nuevoRegistro-Conteo.php" class="btn btn-success btn-lg">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Nuevo Registro
            </a>
            <!--BUSCAR REGISTRO-->
            <form class="form-inline" style="margin-left:30px">
            <input type="text" name="search_text" id="search_text" placeholder="Buscar conteo" class="form-control" style="width:300px; margin-right:10px"/> 
            
            <button type="button" class="btn btn-lg btn-outline-info" data-toggle="popover" title="Búsqueda" data-content="Puedes hacer busquedas por ID" style="border-radius:50px;">
            <i class="fa fa-question" aria-hidden="true"></i>
            </button>  
            </form>
        </div>
    </div>

    <!--TABLA-->
    <div class="table" id="result"></div>
    
    <footer class="card-footer text-muted" style="margin-top:20px;position:relative;bottom:0">
        Este es un proyecto para el gestionamiento de datos arqueologicos
    </footer>

    <!--SCRIPTS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "buscar-conteo.php",
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
</body>

</html>