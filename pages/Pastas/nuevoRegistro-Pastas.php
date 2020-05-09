<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Nuevo registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONO-->
    <link rel="icon" type="image/png" href="../../icons/favicon.ico" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../other/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/hierarchy-select.min.css">

    <link rel="stylesheet" type="text/css" href="drop.css">
    <!-- Dropzone -->
    <!--<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>-->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="../../other/dropzone/dropzone.css">
    <script src="http://pajhome.org.uk/crypt/md5/2.2/md5-min.js"></script>
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
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../Pastas/analisis-Pastas.php">Análisis de pastas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Conteo/conteo-Colecciones.php">Conteo de colecciones</a>
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
        <p>Debe de ingresar los datos correctamente:</p><br>
        
        
        <form class="form-horizontal validate-form needs-validation" id="formDatos" novalidate method="POST"
            enctype="multipart/form-data" autocomplete="off">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <label>Fecha</label>
                        <input class="form-control" id="Fecha" type="date" name="Fecha" required>
                    </div>

                    <div class="col-4">
                        <label>Cuadrante</label>
                        <input class="form-control" type="text" max="20" min="0" maxlength="20" minlength="0"
                            placeholder="Cuadrante" name="Cuadrante" id="Cuadrante" required>
                    </div>

                    <div class="col-4 validate-input">
                        <label>Sitio</label>
                        <input class="form-control" id="Sitio" type="text" max="20" min="0" maxlength="20" minlength="0"
                            placeholder="Sitio" name="Sitio" required>
                    </div>
                    <div class="col-4">
                        <label>Patrón</label>
                        <input class="form-control" type="text" min="0"
                            max="30" maxlength="12" minlength="0" placeholder="Patrón" name="Patron" id="Patron" required >
                    </div>

                    <div class="col-4">
                        <label>UTM E</label>
                        <input class="form-control highlight" type="number" pattern="{0-9}" maxlength="12" minlength="0" min="0" max="999999999999"
                             placeholder="UTM E" name="Utme" id="Utme" required>
                    </div>
                    
                    <div class="col-4">
                        <label>UTM N</label>
                        <input class="form-control" type="number" pattern="{0-9}" min="0"
                            max="999999999999"
                            maxlength="12" minlength="0" placeholder="UTM N" name="Utmn" id="Utmn" required >
                    </div>

                    <div class="col-4">
                        <label>Latitud</label>
                        <input class="form-control highlight" type="number" pattern="{0-9}" min="0" max="99999"
                            maxlength="5" minlength="0" placeholder="Latitud" name="Latitud" id="Latitud" required>
                    </div>
                   
                   <div class="col-4">
                        <label>Analizó</label>
                        <input class="form-control"  type="text" max="40" min="0" maxlength="40" minlength="0"
                            placeholder="Analizó" name="Analizo" id="Analizo" required>
                    </div>

                    <div class="col-4 validate-input" data-validate="Ingresa la bolsa">
                        <label>Bolsa</label>
                        <input class="form-control" pattern="[A-Za-z0-9\.]+" type="text" stepss="any" max="10" min="0"
                            maxlength="10" minlength="0" placeholder="Bolsa" name="Bolsa" id="Bolsa" required>
                    </div>
                    <div class="col-4">
                        <label>Tipo</label>
                        <input class="form-control" type="text" max="10" min="0" maxlength="10" minlength="0"
                            placeholder="Tipo" name="Tipo" id="Tipo" required >
                    </div>
                    <div class="col-4">
                        <label>Tratamiento</label>
                        <input class="form-control" type="text" max="100" min="0" maxlength="100" minlength="0"
                            placeholder="Tratamiento" name="Tratamiento" id="Tratamiento" required >
                    </div>

                    <div class="col-4">
                        <label>Modificación y decorado</label>
                        <input class="form-control highlight" type="text"  max="100" min="0" maxlength="100" minlength="0"
                            placeholder="Modificación y decorado" name="Modificacion" id="Modificacion" required>
                    </div>
                    
                    <div class="col-4">
                        <label>Formas y Tratamientos</label>
                        <input class="form-control" type="text" max="100" min="0" maxlength="100" minlength="0"
                            placeholder="Formas" name="FormasTratamientos" id="FormasTratamientos" required >
                    </div>

                    <div class="col-4">
                        <label>Peso</label>
                        <input class="form-control highlight" type="number" pattern=".{0-9}" min="0.00001" maxlength="10" minlength="0"
                            placeholder="Peso" name="Peso" id="Peso" step="0.00001" required>
                    </div>
                   
                   <div class="col-4">
                        <label>Total de fragmentos</label>
                        <input class="form-control" type="number" max="9999" min="0" maxlength="4" minlength="0"
                            placeholder="Total de fragmentos" name="TotalFragmentos" id="TotalFragmentos" required >
                    </div>
                   
                    <div class="col-4">
                        <label for="comment">Observaciones</label>
                        <textarea class="form-control" rows="1" id="comment" max="250" min="0" maxlength="250" minlength="0"
                            placeholder="Observaciones" name="Observaciones" id="Observaciones" style="font-size: 10pt;" required></textarea>
                    </div>

                </div>
            </div>
            
        </form><br>
        <div id="dropzone">
          <div>Arrastra las imagenes aquí</div>
          <input type="file" id="campofichero" multiple accept="image/png, image/jpg" />
          
        </div>
        <div id="lista_imagenes"></div>
        <div class="col d-flex flex-row-reverse" style="margin-top:20px">
            <input type="submit" class="btn btn-success" value="Guardar Registro" form="formDatos">
            <a href="../../pages/Pastas/analisis-Pastas.php" type="submit" name="registrar" class="btn btn-danger" style="margin-right:20px">Cancelar
                    Registro</a>
        </div>
    </div>

    <footer class="card-footer text-muted absolute-bottom" style="margin-top:20px">
        Este es un proyecto para el gestionamiento de datos arqueológicos
    </footer>

    <script src="../../js/main.js"></script>
    <!-- jQuery -->
    <!--<script src="../../other/jquery/jquery-3.4.1.min.js"></script>-->
    <!-- Popper Js -->
    <script src="../../other/popper/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../other/bootstrap/js/bootstrap-4.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Hierarchy Select Js -->
    <script src="../../js/hierarchy-select.min.js"></script>
    <script src="../../js/validarcampos.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!--SCRIPT PARA QUE EL TEXT AREA SE EXPANDA CONFORME SE LLENE-->
    <script>
    $('textarea').each(function() {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });

    var arch=[];

    $(function(){
            $("#formDatos").on("submit", function(e){
                e.preventDefault();
                var f = $(this);
                var formDat = new FormData(document.getElementById("formDatos"));
                //var archivos = $('#campofichero')[0].files;

                for(var i=0; i<arch.length; i++){
                    formDat.append('archivo[]', arch[i]);
                }

                formDat.append('text', $('#textinput').prop('value'));

                $.ajax({
                    url: "../../functions/Pastas/creaAnalisis.php",
                    type: "post",
                    data: formDat,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result){
                        if(result=="1"){
                            location.href="analisis-Pastas.php"
                        }else{
                            location.href="../../presentacion/nodisponible.html"
                        }
                    }
                });
            });
    });

    $(function() {

        $('#dropzone').on('dragover', function() {
            $(this).addClass('hover');
        });

        $('#dropzone').on('dragleave', function() {
            $(this).removeClass('hover');
        });

        $('#dropzone input').on('change', function(e) {
            var file=this.files;

            $('#dropzone').removeClass('hover');



            $('#dropzone').addClass('dropped');
            $('#dropzone img').remove();

            for(var i=0; i<this.files.length; i++){
                var cont=arch.length;
                arch[cont]=this.files[i];
            }



            for(var i=0; i<this.files.length; i++){
                if (this.accept && $.inArray(file[i].type, this.accept.split(/, ?/)) == -1) {
                    return alert('File type not allowed.');
                }
                if ((/^image\/(gif|png|jpeg)$/i).test(file[i].type)) {
                    var currFile=file[i];
                    var FileName=currFile.name;


                    var reader = new FileReader();

                    // reader.readAsDataURL(file[i]);
                    reader.onload=(function(theFile){
                        var fileName=theFile.name;
                        return function (e) {
                            // body...
                            var n=fileName.length - 4;
                            var nombre= fileName.slice(0,n);
                            var hash = hex_md5(nombre);

                            var respaldo=document.getElementById("lista_imagenes").innerHTML;
                            document.getElementById("lista_imagenes").innerHTML =respaldo+['<div class="imgcontainer" id="'+hash+'"><img class="thumb preshow" onmouseover="hov(this)"  name="'+fileName+'" src="', e.target.result,'" width="200" height="125" title="'+ fileName+'"/><div id="'+fileName+'" name="'+fileName+'" class="delete" onmouseleave="unhov(this)" onclick="eliminar(this)"><img src="eliminar.png" width="60" height="60" style="opacity:0.7; vertical-align:middle;" title="Eliminar"></div></div>'].join('');
                        }
                    })(currFile);
                    reader.readAsDataURL(currFile);
                } else {
                    var ext = file[i].name.split('.').pop();

                    $('#dropzone div').html(ext);
                }
            }

        });
    });

    function hov(element){
        document.getElementById(element.name).style.display = "block";
    }
    function unhov(element){
        document.getElementById(element.id).style.display = "none";
    }
    function eliminar(element){
        //alert(element.id);
        for(var i=0; i<arch.length;i++){
            if(arch[i].name==element.id){
                arch.splice(i, 1);

                var n=element.id.length - 4;
                var nombre= element.id.slice(0,n);
                var hash = hex_md5(nombre);

                var id="#"+hash;
                $(id).remove();
                break;
            }
        }
    }
    </script>

</body>

</html>