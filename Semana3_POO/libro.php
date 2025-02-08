<?php

class Libro {

    public $titulo;
    public $autor;
    public $anioPublicacion;

    public $disponible;


    public function __construct($titulo,$autor,$anioPublicacion){

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = true;

    }


    //Operador ternario para que sea eplixito el true o false


    public function seeBook(){

        $estadoDisponible = $this->disponible? "true" : "false";
        return "Titulo: $this->titulo , Autor: $this->autor , Anio Publicacion: $this->anioPublicacion, Disponible: $estadoDisponible";

    }

    public function prestarLibro(){

        if($this->disponible){

            $this->disponible = false;

            echo "Libro:  $this->titulo prestado con exito";

        }else{

            echo "El libro $this->titulo ya fue prestado";
        }

    }

    public function devolverLibro(){

        $this->disponible = true;

        echo "Libro devuelto con exito";
    }   
}

?>


<?php

$libro1 = new Libro("El libro de la selva","Pepe",2000);

$libro2 = new Libro("Caperucita roja","Lucas",2000);

$libro3 = new Libro("El principito","Alex",2005);


echo $libro1->seeBook();

echo "<br><br>";

echo $libro2->seeBook();

echo "<br><br>";


echo $libro3->seeBook();


echo "<br><br>";

echo $libro1->prestarLibro();

echo "<br><br>";

echo $libro1->seeBook();

echo "<br><br>";



echo $libro1->devolverLibro();

echo "<br><br>";


echo $libro1->seeBook();






















?>



