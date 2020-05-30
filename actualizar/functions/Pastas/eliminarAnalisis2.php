<?php
    require ('../conexion/conexion.php');

    $id = $_GET["IdAnalisisPastas"];

    $sql = "DELETE FROM analisispastas WHERE IdAnalisisPastas = '$id'";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Pastas/analisis-Pastas.php");    
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
