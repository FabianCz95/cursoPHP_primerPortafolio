<?php

class conexion {

    // Conexión al servidor
    private $sevidor="localhost";
    private $usuario="root";
    private $password="";
    private $conexion;

    // Se ejecuta el constructor al momento de la instancia
    public function __construct(){
        try {
            $this->conexion= new PDO( "mysql:host=$this->servidor;dbname=album", $this->usuario, $this->password );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch ( PDOException $e ) {
            return "Falla de conexión ".$e;
        }
    }

    // Insert/delete/update de datos
    public function ejecutar($sql) {
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertID();
    }

    // Consulta de tabla
    public function consultar($sql){
        // preparamos sentencia y se ejecuta
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();

        return $sentencia->fetchAll();
    }
}

?>