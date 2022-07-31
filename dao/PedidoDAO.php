<?php 

require_once("../database/ConexionDB.php");
require_once("../model/pedido.php");
require_once("../dao/LocalidadDAO.php");

class PedidoDAO {

    public function listarPedidos() {
        

        $ConexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql = "SELECT * FROM pedidos";
        $result = $ConexionDB->ejecutar($sql);

        $locDAO = new localidadDAO();

        while($pedido = $result->fetch_assoc()) {
            
            $localidad= $locDAO->getLocalidadXId($pedido["localidad"]);

            $pedObj = new Pedido($pedido["idpedido"],$pedido["nombre"],$pedido["apellido"],$pedido["usuario"],$pedido["mail"],$pedido["lugarentrega"], $localidad ,$pedido["codpostal"], $pedido["formadepago"],$pedido["tarjtitular"],$pedido["tarjnumero"],$pedido["tarjvto"],$pedido["tarjclave"]);
            $listaPedidos[] = $pedObj;
        }

        return $listaPedidos;
    }

    

    public function getIdPedido($id) {
        

        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql="SELECT * FROM pedidos WHERE idpedido = $id";
        $result = $ConexionDB->ejecutar($sql);
        $locDAO = new localidadDAO();

        while ($pedido = $result->fetch_assoc()) {
            $localidad = $locDAO->getLocalidadXId($pedido["localidad"]);
            $pedObj = new Pedido($pedido["idpedido"],$pedido["nombre"],$pedido["apellido"],$pedido["usuario"],$pedido["mail"],$pedido["lugarentrega"], $localidad, $pedido["codpostal"],$pedido["formadepago"],$pedido["tarjtitular"],$pedido["tarjnumero"],$pedido["tarjvto"],$pedido["tarjclave"]);

        }

        return $pedObj;
    }

    public function altaPedido(Pedido $pedido) {
        

        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql = "INSERT INTO `pedidos`(`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
        '{$pedido->getLocalidad()->getIdLocalidad()}',
        '{$pedido->getCodpostal()}', 
        '{$pedido->getFormadepago()}', 
        '{$pedido->getTarjtitular()}', 
        '{$pedido->getTarjnumero()}', 
        '{$pedido->getTarjvto()}', 
        '{$pedido->getTarjclave()}')";
         
         $ConexionDB->ejecutar($sql);

         return $ConexionDB->cantFilas() > 0;
    }

    public function editarPedido($idpedido, $nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave) {

        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql = "UPDATE pedidos SET 
            nombre='{$nombre}',
            apellido='{$apellido}',
            usuario='{$usuario}',
            mail='{$mail}',
            lugarentrega='{$lugarentrega}',
            localidad='{$localidad}',
            codpostal='{$codpostal}',
            formadepago='{$formadepago}',
            tarjtitular='{$tarjtitular}',
            tarjnumero='{$tarjnumero}',
            tarjvto='{$tarjvto}',
            tarjclave='{$tarjclave}' 
            WHERE idpedido='{$idpedido}'";

            $ConexionDB->ejecutar($sql);

            return $ConexionDB->cantFilas() > 0;
    }

    public function eliminarPedido($idpedido) {
        $ConexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $ConexionDB->conectar();

        $sql = "DELETE FROM pedidos WHERE idpedido='{$idpedido}'";

            $ConexionDB->ejecutar($sql);

            return $ConexionDB->cantFilas() > 0;
    }


}

?>