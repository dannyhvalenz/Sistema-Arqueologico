<?php
    require ('../conexion/conexion.php');

    $Fecha = $_POST['Fecha'];
    $Cuadrante = $_POST['Cuadrante'];
    $Sitio = $_POST['Sitio'];
    $Patron = $_POST['Patron'];
    $Utme = $_POST['Utme'];
    $Utmn = $_POST['Utmn'];
    $Latitud = $_POST['Latitud'];
    $Analizo = $_POST['Analizo'];
    $Bolsa = $_POST['Bolsa'];
    $Tipo = $_POST['Tipo'];
    $Tratamiento = $_POST['Tratamiento'];
    $Modificacion = $_POST['Modificacion'];
    $FormasTratamientos = $_POST['FormasTratamientos'];
    $Peso = $_POST['Peso'];
    $TotalFragmentos = $_POST['TotalFragmentos'];
    $Observaciones = $_POST['Observaciones'];
    $IdAnalisisPastas = $_POST['IdAnalisisPastas'];
	$mismoid = false;

    $sqlexiste = "
        SELECT * FROM analisispastas WHERE  Fecha='$Fecha' AND Cuadrante='$Cuadrante' 
            AND Sitio='$Sitio' AND Patron='$Patron' AND Utme=$Utme 
            AND Utmn=$Utmn AND Latitud=$Latitud AND Analizo='$Analizo' 
            AND Bolsa='$Bolsa' AND Tipo='$Tipo' AND Tratamiento='$Tratamiento' 
            AND Modificacion='$Modificacion' AND FormasTratamientos='$FormasTratamientos' 
            AND Peso=$Peso AND TotalFragmentos=$TotalFragmentos
            AND Estado='activo'
    ";
	$existe = mysqli_query($conexion, $sqlexiste);
    if ($existe == true){
        if(mysqli_num_rows($existe) > 0){
            while($row = mysqli_fetch_array($existe)){
                if ($row["IdAnalisisPastas"] == $IdAnalisisPastas){
                    $mismoid = true;
                }
            }
            
            if ($mismoid == false){
                echo("existe");
            } else if ($mismoid == true){
                $sql = "
					UPDATE analisispastas SET Fecha='$Fecha', Cuadrante='$Cuadrante' 
					   , Sitio='$Sitio', Patron='$Patron', Utme='$Utme' 
					   , Utmn='$Utmn', Latitud='$Latitud', Analizo='$Analizo', Bolsa='$Bolsa' 
					   , Tipo='$Tipo', Tratamiento='$Tratamiento', Modificacion='$Modificacion' 
					   , FormasTratamientos='$FormasTratamientos', Peso='$Peso', TotalFragmentos='$TotalFragmentos' 
					   , Observaciones='$Observaciones' WHERE IdAnalisisPastas='$IdAnalisisPastas'
                ";
                
                $resultado = mysqli_query($conexion, $sql);			
                if($resultado == true){   
                    //$id_insert = mysqli_insert_id($conexion);
                    $uploadDir = '../../pages/Pastas/imagenes/'.$IdAnalisisPastas;
                    if (!empty($_FILES)) {
                        if (is_dir($uploadDir)){
                            for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
                                $filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
                                $tmpFile = $_FILES['archivo']['tmp_name'][$i];
                                move_uploaded_file($tmpFile,$filename);
                            }
                        }else{
                            mkdir($uploadDir, 0777);
                            for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
                                $filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
                                $tmpFile = $_FILES['archivo']['tmp_name'][$i];
                                move_uploaded_file($tmpFile,$filename);
                            }
                        }	
                        echo("exito");
                    }else if(empty($_FILES)){
                        echo("exito");
                    }
                }else{
                    echo("errorconexion");
                }
                
            }

        } else { 
            $sql = "
                    UPDATE analisispastas SET Fecha='$Fecha', Cuadrante='$Cuadrante' 
                        , Sitio='$Sitio', Patron='$Patron', Utme='$Utme' 
                        , Utmn='$Utmn', Latitud='$Latitud', Analizo='$Analizo', Bolsa='$Bolsa' 
                        , Tipo='$Tipo', Tratamiento='$Tratamiento', Modificacion='$Modificacion' 
                        , FormasTratamientos='$FormasTratamientos', Peso='$Peso', TotalFragmentos='$TotalFragmentos' 
                        , Observaciones='$Observaciones' WHERE IdAnalisisPastas='$IdAnalisisPastas'
                ";
            
            $resultado = mysqli_query($conexion, $sql);			
            if($resultado == true){   
                //$id_insert = mysqli_insert_id($conexion);
                $uploadDir = '../../pages/Pastas/imagenes/'.$IdAnalisisPastas;
                if (!empty($_FILES)) {
                    if (is_dir($uploadDir)){
                        for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
                            $filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
                            $tmpFile = $_FILES['archivo']['tmp_name'][$i];
                            move_uploaded_file($tmpFile,$filename);
                        }
                    }else{
                        mkdir($uploadDir, 0777);
                        for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
                            $filename = $uploadDir.'/'.$_FILES['archivo']['name'][$i];
                            $tmpFile = $_FILES['archivo']['tmp_name'][$i];
                            move_uploaded_file($tmpFile,$filename);
                        }
                    }	
                    echo("exito");
                }else if(empty($_FILES)){
                    echo("exito");
                }
            }else{
                echo("errorconexion");
            }
        }
    } else {
        echo("errorconexion");
    }

    //mysqli_free_result($resultado);
    mysqli_close($conexion);
?>