<?php

//Ejemplo de clase

class Coche {

    public $marca;
    public $modelo;
    public  $color;


    
    //Constructor

    public function __construct($marca,$modelo,$color){

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;


    }

    public function mostrarInfo(){

        return "Este es un coche marca $this->marca , modelo $this->modelo  , de color $this->color";

    }
}

?>


<?php

$coche = new Coche("Chevrolet",2025,"azul");


echo $coche->mostrarInfo();

?>

