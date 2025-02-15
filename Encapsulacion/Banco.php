<?php

class Banco{

    private $titular;
    private $saldo;


    public function __construct($titular,$saldo){

        $this->titular = $titular;
        $this->saldo = $saldo;

    }


    //getter para obtener el saldo

    public function getSaldo(){

        return $this->saldo;
    }

    //setter para modificar el saldo

    public function depositar($monto){

        if($monto > 0){

            $this->saldo += $monto;

            echo "Deposito exitoso, saldo nuevo: $this->saldo ";

        }else{

            echo "Monto no valido";
        }

    }


    public function retirar($monto){

        if($monto > 0 && $monto <= $this->saldo){

            $this->saldo -= $monto;
            echo "Retiro exitoso, saldo nuevo $this->saldo";

        }else{

            echo "Fondos Insuficientes";
        }
    }

}



?>