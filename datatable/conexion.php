<?php
	
	$mysqli = new mysqli("localhost", "root", "12345", "abdarqueologia");
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>