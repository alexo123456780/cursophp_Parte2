<?php

require_once "CuentaBancaria.php";


class CuentaAhorro extends CuentaBancaria{


    private $ahorro;
    private $contador;
    


    public function __construct($titular){

        parent:: __construct($titular);

        $this->ahorro = 700;
        $this->contador = 0;

        
    }



    public  function verAhorro(){

        echo "Tiene un ahorro". $this->ahorro."  pesos";

    }


    public function retirarAhorro($monto){

        if($this->contador > 3){

            echo "Has alcanzado el maximo de intentos";
            return;

        }


        if($this->ahorro > $monto){

            echo "Saldo insuficiente a retirar";
            return;


        }

        $this->ahorro -= $monto;

        $this->contador++;



    }










    
    public function obtenerInfo(){

        return parent::obtenerDatos();


    }



 
    

    











}










?>