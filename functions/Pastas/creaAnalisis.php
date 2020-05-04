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
    //$resultado = $mysqli->query($sql);
	
//mysqli_insert_id($conn);
    //$ruta = 'files/'.$id_insert.'/';
    
	//$id_insert = mysqli_insert_id($conexion);
    $resultado=mysqli_query($conexion, $sql);
	
	//$storeFolder = 'uploads/'.$id_insert.'/';   //carpeta donde se alojara 
	mkdir($storeFolder);//crear el folder
    
	//agregar imagenes
	$ds = DIRECTORY_SEPARATOR;  //variable para el separador de directorio
 
	$storeFolder = 'imagenes';   //Declarar una variable para la carpeta de destino. 

	if (!empty($_FILES)) {

		$tempFile = $_FILES['file']['tmp_name'];//Si el archivo se envía a la página, almacena el objeto del archivo en una variable temporal.             

		$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //Crea la ruta absoluta de la carpeta de destino.

		$targetFile =  $targetPath. $_FILES['file']['name'];  //Crea la ruta absoluta del destino del archivo cargado.
		move_uploaded_file($tempFile,$targetFile); //Mover el archivo cargado al destino.

	}

    if($resultado==true){    
        
        header("Location: ../../pages/Pastas/analisis-Pastas.php");
        
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

 

?>