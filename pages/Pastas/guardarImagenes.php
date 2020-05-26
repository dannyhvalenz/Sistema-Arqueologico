<?php
	//$id = $_POST['ruta'];
	$nombre = $_FILES['imagenPlanta']['name']; //Nombre del archivo y su extencion
	//$ruta = "Complementos/".$id."/".$nombre;
	//$resultado = @move_uploaded_file($_FILES["imagenPlanta"]["tmp_name"], $ruta); //determina si se pudo o no copiar el archivo

	//if($resultado!=false){
		//echo $ruta;
	//}
	//else{
		echo "NO hay nada ".$_FILES['imagenPlanta']['name'];
	//}

?>