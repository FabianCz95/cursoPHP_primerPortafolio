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


$objAlumno= new persona(); //Instancia o creación de un objeto
$objAlumno->asignarNombre("Fabian"); //Llamando un método

$objAlumno2= new persona();
$objAlumno2->asignarNombre("Eliza");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre; //Imprimir instrucción
echo "<br>".$objAlumno2->nombre;
echo "<br>".$objAlumno2->mostrarEdad();
echo "<br>".$objAlumno2->altura;

?>