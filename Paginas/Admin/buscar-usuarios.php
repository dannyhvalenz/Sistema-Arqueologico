<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "abdarqueologia");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM usuarios 
  WHERE Nombre LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM usuarios ORDER BY idUsuario
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 
 <table class="table table-bordered">
     <thead>
         <tr style="padding: 5px, 10px">
             <th>Nombre</th>
             <th>Apellidos</th>
             <th>Contraseña</th>
             <th>Cargo</th>
         </tr>
     </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tbody>
   <tr>
    <td>'.$row["Nombre"].'</td>
    <td>'.$row["Apellido"].'</td>
    <td>'.$row["Contrasena"].'</td>
    <td>'.$row["Cargo"].'</td>
    
    <td><a href="../../Paginas/Admin/actualizar-usuario.php?idUsuario='.$row["idUsuario"].'"
        class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a>
    </td>
    <td><a href="../Sistema Arqueologico/operaciones/Analisis/eliminarUsuario.php?idUsuario='.$row["idUsuario"].'"
        class="btn btn-danger  glyphicon glyphicon-remove" id="eliminar"></a></td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'No hay resultados para esa busqueda';
}

?>