<?php
    require ('../conexion/conexion.php');

    $Material = $_POST['Material'];
    $ConteoArti = $_POST['ConteoArti'];
    $Colecto = $_POST['Colecto'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $ObservaConteo = $_POST['ObservaConteo'];
    $id = $_POST['Latitud'];
    $Analizo = $_POST['Analizo'];
    $Bolsa = $_POST['Bolsa'];
    $Tipo = $_POST['Tipo'];
    $Tratamiento = $_POST['Tratamiento'];
    $Modificacion = $_POST['Modificacion'];
    $FormasTratamientos = $_POST['FormasTratamientos'];
    $Peso = $_POST['Peso'];
    $TotalFragmentos = $_POST['TotalFragmentos'];
    $Observaciones = $_POST['Observaciones'];

    echo $Fecha;

    $sql = "INSERT INTO analisispastas (NumAnalisisPasta, Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones) VALUES ('$NumAnalisisPasta', '$Fecha', '$Cuadrante', '$Sitio', '$Patron', '$Utme', '$Utmn', '$Latitud', '$Analizo', '$Bolsa', '$Tipo','$Tratamiento','$Modificacion','$FormasTratamientos','$Peso','$TotalFragmentos', '$Observaciones')";
    
    $resultado = mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location: conteo-Coleccion.php");
    }else{
        header("location: ../../paginas/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>