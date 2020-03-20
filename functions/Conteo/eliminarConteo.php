<?php
    require ('../conexion/conexion.php');

    $id = $_GET["idConteo"];

    $sql = "DELETE FROM conteocolecciones WHERE idConteo = '$id'";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Conteo/conteo-Colecciones.php");    
    }else{
        header("location: ../../pages/Otras/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>