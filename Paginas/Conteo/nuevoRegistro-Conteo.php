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

    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../../css/main.css">

<style>
    .col-6 {
        padding-top:10px;
    }
    label{
        font-size:12px;
    }
</style>
</head>

<body>
    <!--VERIFICA QUE ESTE LA SESION ACTIVA-->
    <?php
        /*
        session_start();

        if(isset($_SESSION['usuario'])){                   
        }else{
            header("Location:login.php");
        }*/
    ?>
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
                    <a class="nav-link" href="../Pastas/analisis-Pastas.php">Análsis de pastas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="conteo-Colecciones.php">Conteo de colecciones</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        Nombre del Usuario
                    </a>
                </li>
                <a class="btn btn-outline-light btn-lg" href="../../operaciones/Sesion/cerrarSesion.php">
                    <i class="fa fa-sign-out" onclick="cerrarSesion()" aria-hidden="true"></i>
                    Cerrar Sesion
                </a>
            </form>
        </div>
    </nav>

    <div class="container-fluid text-center" style="margin-bottom:20px">
        <h2>Agregar Conteo de Colección</h2>
    </div>
    <div class="container" style="min-height:65vh">
        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        <form class="form-horizontal validate-form" action="../../operaciones/Conteo/crearConteo.php" method="POST"
            enctype="multipart/form-data" autocomplete="off">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>Análisis de pastas</label>
                        <div class="dropdown hierarchy-select" id="combobox">
                            <button type="button" class="btn btn-outline-secondary btn-lg dropdown-toggle col"
                                id="example-two-button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Analisis de
                                pastas</button>
                            <div class="dropdown-menu" aria-labelledby="example-two-button">
                                <!--BUSQUEDA DENTRO DEL COMBOBOX-->
                                <div class="hs-searchbox">
                                    <input type="text" class="form-control" autocomplete="off">
                                </div>
                                <!--DONDE SE METERAN TODOS LOS DATOS DE LOS ANALISIS QUE SE PUEDEN SELECCIONAR-->
                                <div class="hs-menu-inner" id="comboAnalisisPastas"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label>Fecha</label>
                        <input class="form-control" id="Fecha" type="date" name="Fecha">
                    </div>

                    <div class="col-6">
                        <label>Hora</label>
                        <input class="form-control" id="Hora" type="time" maxlength="20" minlength="0"
                            placeholder="Hora" name="Hora">
                    </div>

                    <div class="col-6 validate-input" data-validate="Ingresa el material">
                        <label>Material</label>
                        <input class="form-control" id="Material" type="text" maxlength="20" minlength="0"
                            placeholder="Material" name="Material">
                    </div>
                    <div class="col-6">
                        <label>Conteo Artificial</label>
                        <input class="form-control" id="ConteoArti" type="number" pattern="{0-9}" min="0"
                            max="999999999999" maxlength="12" minlength="0" placeholder="Conteo Artificial"
                            name="ConteoArti">
                    </div>

                    <div class="col-6">
                        <label>Colectó</label>
                        <input class="form-control" id="Colecto" type="text" maxlength="30" minlength="0"
                            placeholder="Colectó" name="Colecto">
                    </div>
                    <div class="col-6">
                        <label>Analizó</label>
                        <input class="form-control" id="Analizo" type="text" maxlength="40" minlength="0"
                            placeholder="Analizó" name="analizo">
                    </div>

                    <div class="col-6">
                        <label for="comment">Observaciones</label>
                        <textarea class="form-control" rows="2" id="comment" maxlength="500" minlength="0"
                            placeholder="Observaciones" name="observaciones" id="Observaciones"></textarea>
                    </div>

                </div>
            </div>
            <div class="col d-flex flex-row-reverse" style="margin-top:20px">
            <a href="conteo-Colecciones.php" type="submit" class="btn btn-danger" >Cancelar
                Registro</a>

            <a href="../../operaciones/Conteo/crearConteo.php" type="submit" class="btn btn-success" style="margin-right:20px">Guardar
                Registro
            </a>
        </div>
        </form>
        
    </div>

    <div class="card-footer text-muted fixed-bottom" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueológicos
    </div>
    
    
    <!--SCRIPT PARA QUE EL TEXT AREA SE EXPANDA CONFORME SE LLENE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('textarea').each(function() {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
    </script>
    <script src="../../js/main.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>
    <!-- Hierarchy Select Js -->
    <script src="../../js/hierarchy-select.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#combobox').hierarchySelect({
            hierarchy: false,
            width: 'auto'
        });
    });
    </script>
    <script>
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "comboAnalisis.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#comboAnalisisPastas').html(data);
                }
            });
        }
    });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>