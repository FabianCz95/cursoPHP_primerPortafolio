<?php

function imprimirNombre($nombre, $apellido=""){
    // Rutinas
    echo "Hola ".$nombre." ".$apellido;
}

if ($_POST) {
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    imprimirNombre($Nombre, $Apellido);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio17-funciones.php" method="post">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>