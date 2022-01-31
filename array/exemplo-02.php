<?php
////////////////////Arrays 2D//////////////////


// Posição 0,0 Marca gm.
$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

// Posição 1,0 Marca Ford.
$carros [1][0] = "Ford"; 
$carros [1][1] = "Fusion";
$carros [1][2] = "Eco Sport";
$carros [1][3] = "Fiesta";


echo "Escolhi o carro ". $carros [1][1] . " da marca ". $carros[1][0] . ".";
echo "<br>";

echo end($carros [0]);		// end mostra o array final da dimensão que escolhi do array.

echo "<hr>";
echo "<br>";


print_r($carros);










?>