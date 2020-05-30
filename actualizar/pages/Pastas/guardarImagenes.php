<?php
	/*echo "<pre>";
	print_r($_POST);
	echo"</pre>";*/
	//echo $id = $_POST['CustomerId'];
    $id = $_POST['CustomerId'];
	//!empty($_FILES)
	if(!empty($_FILES['imagenesA'])){
		if (($_FILES["imagenesA"]["type"] == "image/jpeg") || ($_FILES["imagenesA"]["type"] == "image/jpg") || ($_FILES["imagenesA"]["type"] == "image/png")){
			$nombre = $_FILES['imagenesA']['name']; //Nombre del archivo y su extension
			$ruta = "imagenes/".$id."/".$nombre;
			$resultado = @move_uploaded_file($_FILES["imagenesA"]["tmp_name"], $ruta); //determina si se pudo o no copiar el archivo
			if($resultado!=false){
				echo $ruta;
			}
			else{
				echo "NO hay nada";
			}
		}
	}
	else{echo "ssss";}
	/*if (!empty($_FILES)) {
					mkdir($uploadDir, 0777);
					for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
						$filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
						$tmpFile = $_FILES['archivo']['tmp_name'][$i];
						move_uploaded_file($tmpFile,$filename);
					}
					echo("1");
				}else if(empty($_FILES)){
					echo("1");
				}*/

?>