<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$password="";

// Condicional de errores para servidores (como un if)
try {

    // PDO permite hacer conesxiones a servidores mediante XAMPP
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $password );
    // Mostrar errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "SELECT * FROM `fotos`";
    // Almacena resultado de sentencia para poder ejecutar
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    // devuelve el resultado de la sentencia mediante fetch
    $resultado=$sentencia->fetchAll();

    // print_r($resultado);
    
    foreach ($resultado as $foto) {
        echo $foto['nombre']."<br>";
    }

    echo "Conexión establecida";

} catch (PDOException $error) {
    echo "No se realizo la conexión ".$error;
}

?>