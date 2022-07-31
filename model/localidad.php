<?php 

require_once("provincia.php");
class Localidad {
    private $idLocalidad;
    private $nombre;
    private provincia $provincia;

    function __construct($idLocalidad, $nombre, provincia $provincia) {
        
        $this->idLocalidad=$idLocalidad;
        $this->nombre=$nombre;
        $this->provincia=$provincia;
    }

    public function getIdLocalidad() {
        
        return $this->idLocalidad;
    }

    public function setIdLocalidad($idLocalidad) {

        $this->idLocalidad = $idLocalidad;

        return $this;
    }
    
    public function getNombre() {
        
        return $this->nombre;
    }

    public function setNombre($nombre) {

        $this->nombre = $nombre;
        return $this;
    }

    public function getProvincia() {
        
        return $this->provincia;
    }

    public function setProvincia($provincia) {

        $this->provincia = $provincia;
        return $this;
    }
}

?>

