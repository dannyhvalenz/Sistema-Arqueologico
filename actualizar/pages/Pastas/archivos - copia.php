<?php
	$id = $_POST['id'];
	$directorio = 'imagenes/'.$id;
	$archivos = scandir($directorio);
	echo json_encode($archivos);
?>