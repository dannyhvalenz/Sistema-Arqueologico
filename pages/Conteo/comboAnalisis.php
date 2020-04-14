<?php
//fetch.php
require ('../../functions/conexion/conexion.php');
$output = '';


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conexion, $_POST["query"]);
 $query = "
    SELECT * FROM analisispastas 
  WHERE IdAnalisisPastas LIKE '%".$search."%' OR
  Fecha LIKE '%".$search."%'
 ";
}
else
{
    $query = "
    SELECT * FROM analisispastas ORDER BY IdAnalisisPastas";
    
}
$result = mysqli_query($conexion, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <option class="dropdown-item" data-value='.$row["IdAnalisisPastas"].'>'.$row["IdAnalisisPastas"].".- ".$row["Fecha"].'</option>';
 }
 echo $output;
}
else
{
 echo 'No hay resultados para esa busqueda';
}

?>