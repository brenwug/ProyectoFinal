<?php 

$nombre = $_POST['firstName'];
$apellido = $_POST['lastName'];
$usuario = $_POST['username'];
$mail = $_POST['email'];
$lugarentrega = $_POST['address'];
$idLocalidad = $_POST['country'];
$idProvincia = $_POST['state'];
$codpostal = $_POST['zip'];
$formadepago = $_POST['paymentMethod'];
$tarjtitular = $_POST['cc-name'];
$tarjnumero = $_POST['cc-number'];
$tarjvto = $_POST['cc-expiration'];
$tarjclave = $_POST['cc-cvv'];

require_once("../model/pedido.php");
require_once("../model/localidad.php");
require_once("../model/provincia.php");
require_once("../dao/PedidoDAO.php");

$provincia = new Provincia($idProvincia, null);
$localidad = new Localidad($idLocalidad, null, $provincia);

$pedido = new Pedido(null,$nombre,$apellido,$usuario,$mail,$lugarentrega,$localidad,$codpostal,$formadepago,$tarjtitular,$tarjnumero,$tarjvto,$tarjclave);

$dao = new PedidoDAO();
$insertOk = $dao->altaPedido($pedido);

if ($insertOk) {
    header("Location: ../view/guardoUsuarioOk.html");
    exit;
} else {
    header("Locatio: ../view/guardoUsuarioError.html");
    exit;
}

?>