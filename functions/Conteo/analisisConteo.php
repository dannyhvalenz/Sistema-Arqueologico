<?php
    require ('../conexion/conexion.php');

    $IdAnalisisPastas = $_POST['IdAnalisisPastas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Material = $_POST['Material'];
    $ConteoArti = $_POST['ConteoArti'];
    $Colecto = $_POST['Colecto'];
    $ObservaConteo = $_POST['Observaciones'];

    $sqlexiste = "
        SELECT FROM conteocolecciones WHERE Material='$Material' AND ConteoArti='$ConteoArti' 
            AND Colecto='$Colecto' AND Fecha='$Fecha' AND IdAnalisisPastas='$IdAnalisisPastas'
    ";

    $exite = mysqli_query($conexion, $sqlexiste);
    
    echo "<script> console.log($existe) </script>";
    /*
    if ($exite){
        $sql = "
            INSERT INTO conteocolecciones (Material, ConteoArti, Colecto, Fecha, Hora, ObservaConteo, IdAnalisisPastas) 
            VALUES ('$Material','$ConteoArti','$Colecto','$Fecha','$Hora','$ObservaConteo','$IdAnalisisPastas')
        ";   
    
        $resultado = mysqli_query($conexion, $sql);

        if($resultado == true){    
            header("Location: ../../pages/Conteo/conteo-Colecciones.php");
        } else {
            header("Location: ../../pages/Otras/nodisponible.php");
        }

    } else {
        die(header("Location:../../pages/Conteo/nuevoRegistro-Conteo.php?existe=true"));
    }
*/
    mysqli_free_result($resultado);
    mysqli_free_result($existe);
    mysqli_close($conexion);

?>