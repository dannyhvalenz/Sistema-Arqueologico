<?php
    require ('../conexion/conexion.php');

    $idUsuario = $_POST['idUsuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];
    $usuario = $_POST['usuario'];


    $sqlexiste = "
        SELECT * FROM usuarios WHERE usuario='$usuario'
    ";

    $existe = mysqli_query($conexion, $sqlexiste);

    if ($existe == true){
        if(mysqli_num_rows($existe) > 0){
            while($row = mysqli_fetch_array($existe)){
                if ($row["idUsuario"] == $idUsuario){
                    $mismoid = true;
                }
            }

            if ($mismoid == false){
                die(header("Location:../../pages/Usuario/actualizar-usuario.php?usuarioFallido=true&reason=existe&idUsuario=".$idUsuario));
            } else if ($mismoid) {
                $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario' , cargo='$cargo' , contrasena='$contrasena' WHERE idUsuario = '$idUsuario'";

                $resultado = mysqli_query($conexion, $sql);

                if($resultado==true){    
                    header("Location: ../../pages/Usuario/inicioAdministrador.php");
                } else {
                    die(header("Location:../../pages/Usuario/actualizar-usuario.php?usuarioFallido=true&reason=errorconexion&idUsuario=".$idUsuario));
                }

            }
        } else {
            $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario' , cargo='$cargo' , contrasena='$contrasena' WHERE idUsuario = '$idUsuario'";

            $resultado = mysqli_query($conexion, $sql);

            if($resultado==true){    
                header("Location: ../../pages/Usuario/inicioAdministrador.php");
            } else {
                die(header("Location:../../pages/Usuario/actualizar-usuario.php?usuarioFallido=true&reason=errorconexion&idUsuario=".$idUsuario));
            }
        }
    } else {
        die(header("Location:../../pages/Usuario/actualizar-usuario.php?usuarioFallido=true&reason=errorconexion&idUsuario=".$idUsuario));
    }

    mysqli_free_result($resultado);
    mysqli_free_result($existe);
    mysqli_close($conexion);

?>