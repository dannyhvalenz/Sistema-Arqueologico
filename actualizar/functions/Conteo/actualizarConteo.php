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
    $mismoid = false;

    $sqlexiste = "
        SELECT * FROM conteocolecciones WHERE Material='$Material' AND ConteoArti='$ConteoArti' 
            AND Colecto='$Colecto' AND Fecha='$Fecha' AND IdAnalisisPastas='$IdAnalisisPastas' 
            AND Estado='activo'
    ";

    $existe = mysqli_query($conexion, $sqlexiste);
    if ($existe == true){
        if(mysqli_num_rows($existe) > 0){
            while($row = mysqli_fetch_array($existe)){
                if ($row["idConteo"] == $idConteo){
                    $mismoid = true;
                }
            }
            
            if ($mismoid == false){
                die(header("Location:../../pages/Conteo/actualizar-conteo.php?conteoFallido=true&reason=existe&idConteo=".$idConteo));
            } else if ($mismoid == true){
                
                $sql = "
                    UPDATE conteocolecciones SET Material='$Material', ConteoArti='$ConteoArti', Fecha='$Fecha' , Hora='$Hora' , 
                    ObservaConteo='$ObservaConteo', IdAnalisisPastas='$IdAnalisisPastas' , Colecto='$Colecto' WHERE idConteo='$idConteo'
                    ";
                    $resultado = mysqli_query($conexion, $sql);

                    if(mysqli_query($conexion, $sql)){    
                        header("Location: ../../pages/Conteo/conteo-Colecciones.php");
                    } else {
                        die(header("Location:../../pages/Conteo/actualizar-conteo.php?conteoFallido=true&reason=errorconexion&idConteo=".$idConteo));
                    }
            }
        } else { 
            
            $sql = "
                UPDATE conteocolecciones SET Material='$Material', ConteoArti='$ConteoArti', Fecha='$Fecha' , Hora='$Hora' , 
                ObservaConteo='$ObservaConteo', IdAnalisisPastas='$IdAnalisisPastas' , Colecto='$Colecto' WHERE idConteo='$idConteo'
            ";
            $resultado = mysqli_query($conexion, $sql);

            if(mysqli_query($conexion, $sql)){    
                header("Location: ../../pages/Conteo/conteo-Colecciones.php");
            } else {
                die(header("Location:../../pages/Conteo/actualizar-conteo.php?conteoFallido=true&reason=errorconexion&idConteo=".$idConteo));
            }
        }
    } else {
        die(header("Location:../../pages/Conteo/actualizar-conteo.php?conteoFallido=true&reason=errorconexion&idConteo=".$idConteo));
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>