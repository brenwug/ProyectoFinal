<?php 
require_once("../database/ConexionDB.php");
require_once("../model/provincia.php");

class ProvinciaDAO {
    public function getProvinciaXID($id) {
        

        $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql="SELECT * FROM `provincias` WHERE idprovincia = $id";
        $result = $ConexionDB->ejecutar($sql);

        while ($prov = $result->fetch_assoc()) {
            $provObj = new provincia($prov["idprovincia"], $prov["nombre"]);
        }

        return $provObj;
    }

    public function listarProvincias() {
        $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
        $ConexionDB->conectar();
        
        $sql="SELECT * FROM provincias";
        $result = $ConexionDB->ejecutar($sql);

        $list_result=[];
        while ($prov = $result->fetch_assoc()) {
            $list_result[$prov['idprovincia']] = $prov['nombre'];
        }
        
        return $list_result;
    }
}

?>