<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "12345", "abdarqueologia");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM conteocolecciones 
  WHERE IdConteo LIKE '%".$search."%'
  OR Material LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM conteocolecciones ORDER BY IdConteo
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
             <th>Material</th>
             <th>Conteo Artificial</th>
             <th>Colecto</th>
             <th>Fecha</th>
             <th>Hora</th>
             <th>Id Analisis de Pastas</th>
             <th>Obvservaciones</th>
         </tr>
     </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tbody>
   <tr>
    <td>'.$row["idConteo"].'</td>
    <td>'.$row["Material"].'</td>
    <td>'.$row["ConteoArti"].'</td>
    <td>'.$row["Colecto"].'</td>
    <td>'.$row["Fecha"].'</td>
    <td>'.$row["Hora"].'</td>
    <td>'.$row["IdAnalisisPastas"].'</td>
    <td>'.$row["ObservaConteo"].'</td>
    <td><a href="actualizar-conteo.php?idConteo='.$row["idConteo"].'"
        class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a>
    </td>
    <td><a href="../../functions/Conteo/eliminarConteo.php?idConteo='.$row["idConteo"].'"
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