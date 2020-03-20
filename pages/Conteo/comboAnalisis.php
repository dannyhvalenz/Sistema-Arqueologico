<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "12345", "abdarqueologia");
$output = '';


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
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
$result = mysqli_query($connect, $query);
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