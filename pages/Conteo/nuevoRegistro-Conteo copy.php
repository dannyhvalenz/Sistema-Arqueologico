
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.css" rel="stylesheet"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

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
   <?php if ($_GET["existe"]) echo "<script> alert('Ya existe un conteo con ese analisis de pastas, fecha, material, conteo artificial y colecto'); </script>"; ?>
					
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
                    <a class="nav-link active" href="conteo-Colecciones.php">Conteo de colecciones</a>
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
    <div class="container-fluid text-center" style="margin-bottom:20px">
        <h2>Agregar Conteo de Colección</h2>
    </div>
    
    <div class="container" style="min-height:72vh">
        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        
        <form novalidate method="POST"
            enctype="multipart/form-data" onsubmit="validarExistencia()" autocomplete="off">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group col">
                            <label>Análisis de pastas</label>
                            <select class="selectpicker form-control form-control-lg" id="comboAnalisisPastas" name="comboAnalisisPastas" data-live-search="true" required>
                
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label>Fecha</label>
                        <input class="form-control" id="Fecha" type="date" name="Fecha" required>
                    </div>

                    <div class="col-6">
                        <label>Hora</label>
                        <input class="form-control" id="Hora" type="time" maxlength="20" minlength="0"
                            placeholder="Hora" name="Hora" required>
                    </div>

                    <div class="col-6 validate-input" data-validate="Ingresa el material">
                        <label>Material</label>
                        <input class="form-control" id="Material" type="text" maxlength="20" minlength="0"
                            placeholder="Material" name="Material" required>
                    </div>
                    <div class="col-6">
                        <label>Conteo Artificial</label>
                        <input class="form-control" id="ConteoArti" type="number" pattern="{0-9}" min="0"
                            max="999999999999" maxlength="12" minlength="0" placeholder="Conteo Artificial"
                            name="ConteoArti" required >
                    </div>

                    <div class="col-6">
                        <label>Colectó</label>
                        <input class="form-control highlight" id="Colecto" type="text" maxlength="30" minlength="0"
                            placeholder="Colectó" name="Colecto" required>
                    </div>

                    <div class="col-6">
                        <label for="comment">Observaciones</label>
                        <textarea class="form-control" rows="2" id="comment" maxlength="500" minlength="0"
                            placeholder="Observaciones" name="Observaciones" id="Observaciones" style="font-size: 10pt;" required></textarea>
                    </div>

                </div>
            </div>
            <div class="col d-flex flex-row-reverse" style="margin-top:20px">
                <input type="submit" class="btn btn-success" value="Guardar Registro">
                <a href="conteo-Colecciones.php" type="submit" name="registrar" class="btn btn-danger" style="margin-right:20px">Cancelar
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
    <script src="../../js/validarcampos.js"></script>
    <script src="../../js/conteoexistente.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <!--SCRIPT PARA QUE EL TEXT AREA SE EXPANDA CONFORME SE LLENE-->
    <script>
    $('textarea').each(function() {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#combo').hierarchySelect({
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

    <script>
    console.log("Antes de la funcion");
    function validarExistencia(){
        var conteo_state = false;

        var Material = $('#Material').val();
        var ConteoArti = $('#ConteoArti').val();
        var Colecto = $('#Colecto').val();
        var Fecha = $('#Fecha').val();
        var IdAnalisisPastas = $('#IdAnalisisPastas').val();

        $.ajax({
            url: '../../functions/Conteo/crearConteo.php', 
            type: 'post',
            data: {
                'conteo_check': 1,
                'material': Material, 
                'conteoArti': ConteoArti,
                'colecto': Colecto,
                'fecha': Fecha,
                'IdAnalisisPastas': IdAnalisisPastas,
                'Estado': 'activo',
            },
            success: function(response){
                console.log("Response");
                alert(response);
                if (response == 'existe'){
                    conteo_state = false;
                    alert("Hay un conteo existente con los siguientes datos iguales: idAnalisis, Material, Conteo Artificial, Fecha y Colecto");
                } else if (response == 'no_existe'){
                    conteo_state = true;
                    //registrarConteo();
                }
            },
            error: function(response){
                console.log()
            }
        })    
    }

    function registrarConteo(query) {
    $.ajax({
        url: "crearConteo2.php",
        method: "POST",
        data: {
            query: query
        },
        success: function(data) {
            if(response == true){    
                header("Location: ../../pages/Conteo/conteo-Colecciones.php");
            } else {
                header("Location: ../../pages/Otras/nodisponible.php");
            }
        }
    });
}
    </script>
</body>

</html>