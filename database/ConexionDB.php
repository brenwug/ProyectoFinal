<?php 

class ConexionDB {
    private $host;
    private $user;
    private $password;
    private $databaseName;
    private $conexion;

    function __construct($host,$user,$password,$databaseName) {
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->databaseName=$databaseName;
    }
    
    public function conectar() {
        $this->conexion = new mysqli($this->host,$this->user,$this->password,$this->databaseName);
        if($this->conexion->connect_errno) {
            die("Error de Conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno); 
        }
    }

    public function cerrar() {
        $this->conexion->close();
    }

    public function ejecutar($sql) {
        return $this->conexion->query($sql);
    }

    public function cantFilas() {
        return $this->conexion->affected_rows;
    }
}


?>