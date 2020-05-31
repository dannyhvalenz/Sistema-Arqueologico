<?php
	$id = $_POST['id'];
	$directorio = 'imagenes/'.$id;
	if (is_dir($directorio)){
		$archivos = scandir($directorio);
		echo json_encode($archivos);
	}else{
		echo("no hay");
	}
?>