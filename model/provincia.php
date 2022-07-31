<?php 
class Provincia {
    private $idProvincia;
    private $nombre;

    function __construct($idProvincia, $nombre)
    {
        $this->idProvincia=$idProvincia;
        $this->nombre=$nombre;
    }

    public function getIdProvincia() {
        return $this->idProvincia;
    }

    public function setIdProvincia($idProvincia) {
        
        $this->idProvincia = $idProvincia;
        return $this;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

}

?>