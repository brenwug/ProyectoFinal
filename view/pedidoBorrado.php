<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CAC Proyecto Final Guardo usuario ok</title>
</head>
<body>

<?php 
  require_once("../dao/PedidoDAO.php");
  $id = $_GET["id"];
  $pedDAO = new PedidoDAO();
  $pedido= $pedDAO->eliminarPedido($id);
  ?>

    <div class="container">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.html">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            Acerca de
                            </a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="dropdown-item" href="#">Nosotros</a>
                            <a class="dropdown-item" href="#">Nuestra Historia</a>
                            <a class="dropdown-item" href="#">Nuestra Misión</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            Servicios
                            </a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="dropdown-item" href="listadoUsuarios.php">Usuarios</a>
                            <a class="dropdown-item" href="crearUsuario.html">Crear Usuario</a>
                            <a class="dropdown-item" href="listadoPedidos.php">Pedidos</a>
                            <a class="dropdown-item" href="crearPedido.html">Crear Pedido</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <div class="mt-4 text-center">
            <img src="./Imagenes/logo.jpg" alt="Logo CABA" width="72" height="72" class="d-flex mx-auto mb-4">
            <h2>Bien!</h2>
            <p class="lead">El pedido se eliminó correctamente</p>
        </div>
      </div> 