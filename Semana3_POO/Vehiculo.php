<?php

class Vehiculo{

    public $marca;
    public $modelo;


    public function __construct($marca,$modelo){

        $this->marca = $marca;
        $this->modelo = $modelo;

    }


    public function obtenerInfo(){

        return "Marca: $this->marca , Modelo: $this->modelo";

    }
}




?>