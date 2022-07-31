<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Proyecto Final CAC Listado de Usuarios</title>

</head>


<body class="text-center bg-light">

    <div class="container">

        <div class="py-4 text-center">
            <img class="d-block mx-auto mb-4" src="./Imagenes/logo.jpg" alt="loco caba" width="72" height="72">
            <h2>Usuarios</h2>
            <p class="lead">Listado de Usuarios</p>
        </div>

        <table class="table table-hover table-sm">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once("../dao/UsuarioDAO.php");

                $dao = new UsuarioDAO();
                $listarUsuarios = $dao->listarUsuarios();

                foreach ($listarUsuarios as $usuario) {
                ?>

                <tr>
                    <td><?php echo $usuario->getIdUsuario(); ?></td>
                    <td><?php echo $usuario->getUsuario(); ?></td>
                    <td><?php echo $usuario->getClave(); ?></td>
                </tr>
                
                <?php
                }
                ?>
            </tbody>

        </table>




    </div>







<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>