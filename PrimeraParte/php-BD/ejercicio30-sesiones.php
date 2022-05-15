<?php

session_start();

// Variable tipo sesion
$_SESSION["usuario"]="fabianCz";
$_SESSION["estatus"]="logueado";

echo "Sesión iniciada".":<br>";
echo $_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>