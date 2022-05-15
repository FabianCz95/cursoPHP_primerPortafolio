<?php

    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA*$valorB;
        $multip=$valorA/$valorB;
        
        // echo "<br>".$suma;
        // echo "<br>".$resta;
        // echo "<br>".$division;
        // echo "<br>".$multip;

        if ($valorA == $valorB) {
            echo "El valor A es igual al valor B"."<br>";
            if ($valorA == 4) {
                echo "El valor es 4";
            }
            if ($valorA == 5) {
                echo "El valor es 5";
            }
        }
        if (($valorA == $valorB) && ($valorA == 5)) {
            # code...
        }

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
    <form action="ejercicio11-if.php" method="post">
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