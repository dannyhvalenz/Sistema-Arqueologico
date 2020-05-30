<?php
    require ('../conexion/conexion.php');
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];

    $sqlexiste = "
        SELECT * FROM usuarios WHERE usuario = '$usuario'
    ";
    $existe = mysqli_query($conexion, $sqlexiste);

    if ($existe == true){
        if (mysqli_num_rows($existe) > 0){
            die(header("Location:../../pages/Usuario/nuevoRegistro-Usuarios.php?usuarioFallido=true&reason=existe"));
        } else {
            $query = "
                INSERT INTO usuarios (nombre, apellido, contrasena, cargo, usuario) 
                VALUES ('$nombre', '$apellido', '$contrasena', '$cargo', '$usuario')
            ";

            $crearUsuario = mysqli_query($conexion, $query);
            if ($crearUsuario == true) {
                header("Location: ../../pages/Usuario/inicioAdministrador.php");
            } else {
                die(header("Location:../../pages/Usuario/nuevoRegistro-Usuarios.php?usuarioFallido=true&reason=errorconexion"));
            }
        }
    } else {
        die(header("Location:../../pages/Usuario/nuevoRegistro-Usuarios.php?usuarioFallido=true&reason=errorconexion"));
    }
    
    mysqli_free_result($query);
    mysqli_free_result($existe);
    mysqli_close($conexion);
?>