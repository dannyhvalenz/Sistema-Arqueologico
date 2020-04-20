<?php
    // Crear conexion
<<<<<<< HEAD
    $conexion = mysqli_connect("localhost", "root", "", "abdarqueologia");
=======
    $host = 'localhost';
    $user = 'root';
    $password = '12345';
    $bd = 'abdarqueologia';

    $conexion = mysqli_connect($host, $user, $password, $bd);
    //$conexion = mysqli_connect("localhost", "root", "12345", "abdarqueologia");
>>>>>>> 225a7eeaf58577342b06eb792dfd9509c0b8e31b

    // Checar conexion
    if ($conexion->connect_error) {
        //die("Conexion fallida: " . $conn->connect_error);
        header("Location: ../../pages/Otras/conexion-fallida.php");
    } 

?>