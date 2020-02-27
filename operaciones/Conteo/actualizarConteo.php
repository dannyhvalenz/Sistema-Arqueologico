<?php
    require ('../conexion/conexion.php');

    $IdAnalisisPastas = $_POST['IdAnalisisPastas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Material = $_POST['Material'];
    $ConteoArti = $_POST['ConteoArti'];
    $Colecto = $_POST['Colecto'];
    $ObservaConteo = $_POST['Observaciones'];
    $idConteo = $_POST['idConteo'];

    $sql = "
        UPDATE conteocolecciones SET Material='$Material', ConteoArti='$ConteoArti', Fecha='$Fecha' , Hora='$Hora' , ObservaConteo='$ObservaConteo', IdAnalisisPastas='$IdAnalisisPastas' WHERE idConteo = '$idConteo'";

    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location: ../../Paginas/Conteo/conteo-Colecciones.php");
    } else {
        header("Location: ../../Paginas/Otras/nodisponible.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>