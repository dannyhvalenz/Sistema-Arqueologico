<?php
    require ('../conexion/conexion.php');

    $IdUsuario = $_POST['IdUsuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];

    $sql = "
        UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Contrasena='$Fecha' , Cargo='$Hora' , ObservaConteo='$ObservaConteo', IdAnalisisPastas='$IdAnalisisPastas' WHERE idConteo = '$idConteo'";

    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location: ../../Paginas/Admin/inicioAdministrador.php");
    } else {
        header("Location: ../../Paginas/Otras/nodisponible.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>