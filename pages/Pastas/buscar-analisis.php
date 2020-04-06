<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "abdarqueologia");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM analisispastas 
  WHERE IdAnalisisPastas LIKE '%".$search."%'
  OR Tipo LIKE '%".$search."%' AND Estado='activo'
 ";
}
else
{
 $query = "
  SELECT * FROM analisispastas WHERE Estado='activo' ORDER BY IdAnalisisPastas
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class="table-responsive">
 <table class="table table-bordered">
     <thead>
         <tr style="padding: 5px, 10px">
             <th>ID</th>
             <th>Fecha</th>
             <th>Cuadrante</th>
             <th>Sitio</th>
             <th>Patrón</th>
             <th>Utm E</th>
             <th>Utm N</th>
             <th>Latitud</th>
             <th>Analizó</th>
             <th>Bolsa</th>
             <th>Tipo</th>
             <th>Tratamiento</th>
             <th>Modificación</th>
             <th>Forma/Tratamientos</th>
             <th>Peso</th>
             <th>Total de fragmentos</th>
             <th>Observaciones</th>
         </tr>
     </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tbody>
   <tr>
    <td>'.$row["IdAnalisisPastas"].'</td>
    <td>'.$row["Fecha"].'</td>
    <td>'.$row["Cuadrante"].'</td>
    <td>'.$row["Sitio"].'</td>
    <td>'.$row["Patron"].'</td>
    <td>'.$row["Utme"].'</td>
    <td>'.$row["Utmn"].'</td>
    <td>'.$row["Latitud"].'</td>
    <td>'.$row["Analizo"].'</td>
    <td>'.$row["Bolsa"].'</td>
    <td>'.$row["Tipo"].'</td>
    <td>'.$row["Tratamiento"].'</td>
    <td>'.$row["Modificacion"].'</td>
    <td>'.$row["FormasTratamientos"].'</td>
    <td>'.$row["Peso"].'</td>
    <td>'.$row["TotalFragmentos"].'</td>
    <td>'.$row["Observaciones"].'</td>
    <td><a href="../../functions/Pastas/editarAnalisis.php?IdAnalisisPastas='.$row["IdAnalisisPastas"].'"
        class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a>
    </td>
    <td><a href="../../functions/Pastas/eliminarAnalisis.php?IdAnalisisPastas='.$row["IdAnalisisPastas"].'"
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