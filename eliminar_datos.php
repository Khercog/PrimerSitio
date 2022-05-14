<?php

    require_once 'conexion.php';

    $consulta = "DELETE FROM usuarios WHERE id_usuarios = 21";

    $ejecutar_consulta_sql = mysqli_query($link, $consulta_sql);

?>