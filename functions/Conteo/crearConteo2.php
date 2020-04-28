<?php
    require ('../conexion/conexion.php');

    $IdAnalisisPastas = $_POST['comboAnalisisPastas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Material = $_POST['Material'];
    $ConteoArti = $_POST['ConteoArti'];
    $Colecto = $_POST['Colecto'];
    $ObservaConteo = $_POST['Observaciones'];
    $Estado = 'activo';

    
    $sql = "
        INSERT INTO conteocolecciones (Material, ConteoArti, Colecto, Fecha, Hora, ObservaConteo, IdAnalisisPastas, Estado)
        VALUES ('$Material','$ConteoArti','$Colecto','$Fecha','$Hora','$ObservaConteo','$IdAnalisisPastas','$Estado')
    ";   

    $resultado = mysqli_query($conexion, $sql);
    $response = $resultado;

    mysqli_free_result($resultado);
    mysqli_close($conexion);

    echo $response;
    /*if($resultado == true){    
        header("Location: ../../pages/Conteo/conteo-Colecciones.php");
    } else {
        header("Location: ../../pages/Otras/nodisponible.php");
    }
*/
    exit();
?>