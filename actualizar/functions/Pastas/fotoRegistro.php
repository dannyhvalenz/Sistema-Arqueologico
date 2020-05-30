<?php
	sesion_start();
	while($_SESSION['idReg'] == ""){
	}
	$uploadDir = 'imagenes/'.$_SESSION['idReg'];
	
    mkdir('imagenes/'.$_SESSION['idReg'], 0777);
	if (!empty($_FILES)) {
		$tmpFile = $_FILES['file']['tmp_name'];
		$filename = $uploadDir.'/'.$_FILES['file']['name'];
		move_uploaded_file($tmpFile,$filename);
		$_SESSION['idReg'] ="";
	}

?>

