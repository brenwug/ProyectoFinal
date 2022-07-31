<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Proyecto Final CAC Listado Pedidos</title>
</head>
<body class="text-center bg-light">

    <div class="container">
        <div class="py-4 text center">
            <img class="d-block mx-auto mb-4" src="./Imagenes/logo.jpg" alt="logo caba" width="72" height="72">
            <p class="lead">Listado de Pedidos</p>
        </div>

        <table class="table table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Código Postal</th>
                    <th scope="col">Operaciones</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../dao/PedidoDAO.php");
                require_once("../model/pedido.php");
                $pedDAO = new PedidoDAO();
                $listaPedidos = $pedDAO->listarPedidos();

                foreach ($listaPedidos as $pedido) {
                    echo "<tr>";
                    echo "<td>";
                    echo $pedido->getIdPedido();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getNombre();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getApellido();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getMail();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getLugarEntrega();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getLocalidad()->getNombre();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getLocalidad()->getProvincia()->getNombre();
                    echo "</td>";
                    echo "<td>";
                    echo $pedido->getCodPostal();
                    echo "</td>";
                    echo "<td>";
                
                ?>
                 <a href="editarPedido.php?id=<?php echo $pedido->getIdPedido(); ?>">
                <i class="fa fa-edit"></i>
                </a>
                <a href="pedidoBorrado.php?id=<?php echo $pedido->getIdPedido(); ?>">
                <i class="fa fa-trash"></i>
                </a>

                <?php
                echo "</td>";
                echo "</tr>";
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