<?php 

$usuario=$_POST["usuario"];
$password=$_POST["password"];

require_once("../dao/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO();

if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
    echo("entra");
}

// todo ver como validar password en php 
// class password {
//     public function ValidarPassword($password)
// }    

$guardo = $usuarioDAO->guardarUsuario($usuario, $password);



if ($guardo) {
    header("Location: ../view/guardoUsuarioOk.html");
    exit;
} else {
    header("Location: ../view/guardoUsuarioError.html");
    exit;
}

?>