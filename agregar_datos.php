<?php 


    require_once 'conexion.php';




     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $email = $_POST['email'];
     $usuario = $_POST['usuario'];
     $clave = $_POST['clave'];
     $repetir_clave = $_POST['repetir_clave'];
     $permiso = $_POST['permiso'];

    
    



 

 
// Attempt insert query execution
$sql = "INSERT INTO usuario (nombre, apellido, usuario, clave, email, permiso) VALUES ('$nombre', '$apellido', '$usuario', '$clave', '$email', '$permiso')";

if(mysqli_query($link, $sql)){
    echo "Usted se a registrado exitosamente";
} else{
    echo "Usted no se ha podido registrar";
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo '<br><button><a class="text-decoration-none text-secondary" href="home.php">Volver a home</a></button>';
// Close connection
mysqli_close($link);


   
    
?>