<?php

require_once "Coche.php";

$coche1 = new Coche("Toyota",2005,3);

$coche2 = new Coche("Chevrolet",1999,5);

echo $coche1->mostrarInfo();

echo "<br><br>";

echo $coche2->mostrarInfo();

?>