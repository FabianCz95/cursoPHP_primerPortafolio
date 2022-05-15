<?php

// Metodo get muestra los datos a traves del URL
if ($_GET) {
    # code...
    $nombre=$_GET['nombre'];

    echo "Hola ".$nombre;
}


?>