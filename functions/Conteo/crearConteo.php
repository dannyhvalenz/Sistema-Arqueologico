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

    $sqlexiste = "
        SELECT * FROM conteocolecciones WHERE Material='$Material' AND ConteoArti='$ConteoArti' 
            AND Colecto='$Colecto' AND Fecha='$Fecha' AND IdAnalisisPastas='$IdAnalisisPastas' 
            AND Estado='activo'
    ";

    $existe = mysqli_query($conexion, $sqlexiste);

    if ($existe == true){
        if(mysqli_num_rows($existe) > 0){
            die(header("Location:../../pages/Conteo/nuevoRegistro-Conteo.php?conteoFallido=true&reason=existe"));
        } else { 
            $sql = "
                INSERT INTO conteocolecciones (Material, ConteoArti, Colecto, Fecha, Hora, ObservaConteo, IdAnalisisPastas, Estado)
                VALUES ('$Material','$ConteoArti','$Colecto','$Fecha','$Hora','$ObservaConteo','$IdAnalisisPastas','$Estado')
            ";   
        
            $resultado = mysqli_query($conexion, $sql);
    
            if($resultado == true){    
                header("Location: ../../pages/Conteo/conteo-Colecciones.php");
            } else {
                die(header("Location:../../pages/Conteo/nuevoRegistro-Conteo.php?conteoFallido=true&reason=errorconexion2"));
            }
        }
    } else {
        die(header("Location:../../pages/Conteo/nuevoRegistro-Conteo.php?conteoFallido=true&reason=errorconexion1"));
    }
    

    mysqli_free_result($resultado);
    mysqli_free_result($existe);
    mysqli_close($conexion);
?>