<?php
    require ('../conexion/conexion.php');
	
    session_start();
   
    if(isset($_SESSION["id"])){
        header("Location: ../../Paginas/Pastas/analisis-Pastas.php");
    }
   
    if(!empty($_GET)){
        $usuario = $_GET['usuario'];
        $contrasena = $_GET['contrasena'];
        
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
        
        $result = mysqli_query($conexion, $sql);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $iddom = $didmed['0']; 
                echo "<script>console.log('Sesion de: " . $iddom . "' );</script>";
                if ($row['cargo'] == 'Administrador'){
                    $_SESSION['usuario'] = $usuario;
                    header("Location: ../../Paginas/inicioAdministrador.php");
                } else if ($row['cargo'] == 'Arqueologo'){
                    $_SESSION['usuario'] = $usuario;
                    header("Location: ../../Paginas/Pastas/analisis-Pastas.php");
                }
            }
        }else{
            //$respuesta = "Invalido"
            //return $respuesta;
        }  

        /*
        $query = mysqli_query($conexion, "SELECT * FROM admins WHERE Nombreadmin = '$usuario' AND contrasena = '$contrasena'");
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            header("Location: inicioAdmin.php");
        }else{
            echo "Datos incorrectos";
        }  */
    }

/*

       $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
       $contrasena = mysqli_real_escape_string($mysqli,$_POST['contrasena']);
       $error = '';
       
       //$sha1_pass = sha1($contrasena);
                                                                                            
       $sql = "
       SELECT id, cargo FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'
       ";
       $result=$mysqli->query($sql);
       $rows = $result->num_rows;
       
       if($rows > 0) {
           $row = $result->fetch_assoc();
           $_SESSION['id'] = $row['id'];
           
                header("Location: ../../Paginas/Pastas/analisis-Pastas.php");
           } else {
                $error = "El usuario o contraseña son incorrectos";
       }
   }*/
?>