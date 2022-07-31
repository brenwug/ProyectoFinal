<?php 
class UsuarioDAO {
    public function validarUsuyPass($usu, $pass) {
        require_once("../database/ConexionDB.php");

        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql ="SELECT * FROM usuarios WHERE usuario = '$usu' AND clave = '$pass'";
        $ConexionDB->ejecutar($sql);

        if ($ConexionDB->cantFilas() > 0) {
            return true;
        } else{
            return false;
        }
    }

    public function guardarUsuario($usu, $pass) {
        require_once("../database/ConexionDB.php");
        try {
            $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
            $ConexionDB->conectar();

            $sql="INSERT INTO `usuarios`(`usuario`, `clave`) VALUES ('$usu','$pass')";

            $ConexionDB->ejecutar($sql);
        } catch (Exception $e) {
            return false;
        }

        return $ConexionDB->cantFilas() > 0;
    }
    
    public function listarUsuarios() {
        require_once("../database/ConexionDB.php");
        require_once("../model/usuario.php");

        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql="SELECT * FROM usuarios";
        $result = $ConexionDB->ejecutar($sql);

        while ($usu = $result->fetch_assoc()) {
            $usuObj = new Usuario($usu["idusuarios"], $usu["usuario"], $usu["clave"]);

            $listarUsuarios[] = $usuObj;
        }

        return $listarUsuarios;}
        
        public function listarUsuariosXNombre($nomb) {
            require_once("../database/ConexionDB.php");
            require_once("../model/usuario.php");

            $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
            $ConexionDB->conectar();

            $sql="SELECT * FROM `usuarios`";
            $result = $ConexionDB->ejecutar($sql);

            while ($usu = $result->fetch_assoc()) {
                $usuObj = new Usuario($usu["idusuarios"], $usu["usuario"], $usu["clave"]);

                $listarUsuarios[] = $usuObj;
            }

            return $listarUsuarios;
        }
}





?>