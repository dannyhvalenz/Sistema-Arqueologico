<?php
    // Crear conexion
    $host = 'localhost';
    $user = 'root';
    $password = '12345';
    $bd = 'abdarqueologia';

    $conexion = mysqli_connect($host, $user, $password, $bd);
    //$conexion = mysqli_connect("localhost", "root", "12345", "abdarqueologia");

    // Checar conexion
    if ($conexion->connect_error) {
        //die("Conexion fallida: " . $conn->connect_error);
        header("Location: ../../pages/Otras/conexion-fallida.php");
    } 

?>