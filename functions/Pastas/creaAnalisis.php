<?php
    session_start();

    require ('../conexion/conexion.php');

    $NumAnalisisPasta = '100';
    $Fecha = $_POST['Fecha'];
    $Cuadrante = $_POST['Cuadrante'];
    $Sitio = $_POST['Sitio'];
    $Patron = $_POST['Patron'];
    $Utme = $_POST['Utme'];
    $Utmn = $_POST['Utmn'];
    $Latitud = $_POST['Latitud'];
    $Analizo = $_POST['Analizo'];
    $Bolsa = $_POST['Bolsa'];
    $Tipo = $_POST['Tipo'];
    $Tratamiento = $_POST['Tratamiento'];
    $Modificacion = $_POST['Modificacion'];
    $FormasTratamientos = $_POST['FormasTratamientos'];
    $Peso = $_POST['Peso'];
    $TotalFragmentos = $_POST['TotalFragmentos'];
    $Observaciones = $_POST['Observaciones'];
    $Estado = 'activo';
    $prueba = $_POST['text'];
    
    $sql = "INSERT INTO analisispastas (NumAnalisisPasta, Fecha, Cuadrante, Sitio, Patron, 
                Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, 
                Peso, TotalFragmentos, Observaciones, Estado) VALUES ('$NumAnalisisPasta', '$Fecha', '$Cuadrante', 
                '$Sitio', '$Patron', '$Utme', '$Utmn', '$Latitud', '$Analizo', '$Bolsa', '$Tipo',
                '$Tratamiento','$Modificacion','$FormasTratamientos','$Peso','$TotalFragmentos', 
                '$Observaciones', '$Estado')";

	
	if (!empty($_POST['Fecha']) && !empty($_POST['Cuadrante']) && !empty($_POST['Sitio']) && !empty($_POST['Patron']) && !empty($_POST['Utme']) && !empty($_POST['Utmn']) && !empty($_POST['Latitud']) && !empty($_POST['Analizo']) && !empty($_POST['Bolsa']) && !empty($_POST['Tipo']) && !empty($_POST['Tratamiento']) && !empty($_POST['Modificacion']) && !empty($_POST['FormasTratamientos']) && !empty($_POST['Observaciones']) && !empty($_POST['FormasTratamientos']) && !empty($_POST['Observaciones']) {
		$resultado=mysqli_query($conexion, $sql);	
		if($resultado==true){   
			$id_insert = mysqli_insert_id($conexion);

			$uploadDir = '../../pages/Pastas/imagenes/'.$id_insert;
			//$uploadDir = 'imagenes/500';

			mkdir($uploadDir, 0777);

			if (!empty($_FILES)) {
				for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
					$filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
					$tmpFile = $_FILES['archivo']['tmp_name'][$i];
					move_uploaded_file($tmpFile,$filename);
				}
				echo("1");
			}else if(empty($_FILES)){
				echo("1");
			}else{
				echo("0");
			}
		}else{
		}
	}else{
		header("Location: ../../pages/Pastas/analisis-Pastas.php");
	}
    mysqli_close($conexion);
?>