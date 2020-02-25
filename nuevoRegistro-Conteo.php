
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Nuevo registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="icons/favicon.ico" />

    <!--STYLESHEET-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    $(function() {
        $("#file").on("change", function() {
            /*Limpiar vista previa*/
            $("#vista-previa").html('');
            var archivos = document.getElementById('file').files; /*selecciono todos los archivos??*/
            var navegador = window.URL || window.webkitURL;
            /*Recorrer los archivos*/
            for (x = 0; x < archivos.length; x++) {
                /*validar tamaño y tipo de archivo*/
                var size = archivos[x].size;
                var type = archivos[x].type;
                var name = archivos[x].name;
                if (size > 1024 * 1204) {
                    $("#vista-previa").append("<p style='color: red'>El archivo " + name +
                        " supera el maximo permitido 1MB</p>");
                } else if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
                    $("#vista-previa").append("<p style='color: blue'>El archivo " + name +
                        " no es el tipo de imagen permitido</p>");
                } else {
                    var objeto_url = navegador.createObjectURL(archivos[x]);
                    $("#vista-previa").append("<img src=" + objeto_url +
                        " width='400' height='400'>"); /*aqui puedo conectar con el carrusel*/
                }
            }
        });
    });
    </script>
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
                    <a class="nav-link" href="prueba.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analisis-Pastas.php">Análsis de pastas</a>
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
                <button class="btn btn-outline-light btn-lg " type="button">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Cerrar Sesion
                </button>
            </form>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <h2>Agregar Registro de Análisis de Pastas</h2>
    </div>
    <div class="container">

        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        <form class="form-horizontal validate-form" action="guardar.php" method="post" enctype="multipart/form-data"
            autocomplete="off">
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="ex3">Fecha</label>
                        <input class="form-control" id="ex3" type="date" name="fecha">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Cuadrante</label>
                        <input class="form-control" id="ex3" type="text" maxlength="20" minlength="0"
                            placeholder="Cuadrante" name="cuadrante">
                    </div>
                    <div class=" col-sm-6 validate-input" data-validate="Ingresa un email valido: ex@abc.xyz">
                        <label for="ex3">Sitio</label>
                        <input class="input100" type="text" name="email" placeholder="Usuario">
                        <input class="form-control" id="ex3" type="text" maxlength="20" minlength="0"
                            placeholder="Sitio" name="sitio">
                    </div>
                    <div class="col-sm-6 validate-input" data-validate="Ingresa el sitio">
                        <label for="ex3">Sitio</label>
                        <input class="form-control" id="ex3" type="text" maxlength="20" minlength="0"
                            placeholder="Sitio" name="sitio">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Patrón</label>
                        <input class="form-control" id="ex3" type="text" maxlength="30" minlength="0"
                            placeholder="Patrón" name="patron">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">UTM E</label>
                        <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="999999999999"
                            maxlength="12" minlength="0" placeholder="UTM E" name="utme">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">UTM N</label>
                        <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="999999999999"
                            maxlength="12" minlength="0" placeholder="UTM N" name="utmn">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Latitud</label>
                        <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="99999"
                            maxlength="5" minlength="0" placeholder="Lalitud" name="latitud">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Analizó</label>
                        <input class="form-control" id="ex3" type="text" maxlength="40" minlength="0"
                            placeholder="Analizó" name="analizo">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Bolsa</label>
                        <input class="form-control" pattern=".{0-9}" id="ex3" type="number" stepss="any" min="0"
                            value="0.00" maxlength="10" minlength="0" placeholder="Bolsa" name="bolsa">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Tipo</label>
                        <input class="form-control" id="ex3" type="text" maxlength="10" minlength="0" placeholder="Tipo"
                            name="tipo">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Tratamiento</label>
                        <input class="form-control" id="ex3" type="text" maxlength="100" minlength="0"
                            placeholder="Tratamiento" name="tratamiento">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Modificación</label>
                        <input class="form-control" id="ex3" type="text" maxlength="100" minlength="0"
                            placeholder="Modidicación" name="modificacion">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Formas y Tratamientos</label>
                        <input class="form-control" id="ex3" type="text" maxlength="100" minlength="0"
                            placeholder="Formas" name="formastratamientos">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Peso</label>
                        <input class="form-control" id="ex3" type="number" pattern=".{0-9}" maxlength="10" minlength="0"
                            placeholder="Peso" name="peso">
                    </div>
                    <div class="col-sm-6">
                        <label for="ex3">Total de fragmentos</label>
                        <input class="form-control" id="ex3" type="number" min="0" maxlength="4" minlength="0"
                            placeholder="Total de fragmentos" name="totalfragmentos">
                    </div>
                    <div class="col-sm-6">
                        <label for="comment">Observaciones</label>
                        <textarea class="form-control" rows="1" id="comment" maxlength="250" minlength="0"
                            placeholder="Observaciones" name="observaciones"></textarea>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <label for="ex3">Foto</label>
                        <input class="form-control" id="file" type="file" name="archivo[]" id="file[]" accept="image/*"
                            multiple>
                    </div>
                    <div class="col-sm-4" class="" id="vista-previa"
                        style="overflow-x: auto; overflow-y: none; height: 410px; width: 430px;">
                        <!-- se muestran las imagenes -->
                        <div class="" id="vista-previa" >
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6" style="margin-top: 25px; margin-left: 90px;">
                <a href="analisis-Pastas.php" type="submit" class="btn btn-danger">Cancelar Registro</a>

                <a href="guardar.php" type="submit" class="btn btn-success">Guardar Registro</a>
            </div>
        </form>
    </div>
    <div class="card-footer text-muted" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueologicos
    </div>

    <script src="js/main.js"></script>
</body>

</html>