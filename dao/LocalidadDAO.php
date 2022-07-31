<?php 
        require_once("../database/ConexionDB.php");
        require_once("../model/localidad.php");
        require_once("../dao/ProvinciaDAO.php");


class localidadDAO {

    public function getLocalidadXId($id) {
        $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql="SELECT * FROM `localidades` WHERE idLocalidad=$id";
        $result = $ConexionDB->ejecutar($sql);

        $provDAO = new ProvinciaDAO();
        while ($loc = $result->fetch_assoc()) {
            $provincia = $provDAO->getProvinciaXID($loc["idProvincia"]);
            
            $locObj = new localidad($loc["idLocalidad"], $loc["nombre"], $provincia);
        
        }

        return $locObj;
    }

     public function listarLocalidades() {

        $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
        $ConexionDB->conectar();
        
        $sql="SELECT idLocalidad, nombre FROM localidades";
        $result = $ConexionDB->ejecutar($sql);

        $list_result=[];
        while ($loc = $result->fetch_assoc()) {
            $list_result[$loc['idLocalidad']] = $loc['nombre'];
        }
        
        return $list_result;
     }
}

?>