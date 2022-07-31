<?php 

class Usuario {
    private $idUsuario;
    private $usuario;
    private $clave;

    function __construct($idUsuario, $usuario, $clave) {
        $this->idUsuario=$idUsuario;
        $this->usuario=$usuario;
        $this->clave=$clave;
    }
    
    function __construct1($usuario, $clave) {
        $this->usuario=$usuario;
        $this->clave=$clave;
    }
    
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setClave($clave) {
        $this->clave = $clave;
        return $this;
    }
}

?>