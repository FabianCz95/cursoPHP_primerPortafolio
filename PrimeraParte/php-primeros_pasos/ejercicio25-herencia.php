<?php

class persona {
    public $nombre; //Propiedades
    private $edad;
    protected $altura;

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

class trabajador extends persona {
    public $puesto; //propiedad nueva
    public function presentarse(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}


$objTrabajador= new trabajador(); //Instancia o creación de un objeto
$objTrabajador->asignarNombre("Fabian Cruz"); //Llamando un método
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarse();

?>