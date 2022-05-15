<?php

// Declaramos el archivo
$archivo="contenido.txt";

// Abrimos el archivo
$archivoAbierto=fopen($archivo,"r");

// Leemos el archivo abierto y asignamos su contenido a una variable
$contenido=fread($archivoAbierto, filesize($archivo));

// Imprimimos su contenido
echo $contenido;

?>