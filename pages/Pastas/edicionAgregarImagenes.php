<?php
	$IdAnalisisPastas = $_POST['idRegistro'];//debo de tomar el id
	$carpeta='imagenes/'.$IdAnalisisPastas.'/';
	if (is_dir($carpeta)){ //existe el directorio
		echo $IdAnalisisPastas; //'Las imagenes o la imagen fue registrada correctameente, Ya existia la carpeta'
	}else{
		mkdir($carpeta, 0777, true); //crea la carpeta
		echo $IdAnalisisPastas;//'Las imagenes o la imagen fue registrada correctameente, No existia la carpeta.'
	}					   
?>