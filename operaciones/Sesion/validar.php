<?php
   require('conexion.php');
	
   session_start();
   
   if(isset($_SESSION["id_usuario"])){
    header("Location: analisis-Pastas.php");
   }
   
   if(!empty($_POST))
   {
       $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
       $contrasena = mysqli_real_escape_string($mysqli,$_POST['contrasena']);
       $error = '';
       
       //$sha1_pass = sha1($contrasena);
       
       $sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
       $result=$mysqli->query($sql);
       $rows = $result->num_rows;
       
       if($rows > 0) {
           $row = $result->fetch_assoc();
           $_SESSION['id_usuario'] = $row['id'];
           
           header("location: welcome.php");
           } else {
           $error = "El nombre o contraseña son incorrectos";
       }
   }
?>