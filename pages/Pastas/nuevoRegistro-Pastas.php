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
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="../../other/dropzone/dropzone.css">-->
    <script src="http://pajhome.org.uk/crypt/md5/2.2/md5-min.js"></script>
	<!--<script type="text/javascript" src="validarRegitroAnalisis.js"></script>-->
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

    <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
                    <h4 class="modal-title">Análisis de Pastas Fallido</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
					<p>
                    <?php $reasons = array("existe" => "Ya existe un análisis de pastas con estos datos"
								, "errorconexion" => "Error de conexion con la base de datos"); 
							if ($_GET["analisisFallido"]) 	
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
        <h2>Agregar Análisis de Pastas</h2>
    </div>
    <div class="container" style="min-height:72vh">
        <h2>Ingresar los datos</h2>
        <p>Debe de ingresar los datos correctamente:</p><br>
        <form class="form-horizontal validate-form needs-validation" id="formDatos" method="POST"
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
                        <label>Observaciones</label>
                        <input class="form-control" type="text" rows="2" max="70" min="0" maxlength="70" minlength="0"
                            placeholder="Observaciones" name="Observaciones" id="Observaciones" required >
                    </div>
                    <!--<div class="col-4">
                        <label >Observaciones</label>
                        <textarea class="form-control is-valid" rows="1" id="comment" max="50" min="0" maxlength="50" minlength="0"
                            placeholder="Observaciones" name="Observaciones" id="Observaciones" style="font-size: 10pt;" required></textarea>
                            
                    </div>-->
                </div>
            </div>
        </form><br>
        <div id="dropzone">
          <div>Arrastra las imagenes aquí</div>
          <input type="file" id="campofichero" multiple accept=".jpg, .png, .jpeg"/>
        </div>
        <div id="lista_imagenes"></div>
        <div class="col d-flex flex-row-reverse" style="margin-top:20px">
            <input type="submit" class="btn btn-success" value="Guardar Registro" form="formDatos">
            <a  type="submit" name="registrar" class="btn btn-danger" style="margin-right:20px">Cancelar
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
     <!--SCRIPT PARA QUE SE MUESTRE EL MENSAJE DE ERROR EN EL MODAL-->
    <script type="text/javascript">
		var url = window.location.href;
		if(url.indexOf('?analisisFallido=true&reason=errorconexion') != -1 || url.indexOf('?analisisFallido=true&reason=existe') != -1) {
            $('#myModal').modal('show');
		} else {
			$('#myModal').modal('hide');
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
                        
                        if (result == "exito") {
                            location.href="analisis-Pastas.php"
                        } else if (result == "errorconexion") {
							location.href="nuevoRegistro-Pastas.php?analisisFallido=true&reason=errorconexion"
                        } else if (result == "existe") {
							location.href="nuevoRegistro-Pastas.php?analisisFallido=true&reason=existe"
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
                /*if (this.accept && $.inArray(file[i].type, this.accept.split(/, ?/)) == -1) {
                    return alert('Tipo de archivo no permitido.');
                }*/
                if ((/^image\/(jpg|png|jpeg)$/i).test(file[i].type)) {
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
	<script type="text/javascript">
		//Tipo Bolsa Analizo Latitud Utmn Utme Patron Cuadrante
		$('#Fecha').on('focusout',function(){
			var fecha = $(this).val();
			if(fecha.length == 0 || fecha==null){
				$('#Fecha').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Fecha').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Cuadrante').on('focusout',function(){
			var Cuadrante = $(this).val();
			if(Cuadrante.length == 0 || Cuadrante==null){
				$('#Cuadrante').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Cuadrante').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Sitio').on('focusout',function(){
			var Sitio = $(this).val();
			if(Sitio.length == 0 || Sitio==null){
				$('#Sitio').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Sitio').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Patron').on('focusout',function(){
			var Patron = $(this).val();
			if(Patron.length == 0 || Patron==null){
				$('#Patron').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Patron').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Utme').on('focusout',function(){
			var Utme = $(this).val();
			if(Utme.length == 0 || Utme==null){
				$('#Utme').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Utme').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Utmn').on('focusout',function(){
			var Utmn = $(this).val();
			if(Utmn.length == 0 || Utmn==null){
				$('#Utmn').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Utmn').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Latitud').on('focusout',function(){
			var Latitud = $(this).val();
			if(Latitud.length == 0 || Latitud==null){
				$('#Latitud').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Latitud').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Analizo').on('focusout',function(){
			var Analizo = $(this).val();
			if(Analizo.length == 0 || Analizo==null){
				$('#Analizo').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Analizo').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Bolsa').on('focusout',function(){
			var Bolsa = $(this).val();
			if(Bolsa.length == 0 || Bolsa==null){
				$('#Bolsa').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Bolsa').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Tipo').on('focusout',function(){
			var Tipo = $(this).val();
			if(Tipo.length == 0 || Tipo==null){
				$('#Tipo').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Tipo').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Tratamiento').on('focusout',function(){
			var Tratamiento = $(this).val();
			if(Tratamiento.length == 0 || Tratamiento==null){
				$('#Tratamiento').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Tratamiento').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Modificacion').on('focusout',function(){
			var Modificacion = $(this).val();
			if(Modificacion.length == 0 || Modificacion==null){
				$('#Modificacion').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Modificacion').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#FormasTratamientos').on('focusout',function(){
			var FormasTratamientos = $(this).val();
			if(FormasTratamientos.length == 0 || FormasTratamientos==null){
				$('#FormasTratamientos').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#FormasTratamientos').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Peso').on('focusout',function(){
			var Peso = $(this).val();
			if(Peso.length == 0 || Peso==null){
				$('#Peso').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Peso').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#TotalFragmentos').on('focusout',function(){
			var totalFragmentos = $(this).val();
			if(totalFragmentos.length == 0 || totalFragmentos==null){
				$('#TotalFragmentos').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#TotalFragmentos').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Observaciones').on('focusout',function(){
			var texto = document.getElementById('Observaciones').value;
			//var observaciones = $(this).val();
			if(texto.length == 0 || texto==null){
				$('#Observaciones').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Observaciones').addClass('is-valid').removeClass('is-invalid');
			}
		});
		/*function valtxtarea() {
		  var val = document.getElementById('Observaciones').value;
		  if (val.length == 0 || val==null) {
			$('#TotalFragmentos').addClass('is-invalid').removeClass('is-valid');
		  }else{
				$('#TotalFragmentos').addClass('is-valid').removeClass('is-invalid');
		  }
		}*/
	</script>
</body>

</html>