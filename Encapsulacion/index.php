<?php

require_once "Banco.php";

$usuario1 = new Banco("Alex",5000);

echo $usuario1->getSaldo();


echo "<br><br>";


echo $usuario1->depositar(500);









?>