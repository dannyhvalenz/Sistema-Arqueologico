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

    $sql = "
        UPDATE analisispastas SET Fecha='$Fecha', Cuadrante='$Cuadrante' 
           , Sitio='$Sitio', Patron='$Patron', Utme='$Utme' 
           , Utmn='$Utmn', Latitud='$Latitud', Analizo='$Analizo', Bolsa='$Bolsa' 
           , Tipo='$Tipo', Tratamiento='$Tratamiento', Modificacion='$Modificacion' 
           , FormasTratamientos='$FormasTratamientos', Peso='$Peso', TotalFragmentos='$TotalFragmentos' 
           , Observaciones='$Observaciones' WHERE IdAnalisisPastas='$IdAnalisisPastas'
    ";
                
    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location: ../../pages/Pastas/analisis-Pastas.php");
    }else{
        header("location: ../../pages/presentacion/nodisponible.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>