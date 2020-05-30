<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imágenes dinámicas de una carpeta en php</title>
</head>

<body>
<?php
    $directory="../functions/Pastas/imagenes/113";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        
            echo '<img src="'.$directory."/".$archivo.'" width="225" height="225">'."\n";
        
    }
    $dirint->close();
?>
</body>
</html>