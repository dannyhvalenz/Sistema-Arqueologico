<?php
    require ('../conexion/conexion.php');
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];

    $buscarUsuario = "SELECT * FROM usuarios WHERE Nombre = '$nombre' AND Apellido = '$apellido' AND Contrasena = '$contrasena' AND Cargo = '$cargo'";
    $consulta = $conexion->query($buscarUsuario);
    $count = mysqli_num_rows($consulta);
    if ($count == 4) {
        $var = "El Usuario ya existe";
        echo "<script> alert('".$var."'); </script>";
    }else{

        $query = "INSERT INTO usuarios (Nombre, Apellido, Contrasena, Cargo) VALUES ('$nombre', '$apellido', '$contrasena', '$cargo')";

        if ($conexion->query($query) === TRUE) {
            echo "<br />"."<h2>"."El Usuario fue Creado Exitosamente"."</h2>";
         }
         else {
            echo "Error al crear Usuario.".$buscarUsuario."<br>".$conexion->error;
         }
         header("Location: ../../pages/Admin/inicioAdministrador.php");
         
     }
    mysqli_close($conexion);
?>