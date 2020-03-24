
<?php
    require ('../conexion/conexion.php');

    $id = $_GET["idUsuario"];

    $sql = "DELETE FROM usuarios WHERE idUsuario = '$id'";
    
    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Usuario/inicioAdministrador.php");    
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>