
<?php
    require ('../conexion/conexion.php');

    $id = $_GET["idConteo"];
    $estado = $_GET["Estado"];

    if ($estado=='activo'){
        $sql = "UPDATE conteocolecciones SET Estado='inactivo' WHERE idConteo = '$id'";
    } else if ($estado=='inactivo'){
        $sql = "UPDATE conteocolecciones SET Estado='activo' WHERE idConteo = '$id'";
    }

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Conteo/conteo-Colecciones-Admin.php");    
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>