<?php

class Apis{

    private $ciudad;
    private $apiKey;
    private $url;

    public function __construct(){

        $this->ciudad = "Merida";
        $this->apiKey = "0480bdde27bbd6daeca7e9c5c1300a40";
        $this->url = "https://api.openweathermap.org/data/2.5/weather?q=Merida&appid=0480bdde27bbd6daeca7e9c5c1300a40";

    }


    //file_get_contents = significa hacer la solicitud como tal un get


    public function solicitarApi(){

        $get = file_get_contents($this->url);



        if($get === FALSE){

            die("Solicitud denegada");

        }



        //convertir el json a un array asociativo



        $dato = json_decode($get,true);


        if(isset($dato['main'])){

            echo "La temperatura en ".$this->ciudad." es de:  ".$dato['main']['temp']." C";

        }else{

            echo "Algo salio mal".$dato['message'];
        }

        

    }


}



