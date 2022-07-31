<?php 
    require_once("../model/pedido.php");
    require_once("../model/localidad.php");
    require_once("../model/provincia.php");
    require_once("../dao/PedidoDAO.php");

    $id = $_POST['id'];
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $usuario = $_POST['username'];
    $mail = $_POST['email'];
    $lugarentrega = $_POST['address'];
    $localidad = $_POST['country'];
    $provincia = $_POST['state'];
    $codpostal = $_POST['zip'];
    $formadepago = $_POST['paymentMethod'];
    $tarjtitular = $_POST['cc-name'];
    $tarjnumero = $_POST['cc-number'];
    $tarjvto = $_POST['cc-expiration'];
    $tarjclave = $_POST['cc-cvv'];


    $pedidoDAO = new PedidoDAO();
    $guardoOk = $pedidoDAO->editarPedido($id, $nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave);

    if ($guardoOk) {
        header("Location: ../view/guardoUsuarioOk.html");
        exit;    
    } else {
        header("Location: ../view/guardoUsuarioError.html");
        exit;    
    }

?>