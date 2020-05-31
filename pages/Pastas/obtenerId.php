<?php
	require ('../../functions/conexion/conexion.php');
	$query = "
        SELECT IdAnalisisPastas FROM analisispastas WHERE Estado='activo' ORDER BY IdAnalisisPastas
        ";
	
	$result = mysqli_query($conexion, $query);
	$cadena = "";
	if ($result == true){
		 while($row = mysqli_fetch_array($result)){
		 	$cadena = $cadena."/".$row["IdAnalisisPastas"];
		 }
	}
	echo $cadena;
?>