<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
    
    <title>Alta de Usuarios</title>
</head>
<body>
    
        <div class="m-auto text-center" >
        <h1>Bienvenido/a a tu ABM Dashboard </h1>
        <caption>Formulario: Alta de Usuario</caption>  
        </div>
        <form action="agregar_datos.php" method="post" class= "container  w-100">
         
            
            <table class="m-auto">

                <tr>
                    <td>Nombre: <input type="text" class="form-control w-100" name="nombre" id="" placeholder="" required autocomplete=""></td>
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
                    <td>Repetir Clave: <input type="password" class="form-control mb-3" name="repetir_clave" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>
                        <select name="permiso" id="" style="display: none;">
                            <option value="usuario" default>Usuario</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class = "button"><input class="mb-3" type="submit" value="Registrarse"></td>
                </tr>
                <tr>
                    <td class="button"><button><a class="text-decoration-none text-secondary" href="logout.php">Cerrar sesión</a></button></td>
                </tr>


            </table>

            
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>