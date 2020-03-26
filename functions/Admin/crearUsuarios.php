<?php
    require ('../conexion/conexion.php');
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];

    $buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND apellido = '$apellido' AND usuario = '$usuario' AND cargo = '$cargo'";
    $consulta = $conexion->query($buscarUsuario);
    $count = mysqli_num_rows($consulta);
    if ($count == 4) {
        $var = "El Usuario ya existe";
        echo "<script> alert('".$var."'); </script>";
    }else{

        $query = "INSERT INTO usuarios (nombre, apellido, contrasena, cargo, usuario) VALUES ('$nombre', '$apellido', '$contrasena', '$cargo', '$usuario')";

        if ($conexion->query($query) === TRUE) {
            echo "<br />"."<h2>"."El Usuario fue Creado Exitosamente"."</h2>";
         }
         else {
            echo "Error al crear Usuario.".$buscarUsuario."<br>".$conexion->error;
         }
         header("Location: ../../pages/Usuario/inicioAdministrador.php");
         
     }
    mysqli_close($conexion);
?>