<?php

    error_reporting(0);

    # CRUD de base de datos MySQL (CRUD = CREATE READ UPDATE DELETE)

    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $bd = 'demo';

    # Conexión a la base de datos
    $link = mysqli_connect($servidor, $usuario, $clave, $bd);
    
    // Check connection
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    // if ($conectar == false) {
    //     echo '<p style = "color: red,; font-weight: bold; font-size: 16px;"> Error al conectar a la base de datos.</p>' .  '<br />' . mysqli_connect();
    // } else {
    //     echo '<p style = "color: green; font-weight: bold; font-size: 16px;">Conexión a la base de datos satisfactoria.</p>';
    // }
    
    
    $consulta_sql = "SELECT * FROM usuario;";

    $ejecutar_consulta_sql = mysqli_query($link, $consulta_sql);

    

    # $registro = mysqli_fetch_all($ejecutar_consulta_sql);

    # Listar usuarios 

    // while($registro = mysqli_fetch_array($ejecutar_consulta_sql)) {

    //     echo  $registro['nombre'] . "<br>" . $registro['apellido'] . "<br>" . $registro['usuario'] . "<br>" . $registro['clave'] . "<br>";
    // }

    # crear ususario


    
    

?>