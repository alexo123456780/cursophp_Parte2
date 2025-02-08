<?php

//referencia al archivo
require_once "Vehiculo.php";


//referencia ala clase padre
class Coche extends Vehiculo{

    public $numeroPuertas;

    public function __construct($marca,$modelo,$numeroPuertas){


        //parent obtiene los atributos de la clase padre
        parent:: __construct($marca,$modelo);

        $this->numeroPuertas = $numeroPuertas;

    }


    public function mostrarInfo(){

        return parent:: obtenerInfo(). " Numero de puertas: $this->numeroPuertas";

    }
}

?>