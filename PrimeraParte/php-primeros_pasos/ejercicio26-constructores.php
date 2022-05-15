<?php

class persona {
    public $nombre; //Propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //Acciones o métodos...
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }

}


$objAlumno= new persona("Fabian cz"); //Instancia o creación de un objeto
// $objAlumno->asignarNombre("Fabian"); //Llamando un método
$objAlumno->imprimirNombre(); //Llamando un método

?>