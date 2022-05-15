<?php
// Se inicia sesion
session_start();

// Se destruye la sesion
session_destroy();

// Se reenvia al login
header("location:login.php");

?>