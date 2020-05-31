
<?php
    require ('../conexion/conexion.php');

    $id = $_GET["IdAnalisisPastas"];
    $estado = $_GET["Estado"];

    if ($estado=='activo'){
        $sql = "UPDATE analisispastas SET Estado='inactivo' WHERE IdAnalisisPastas = '$id'";
    } else if ($estado=='inactivo'){
        $sql = "UPDATE analisispastas SET Estado='activo' WHERE IdAnalisisPastas = '$id'";
    }

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        
        header("Location: ../../pages/Pastas/analisis-Pastas-Admin.php");    
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>