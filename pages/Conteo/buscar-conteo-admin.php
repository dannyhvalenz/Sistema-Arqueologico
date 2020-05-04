<?php
    //fetch.php
    require ('../../functions/conexion/conexion.php');
    
    $output = '';

    if(isset($_POST["query"])){
        $search = mysqli_real_escape_string($conexion, $_POST["query"]);
        $query = "
        SELECT * FROM conteocolecciones 
        WHERE IdConteo LIKE '%".$search."%'
        OR Material LIKE '%".$search."%'
        ";
    }else{
        $query = "SELECT * FROM conteocolecciones ORDER BY IdConteo";
    }

    $result = mysqli_query($conexion, $query);
    if ($result == true){
        if(mysqli_num_rows($result) > 0){
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
            while($row = mysqli_fetch_array($result)){
                if ($row["Estado"]=='activo'){
                    $estado = '<td>
                    <a href="../../functions/Conteo/activar-desactivar-conteo.php?idConteo='.$row["idConteo"].'&Estado='.$row["Estado"].'"
                        class="btn btn-outline-success '.$row["Estado"].'" role="button" id="btnActivar" data-toggle="modal">Activado</a>
                    </td>';
                } else if ($row["Estado"]=='inactivo'){
                    $estado = '<td>
                    <a href="../../functions/Conteo/activar-desactivar-conteo.php?idConteo='.$row["idConteo"].'&Estado='.$row["Estado"].'"
                        class="btn btn-outline-danger '.$row["Estado"].'" role="button" id="btnActivar" data-toggle="modal">Desactivado</a>
                    </td>';
                }
                $output .= '
                <tbody>
                <tr>
                    <td>'.$row["idConteo"].'</td>
                    <td>'.$row["Material"].'</td>
                    <td>'.$row["ConteoArti"].'</td>
                    <td>'.$row["Colecto"].'</td>
                    <td>'.date("d-m-Y", strtotime($row['Fecha'])).'</td>
                    <td>'.date("H:i", strtotime($row['Hora'])).'</td>
                    <td>'.$row["IdAnalisisPastas"].'</td>
                    <td>'.$row["ObservaConteo"].'</td>
                    '.$estado;
            }
            echo $output;
        } else {
            echo 'No hay resultados para esa busqueda';
        }
    } else {
        echo 'Error de conexion con la base de datos';
    }
    

?>