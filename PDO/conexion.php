<?php


$host = "localhost";
$dbname = "prueba";
$userName = "root";
$password = "";




try{

$conexionNueva = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$userName,$password);


$conexionNueva->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

echo "Conexion establecida correctamente";


}catch(PDOException $e){

    die("Error de conexion".$e->getMessage());


}


?>