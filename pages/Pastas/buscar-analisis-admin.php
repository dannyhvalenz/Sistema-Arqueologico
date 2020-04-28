<?php
//fetch.php
require ('../../functions/conexion/conexion.php');

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conexion, $_POST["query"]);
 $query = "
  SELECT * FROM analisispastas 
  WHERE IdAnalisisPastas LIKE '%".$search."%'
  OR Tipo LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM analisispastas ORDER BY IdAnalisisPastas
 ";
}
$result = mysqli_query($conexion, $query);
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
    if ($row["Estado"]=='activo'){
        $estado = '<td>
        <a href="../../functions/Pastas/activar-desactivar-analisis.php?IdAnalisisPastas='.$row["IdAnalisisPastas"].'&Estado='.$row["Estado"].'"
            class="btn btn-outline-success '.$row["Estado"].'" role="button" id="btnActivar" data-toggle="modal">Activado</a>
        </td>';
    } else if ($row["Estado"]=='inactivo'){
        $estado = '<td>
        <a href="../../functions/Pastas/activar-desactivar-analisis.php?IdAnalisisPastas='.$row["IdAnalisisPastas"].'&Estado='.$row["Estado"].'"
            class="btn btn-outline-danger '.$row["Estado"].'" role="button" id="btnActivar" data-toggle="modal">Desactivado</a>
        </td>';
    }
  $output .= '
  <tbody>
   <tr>
    <td>'.$row["IdAnalisisPastas"].'</td>
    <td>'.date("d-m-Y", strtotime($row['Fecha'])).'</td>
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
    '.$estado;
    
 }
 echo $output;
}
else
{
 echo 'No hay resultados para esa busqueda';
}

?>