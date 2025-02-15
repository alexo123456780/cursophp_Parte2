<?php

/*obtener datos con file_get_contents() consumir una api

$url = "https://jsonplaceholder.typicode.com/posts/1";


//obtengo por el metodo el json de la api
$get = file_get_contents($url);

$arrayGet = json_decode($get,true);

print_r($arrayGet);

*/

//obtner datos con curl



$peticion = curl_init("https://jsonplaceholder.typicode.com/posts/1");

//curl_setopt() configura la peticon de la api , curltop_returntransfer hace que el json sea un texto para leerlo

curl_setopt($peticion,CURLOPT_RETURNTRANSFER,true);



//exe() ejecuta la peticion http
$respuesta = curl_exec($peticion);


//cierras la  conexion de la api
curl_close($peticion);


$convertirJson = json_decode($respuesta,true);

print_r($convertirJson);























