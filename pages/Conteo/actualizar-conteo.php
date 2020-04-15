<?php 
    require ('../../functions/conexion/conexion.php');
?>

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
            header("Location:login.php");
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
                        <?php 
                            $user = $_SESSION['usuario'];
                            $sqlUser = "
                                SELECT * FROM usuarios WHERE usuario='$user'
                            ";

                            $result = mysqli_query($conexion, $sqlUser);

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
        <h2>Actualizar Conteo de Colección</h2>
    </div>

    <?php
        $idConteo = $_GET['idConteo'];
    
        $sql = "
            SELECT * FROM conteocolecciones WHERE idConteo='$idConteo'
        ";
    
        $resultado = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_array($resultado);
    ?>

    <div class="container" style="min-height:72vh">
        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p>
        <form class="form-horizontal validate-form needs-validation" novalidate action="../../functions/Conteo/actualizarConteo.php" method="POST"
            enctype="multipart/form-data" autocomplete="off">

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>Análisis de pastas</label>
                        <div class="dropdown hierarchy-select" id="combo">
                            <button type="button" class="btn btn-outline-success btn-md dropdown-toggle col" id="example-two-button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row["IdAnalisisPastas"].".- ".$row["Fecha"]?></button>
                            <div class="dropdown-menu col" aria-labelledby="example-two-button">
                                <div class="hs-searchbox">
                                    <input type="text" class="form-control" autocomplete="off">
                                </div>
                                <div class="hs-menu-inner" id="comboAnalisisPastas" >
                                    
                                </div>
                            </div>
                            <input class="d-none" name="IdAnalisisPastas" readonly="readonly" aria-hidden="true"
                                type="text" value="<?php echo $row["IdAnalisisPastas"]?>" required>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <label>Fecha</label>
                        <input class="form-control" id="Fecha" type="date" name="Fecha" value="<?php echo $row['Fecha']?>" required>
                    </div>

                    <div class="col-6">
                        <label>Hora</label>
                        <input class="form-control" id="Hora" type="time" maxlength="20" minlength="0"
                            placeholder="Hora" name="Hora" value="<?php echo date("H:i", strtotime($row['Hora'])) ?>" required>
                    </div>

                    <div class="col-6 validate-input" data-validate="Ingresa el material">
                        <label>Material</label>
                        <input class="form-control" id="Material" type="text" maxlength="20" minlength="0"
                            placeholder="Material" name="Material" value="<?php echo $row['Material']?>" required>
                    </div>
                    <div class="col-6">
                        <label>Conteo Artificial</label>
                        <input class="form-control" id="ConteoArti" type="number" pattern="{0-9}" min="0"
                            max="999999999999" maxlength="12" minlength="0" placeholder="Conteo Artificial"
                            name="ConteoArti"  value="<?php echo $row['ConteoArti']?>" required>
                    </div>

                    <div class="col-6">
                        <label>Colectó</label>
                        <input class="form-control" id="Colecto" type="text" maxlength="30" minlength="0"
                            placeholder="Colectó" name="Colecto"  value="<?php echo $row['Colecto']?>" required>
                    </div>

                    <div class="col-6">
                        <label for="comment">Observaciones</label>
                        <textarea class="form-control" rows="2" id="comment" maxlength="500" minlength="0"
                            placeholder="Observaciones" name="Observaciones" id="Observaciones" 
                            style="font-size: 10pt;" required>
                                <?php echo $row['ObservaConteo']?>
                        </textarea>
                    </div>
                    <div class="col-6">
                        <input name="idConteo"  value="<?php echo $row['idConteo']?>" hidden>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-row-reverse" style="margin-top:20px">
                <input type="submit" class="btn btn-success" value="Actualizar Registro">
                <a href="conteo-Colecciones.php" type="submit" class="btn btn-danger" style="margin-right:20px">Cancelar
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
</body>

</html>