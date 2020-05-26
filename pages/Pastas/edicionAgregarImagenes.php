<?php
	$IdAnalisisPastas = $_POST['idRegistro'];//debo de tomar el id
	$carpeta='imagenes/'.$IdAnalisisPastas.'/';
	//$ficheros  = scandir($carpeta);//regresa un array
	if (is_dir($carpeta)){ //existe el directorio
		echo $IdAnalisisPastas; //'Las imagenes o la imagen fue registrada correctameente, Ya existia la carpeta'
	}else{
		mkdir($carpeta, 0777, true); //crea la carpeta
		echo $IdAnalisisPastas;//'Las imagenes o la imagen fue registrada correctameente, No existia la carpeta.'
	}
	/*if (!empty($_FILES)) { //preguntas si hay archivos
		//$carpeta='imagenes/'.$IdAnalisisPastas.'/'; //debe de tomar el id
		if (is_dir($carpeta)){ //existe el directorio
			move_uploaded_file($_FILES["file"]["tmp_name"], $carpeta.$_FILES['file']['name']);
			echo 'Las imagenes o la imagen fue registrada correctameente, Ya existia la carpeta';
		}else{
			mkdir($carpeta, 0777, true); //crea la carpeta
			move_uploaded_file($_FILES["file"]["tmp_name"], $carpeta.$_FILES['file']['name']);
			echo 'Las imagenes o la imagen fue registrada correctameente, No existia la carpeta.';
		}
		
	}else{
		echo 'No hay archivos';
	}*/

	/**/
	//echo $ficheros;
	//echo $carpeta;
	/*if (!empty($_FILES)) { //preguntas si hay archivos
		$carpeta = 'imagenes/'.$IdAnalisisPastas; //toma la ruta de la carpeta
		if (is_dir($carpeta)) { //pregunta si existe la carpeta
			$filename = $carpeta.'/'.$_FILES['file']['name'];
			$tmpFile = $_FILES['file']['tmp_name'];
			move_uploaded_file($tmpFile,$filename);
			
		}else{ //sino la crea
			mkdir($carpeta, 0777, true); //crea la carpeta
			$filename = $carpeta.'/'.$_FILES['file']['name'];
			$tmpFile = $_FILES['file']['tmp_name'];
			move_uploaded_file($tmpFile,$filename);
			
		}
	}*/
						   
?>