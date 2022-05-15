<?php

    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA*$valorB;
        $multip=$valorA/$valorB;
        
        echo "<br>".$suma;
        echo "<br>".$resta;
        echo "<br>".$division;
        echo "<br>".$multip;

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8-operadoresAritmeticos.php" method="post">
        Valor A:
        <input type="text" name="valorA">
        <br>
        Valor B:
        <input type="text" name="valorB">
        <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>