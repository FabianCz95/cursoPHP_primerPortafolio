<?php

class UnaClase{
    public static function unMetodo(){
        echo "Hola Soy un metodo estatico";
    }
}

// Llamado mediante instancia o creacion de objeto y la llamada al metodo
$obj=new UnaClase();
$obj->unMetodo();

// Llamada a método statico
UnaClase::unMetodo();


?>