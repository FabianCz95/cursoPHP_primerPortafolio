<?php

// cambiar indice del array
$frutas= array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");

print_r($frutas);



foreach ($frutas as $i => $value) {
    echo "<br>"."El indice ".$i." corresponde al valor:";
    echo "<br>".$value;
}

?>