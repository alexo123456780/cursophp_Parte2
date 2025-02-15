<?php


class CuentaBancaria{

private $titular;
private $saldo;
private $numeroCuenta;




public function __construct($titular){

    $this->titular = $titular;
    $this->saldo = 5000;
    $this->numeroCuenta = uniqid("AD");

}


public function obtenerDatos(){

$usuario = 
[

    "Titular" => $this->titular ,
    "Saldo" => $this->saldo,
    "NumeroCuenta" => $this->numeroCuenta

];


foreach($usuario as $key => $clave){

 echo "$key: $clave <br><br>";

}


}


public function depositar($monto){


    try{

        if($monto <= 0  || $monto >= 10000){

            throw new Exception("Intente de nuevo, monto no valido");

        }

        if(!is_numeric($monto)){

            throw new Exception("Monto no valido");

        }

    }catch(Exception $e){

        echo "Error:  " . $e->getMessage();
        return;

    }


    $this->saldo += $monto;
    echo "Deposito con exito";

}


public function retirar($monto){

    try{

        if($monto <= 0  || $monto >= 10000){

            throw new Exception("Intente de nuevo, monto no valido");

        }

        if($monto > $this->saldo){

            throw new Exception("Saldo Insuficiente,intente de nuevo");

        }

        if(!is_numeric($monto)){

            throw new Exception("Monto no valido");

        }

    }catch(Exception $e){

        echo "Error:  " . $e->getMessage();
        return;

    }


    $this->saldo -= $monto;

    echo "Retiro con exito";


}



}














?>