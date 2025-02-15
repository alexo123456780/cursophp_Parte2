<?php

//Metodo post 

$url = "https://jsonplaceholder.typicode.com/posts/";

$datos = 
[
    "userId" => 1,
    "title" => "Hola me llamo tilin",
    "body" => "El tilin mas grande"

];


//inciar la coneion ala url 

$conexion = curl_init($url);

//comfiguro que es un post

curl_setopt($conexion,CURLOPT_POST,true);

//meto los datos que agrege al post


curl_setopt($conexion,CURLOPT_POSTFIELDS,json_encode($datos));



//hay que configurar la cabecera para que sepa que estamos enviando un json
curl_setopt($conexion,CURLOPT_HTTPHEADER,['Content-Type: application/json']);


curl_setopt($conexion,CURLOPT_RETURNTRANSFER,true);

$respuesta = curl_exec($conexion);


curl_close($conexion);


echo $respuesta;









