<?php
    require ('../conexion/conexion.php');

    $id = $_GET["idConteo"];
    echo $id;

    $sql = "DELETE FROM conteocolecciones WHERE idConteo = '$id'";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../../Sistema Arqueologico/conteo-Pastas.php");    
    }else{
        header("location: ../../paginas/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>