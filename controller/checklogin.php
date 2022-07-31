<?php 
$usu = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];

require_once("../dao/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO();
$loginValido = $usuarioDAO->validarUsuyPass($usu, $pass);

if($loginValido) {
    header("Location: ../view/inicio.html");
    exit;
} else {
    header("Location: ../view/loginError.html");
    exit;
}

?>