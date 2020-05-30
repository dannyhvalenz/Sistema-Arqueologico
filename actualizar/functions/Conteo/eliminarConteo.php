<?php
    require ('../conexion/conexion.php');

    $id = $_GET["idConteo"];

    //$sql = "DELETE FROM conteocolecciones WHERE idConteo = '$id'";
    $sql = "UPDATE conteocolecciones SET Estado='inactivo' WHERE idConteo = '$id'";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Conteo/conteo-Colecciones.php");    
    }else{
        die(header("Location: ../../pages/Conteo/conteo-Colecciones.php?conteoFallido=true&reason=errorconexion"));
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
