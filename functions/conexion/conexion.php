<?php
    // Crear conexion
    $conexion = new mysqli("localhost", "root", "", "abdarqueologia");

    // Checar conexion
    if ($conexion->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    } 

?>