<?php

    require_once 'conexion.php';

    
    $usuario = '';
    $clave = '';
    $error_usuario = '';
    $error_clave = '';


    if(isset($_POST['usuario']) && isset($_POST['clave'])) {

        if(!empty($_POST['usuario']) && !empty($_POST['clave'])) {

            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            
            # Listar usuarios 

            while($registro = mysqli_fetch_array($ejecutar_consulta_sql)) {

                

                if ($registro['usuario'] == $usuario && $registro['clave'] == $clave && $registro['permiso'] == 'Administrador') {
                    header('Location: alta_admin.php');
                } else if ($registro['usuario'] == $usuario && $registro['clave'] == $clave) {
                    header('Location: home.php');
                }
            }

           
            if ($registro['usuario'])


            session_start();

            $_SESSION['usuario'] = $usuario;
            $_SESSION['clave'] = $clave;

        } 
        
        if(empty($_POST['usuario']) && empty($_POST['clave'])) {

         
            echo "<script>alert('Usuario y clave no ingresadas')</script>" ;
            
        } else  if(empty($_POST['usuario'])){
         
            echo "<script>alert('Usuario no ingresado')</script>" ;

        } else if(empty($_POST['clave'])){
            
            echo "<script>alert('Clave no ingresada')</script>" ;   
            
        }



       
      
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Log in</title>
    <link href="signin.css" rel="stylesheet">   
</head>

<body class="text-center">

<main class="form-signin w-100 m-auto">
  <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST" >
    <img class="mb-4" src="img/lion.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Ingrese sus credenciales</h1>

    <div class="form-floating">
      <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="Usuario" autocomplete="off">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuerdame
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">Lion Logic &copy; 2022</p>
  </form>
  <br><button><a class="text-decoration-none text-secondary" href="alta_usuario.php">Eres nuevo? Registrate!</a></button>
</main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>