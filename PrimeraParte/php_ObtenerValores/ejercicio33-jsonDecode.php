<?php

$jsonContenido='[ 
    {"nombre":"Fabian","apellido":"Cruz"},
    {"nombre":"Felipe","apellido":"García"}
]';

$res= json_decode($jsonContenido);
// print_r($res);

foreach ($res as $persona){
    echo ($persona->nombre)." ".($persona->apellido)."<br>";
}

?>