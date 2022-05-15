<?php

// se declara nombre del archivo y su contneido
$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, saludos";

// Se abre el archivo con formato de escritura = "w" (write)
$archivoCrear= fopen($nombreArchivo,"w");

// Se escribe en el archivo abierto y se le añade el contenido.
fwrite($archivoCrear, $contenidoArchivo);

// Se cierra archivo para poder salvar cambios
fclose($archivoCrear);

?>