<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

    <title>Alta de Administradores</title>
</head>
<body>
    <div class="m-auto">
        <div class="mx-auto  text-center" >
        <h1>Bienvenido Admin a tu ABM</h1>
        <caption>Formulario: Alta de Admin</caption>
        </div>

        
        <form action="agregar_datos.php" method="post" class= "container  w-100">
            <table class="m-auto">
               
                <tr>
                    <td>Nombre: <input type="text" class="form-control" name="nombre" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Apellido: <input type="text" class="form-control" name="apellido" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Email: <input type="email" class="form-control" name="email" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Usuario: <input type="text" class="form-control" name="usuario" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Clave: <input type="password" class="form-control" name="clave" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Repetir Clave: <input type="password" class="form-control" name="repetir_clave" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>
                        <select class="mb-3 text-center" name="permiso" id="">
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class = "button "><input class="mb-3" type="submit" value="Enviar"></td>
                </tr>
                <tr">
                    <td class="button"><button class="button mb-3"><a class="text-decoration-none text-secondary" href="consultar_datos.php">Ver Usuarios</a></button></td>
                </tr>
                <tr>
                    <td class="button"><button class="button"><a class="text-decoration-none text-secondary" href="logout.php">Cerrar sesión</a></button></td>
                </tr>


            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>