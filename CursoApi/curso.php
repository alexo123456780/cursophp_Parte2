<?php

//1. Json_encode() = convierte un array php en  json

//2. Json_decode() = convierte un json en un array



//1 Exammple 1

class Pruebas {

    public $datos;

    public function __construct(){

        $this->datos =
         [
            "nombre" => "alex",  "edad" => 20 , "profesion" => "dev"
 
        ];

    }

    public function convertirArray(){

        $json = json_encode($this->datos);

        echo $json;

    }


}






