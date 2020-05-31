
<?php
    require ('../conexion/conexion.php');

    $id = $_GET["IdAnalisisPastas"];

    $sql = "UPDATE analisispastas SET Estado='inactivo' WHERE IdAnalisisPastas = '$id'";
    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado == true){   
        header("Location: ../../pages/Pastas/analisis-Pastas.php");    
    }else{
        die(header("Location: ../../pages/Pastas/analisis-Pastas.php?analisisFallido=true&reason=errorconexion"));
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>