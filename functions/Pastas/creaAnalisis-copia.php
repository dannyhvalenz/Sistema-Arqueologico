<?php
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
    
    
    $sql = "INSERT INTO analisispastas (NumAnalisisPasta, Fecha, Cuadrante, Sitio, Patron, 
                Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, 
                Peso, TotalFragmentos, Observaciones, Estado) VALUES ('$NumAnalisisPasta', '$Fecha', '$Cuadrante', 
                '$Sitio', '$Patron', '$Utme', '$Utmn', '$Latitud', '$Analizo', '$Bolsa', '$Tipo',
                '$Tratamiento','$Modificacion','$FormasTratamientos','$Peso','$TotalFragmentos', 
                '$Observaciones', '$Estado')";

	$resultado=mysqli_query($conexion, $sql);
 
    /*if($resultado==true){ 
		$id_insert = mysqli_insert_id($conexion);
		//$storeFolder = 'uploads/'.$id_insert.'/';
		$uploadDir = 'imagenes/'.$id_insert.'/';
		mkdir('imagenes/'.$id_insert, 0777);
		if (!empty($_FILES)) {
		 $tmpFile = $_FILES['file']['tmp_name'];
		 $filename = $uploadDir.'/'.$_FILES['file']['name'];
		 move_uploaded_file($tmpFile,$filename);
		}
	}*/
	//$id_insert = mysqli_insert_id($conexion); //tomar el id del registro

	//$ruta = 'imagenes/'.$id_insert.'/';
      
	//$storeFolder = 'uploads/'.$id_insert.'/';   //carpeta donde se alojara 
	//mkdir($storeFolder);//crear el folder
    // mkdir('imagenes/'.$id_insert, 0777);
	//agregar imagenes
	//$ds = DIRECTORY_SEPARATOR;  //variable para el separador de directorio
 
	/*$storeFolder = 'imagenes';   //Declarar una variable para la carpeta de destino. 

	if (!empty($_FILES)) { //si existen archivos

		$tempFile = $_FILES['file']['tmp_name'];//Si el archivo se envía a la página, almacena el objeto del archivo en una variable temporal.             

		$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //Crea la ruta absoluta de la carpeta de destino.

		$targetFile =  $targetPath. $_FILES['file']['name'];  //Crea la ruta absoluta del destino del archivo cargado.
		move_uploaded_file($tempFile,$targetFile); //Mover el archivo cargado al destino.
		//echo '<script type="text/javascript">alert(“archivoAnalisisPastas”);</script>';
	}*/

    if($resultado==true){    
        $id_insert = mysqli_insert_id($conexion);
		//$storeFolder = 'uploads/'.$id_insert.'/';
		$uploadDir = 'imagenes/'.$id_insert.'/';
		mkdir($uploadDir, 0777);
		if (!empty($_FILES)) {
			mkdir($uploadDir, 0777);
			 $tmpFile = $_FILES['file']['tmp_name'];
			 $filename = $uploadDir.'/'.$_FILES['file']['name'];
			 move_uploaded_file($tmpFile,$filename);
		}
        header("Location: ../../pages/Pastas/analisis-Pastas.php");
        
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

 

?>