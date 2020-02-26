<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "12345", "abdarqueologia");
$output = '';

$query = "
SELECT * FROM analisispastas ORDER BY IdAnalisisPastas";


$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <a class="dropdown-item" data-value="" data-default-selected="">Analisis de
                                    pastas</a>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <a class="dropdown-item" data-value='.$row["IdAnalisisPastas"].'>'.$row["IdAnalisisPastas"]." .- ".$row["Fecha"].'</a>';
 }
 echo $output;
}
else
{
 echo 'No hay resultados para esa busqueda';
}

?>