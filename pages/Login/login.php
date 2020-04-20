<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--ICONO-->	
	<link rel="icon" type="image/png" href="../../icons/favicon.ico"/>

<!--STYLESHEET-->
	<link rel="stylesheet" type="text/css" href="../other/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="../../other/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../other/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../other/animate.css">

</head>
<body>
	<!--VERIFICA QUE ESTE LA SESION ACTIVA-->
    <?php
        
        session_start();

        if(isset($_SESSION['usuario'])){                   
			require ('../../functions/conexion/conexion.php'); 
			$user = $_SESSION['usuario'];

			$sql = "SELECT cargo FROM usuarios WHERE usuario='$user'";

			$result = mysqli_query($conexion, $sql);

			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					if ($row['cargo'] == 'Adminstrador'){
						header("Location: ../../pages/Usuario/inicioAdministrador.php");
					} else if ($row['cargo'] == 'Arqueologo'){
						header("Location: ../../pages/Pastas/analisis-Pastas.php");
					}
				}
			} 
		}
    ?>
	<div class="limiter ">
		<div class="container-login100 ">
			<div class="contenedor-login shadow p-3 mb-5 bg-white rounded">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../img/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="../../functions/Sesion/iniciarSesion.php" method="POST" >
					<span class="login100-form-title">
						Iniciar Sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingresa un email valido: ex@abc.xyz">
						<input type="text" class="input100" id="usuario" placeholder="Usuario" name="usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingresa la contraseña">
						<input class="input100" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
		
					<?php $reasons = array("password" => "Usuario o contraseña incorrecta", "blank" => "Hay campos vacios"); if ($_GET["loginFailed"]) echo "<span style='color:red;'>". $reasons[$_GET["reason"]] . "</span>"; ?>
					
					<div class="container-login100-form-btn">
						<button type="submit" id="" class="login100-form-btn">
							Ingresar
						</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>
<!--SCRIPTS-->	
	<script src="../../other/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../other/bootstrap/js/popper.js"></script>
	<script src="../../other/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../other/select2/select2.min.js"></script>
	<script src="../../other/tilt/tilt.jquery.min.js"></script>
	<script src="../../js/main.js"></script>
</body>
</html>