<?php
    require ('../conexion/conexion.php');
    
    session_start();
   
    if(isset($_SESSION["id"])){
        header("Location: ../../pages/Pastas/analisis-Pastas.php");
    }
   
    if(!empty($_POST)){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
        
        $result = mysqli_query($conexion, $sql);
        if(mysqli_query($conexion, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $iddom = $didmed['0']; 
                    echo "<script>console.log('Sesion de: " . $iddom . "' );</script>";
                    if ($row['cargo'] == 'Administrador'){
                        $_SESSION['usuario'] = $usuario;
                        header("Location: ../../pages/Usuario/inicioAdministrador.php");
                    } else if ($row['cargo'] == 'Arqueologo'){
                        $_SESSION['usuario'] = $usuario;
                        header("Location: ../../pages/Pastas/analisis-Pastas.php");
                    }
                }
            }else{
                die(header("Location:../../pages/Login/login.php?loginFailed=true&reason=password"));
                
            } 
        } else {
            die(header("Location:../../pages/Login/login.php?loginFailed=true&reason=errorconexion"));
            
        }
         
    }
?>