<?php
    require ('../conexion/conexion.php');

    $IdAnalisisPastas = $_POST['comboAnalisisPastas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Material = $_POST['Material'];
    $ConteoArti = $_POST['ConteoArti'];
    $Colecto = $_POST['Colecto'];
    $ObservaConteo = $_POST['Observaciones'];
    $idConteo = $_POST['idConteo'];

    $sql = "
        UPDATE conteocolecciones SET Material='$Material', ConteoArti='$ConteoArti', Fecha='$Fecha' , Hora='$Hora' , 
            ObservaConteo='$ObservaConteo', IdAnalisisPastas='$IdAnalisisPastas' , Colecto='$Colecto' WHERE idConteo='$idConteo'
    ";

    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado == true){    
        header("Location: ../../pages/Conteo/conteo-Colecciones.php");
    } else {
        header("Location: ../../pages/Otras/nodisponible.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>