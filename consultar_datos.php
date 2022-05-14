<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <title>Consultar Datos</title>
</head>
<body>
    
<?php
    require_once 'conexion.php';


// while($registro = mysqli_fetch_array($ejecutar_consulta_sql)) {

//     echo  $registro['nombre'] . "<br>" . $registro['apellido'] . "<br>" . $registro['usuario'] . "<br>" . $registro['clave'] . "<br>" . $registro['permiso'] . "<br><br><br><br>";
// }


echo '<table id="table_id" class="display">';
    echo '<thead>';
        echo '<tr>';
            echo '<td>ID</td>';
            echo '<td>Id Nombre</td>';
            echo '<td>Id Apellido</td>';
            echo '<td>Id Email</td>';
            echo '<td>Id Usuario</td>';
            echo '<td>Id Clave</td>';
            echo '<td>Id Permiso</td>';
        echo '<tr>';
    echo ' </thead>';

    while($registro = mysqli_fetch_array($ejecutar_consulta_sql)) {
    echo '<tbody>';
        echo '<tr>';
            echo '<td>' . $registro['id_usuario']; '</td>';
            echo '<td>' . $registro['nombre']; '</td>';
            echo '<td>' . $registro['apellido']; '</td>';
            echo '<td>' . $registro['email']; '</td>';
            echo '<td>' . $registro['usuario']; '</td>';
            echo '<td>' . $registro['clave']; '</td>';
            echo '<td>' . $registro['permiso'];'</td>';
        echo '<tr>';
    echo '</tbody>';
    }
echo '</table>';

?>

<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="script.js"></script>
</body>
</html>