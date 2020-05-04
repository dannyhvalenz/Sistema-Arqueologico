<?php
    //fetch.php
    require ('../../functions/conexion/conexion.php');
    
    $output = '';

    if(isset($_POST["query"])){
        $search = mysqli_real_escape_string($conexion, $_POST["query"]);
        if ($search != ""){
            $query = "
            SELECT * FROM usuarios 
            WHERE nombre LIKE '%".$search."%'
            OR apellido LIKE '%".$search."%'
            ";
        } else {
            $query = "SELECT * FROM usuarios ORDER BY idUsuario";
        }
        
        
    } else {
        $query = "SELECT * FROM usuarios ORDER BY idUsuario";
    }

    $result = mysqli_query($conexion, $query);
    if ($result ==  true){
        if(mysqli_num_rows($result) > 0){
            $output .= '
                <table class="table table-bordered">
                    <thead>
                        <tr style="padding: 5px, 10px">
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
            ';
            while($row = mysqli_fetch_array($result)){
                $output .= '
                <tbody>
                    <tr>
                        <td>'.$row["nombre"].'</td>
                        <td>'.$row["apellido"].'</td>
                        <td>'.$row["usuario"].'</td>
                        <td>'.$row["cargo"].'</td>
                        
                        <td><a href="../../pages/Usuario/actualizar-usuario.php?idUsuario='.$row["idUsuario"].'"
                            class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a>
                        </td>
                        <td><a href="../../functions/Admin/eliminarUsuario.php?idUsuario='.$row["idUsuario"].'"
                            class="btn btn-danger  glyphicon glyphicon-remove" id="eliminar"></a></td>
                    </tr>
                ';
            }
             echo $output;
        } else {
            echo 'No hay resultados para esa busqueda';
        }
    } else {
        echo 'Error de conexion con la base de datos';
    }
?>