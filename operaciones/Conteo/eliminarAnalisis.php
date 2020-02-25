<?php
    require ('../conexion/conexion.php');

    $id = $_GET["IdAnalisisPastas"];
    echo $id;

    $sql = "DELETE FROM analisispastas WHERE IdAnalisisPastas = '$id'";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../../Sistema Arqueologico/con-Pastas.php");    
    }else{
        header("location: ../../paginas/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>