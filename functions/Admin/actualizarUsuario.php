<?php
    require ('../conexion/conexion.php');

    $idUsuario = $_POST['idUsuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];
    $usuario = $_POST['usuario'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario' , cargo='$cargo' , contrasena='$contrasena' WHERE idUsuario = '$idUsuario'";

    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location: ../../pages/Usuario/inicioAdministrador.php");
    } else {
        header("Location: ../../pages/Otras/nodisponible.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>