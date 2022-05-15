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

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";

    //exec metodo que ejecuta instruccion sql
    $conexion->exec($sql);

    echo "Conexión establecida";

} catch (PDOException $error) {
    echo "No se realizo la conexión ".$error;
}

?>