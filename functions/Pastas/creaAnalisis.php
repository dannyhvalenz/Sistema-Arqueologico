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
    
    $ds = DIRECTORY_SEPARATOR;  //variable para el separador de directorio

    $sql = "INSERT INTO analisispastas (NumAnalisisPasta, Fecha, Cuadrante, Sitio, Patron, 
                Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, 
                Peso, TotalFragmentos, Observaciones, Estado) VALUES ('$NumAnalisisPasta', '$Fecha', '$Cuadrante', 
                '$Sitio', '$Patron', '$Utme', '$Utmn', '$Latitud', '$Analizo', '$Bolsa', '$Tipo',
                '$Tratamiento','$Modificacion','$FormasTratamientos','$Peso','$TotalFragmentos', 
                '$Observaciones', '$Estado')";
    //$resultado = $mysqli->query($sql);
	
//mysqli_insert_id($conn);
    //$ruta = 'files/'.$id_insert.'/';
    
	$id_insert = mysqli_insert_id($conexion);
    $resultado=mysqli_query($conexion, $sql);
	$storeFolder = 'uploads/'.$id_insert.'/';   //carpeta donde se alojara 
	mkdir($storeFolder);
    if (!empty($_FILES)) {

            $tempFile = $_FILES['file']['tmp_name'];          //Si el archivo se envía a la página, almacene el objeto del archivo en una variable temporal.             

            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //Cree la ruta absoluta de la carpeta de destino.

            $targetFile =  $targetPath. $_FILES['file']['name'];  //Cree la ruta absoluta del destino del archivo cargado.

            move_uploaded_file($tempFile,$targetFile); //Mover el archivo cargado al destino.

        }
	/*$id_insert = mysqli_insert_id($conexion);
	
	if($_FILES["archivo"]["error"]>0){
		echo "Error al cargar archivo";	
		} else {
		
		$permitidos = array("image/gif","image/png","application/pdf");
		$limite_kb = 200;
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){
			
			$ruta = 'files/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
				if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
				}
				
				} else {
				echo "Archivo ya existe";
			}
			
			} else {
			echo "Archivo no permitido o excede el tamaño";
		}
		
	}*/
	
	/*if(!file_exists($storeFolder)){
				mkdir($storeFolder);
	}
	$id_insert = mysqli_insert_id();
	$storeFolder = 'uploads/'.$id_insert.'/';   //carpeta donde se alojara 
	mkdir($storeFolder);
    if (!empty($_FILES)) {

            $tempFile = $_FILES['file']['tmp_name'];          //Si el archivo se envía a la página, almacene el objeto del archivo en una variable temporal.             

            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //Cree la ruta absoluta de la carpeta de destino.

            $targetFile =  $targetPath. $_FILES['file']['name'];  //Cree la ruta absoluta del destino del archivo cargado.

            move_uploaded_file($tempFile,$targetFile); //Mover el archivo cargado al destino.

        }/**/ 

    if($resultado==true){    
        
        header("Location: ../../pages/Pastas/analisis-Pastas.php");
        
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

 

?>