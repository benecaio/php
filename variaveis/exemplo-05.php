<?php

////////////////// Escopo de variável ///////////////////

$nome = "Caio Benevides";


/*Cada conjunto de chaves é um escopo. As variáveis criadas fora do escopos não podem ser usadas.*/


function teste1() {

global $nome;	// Estamos chamando a variável que está fora do escopo com o valor atribuído para fazer parte dessa variável.
echo $nome." no teste 1.";	//Concatenação de variável + texto.

}

function teste2() {

$nome = "Fernando Rezende";	/*Note que eu posso usar o mesmo nome da variável que não haverá conflito
 devido o escopo. */
echo $nome." no teste 2.";


}

teste1();

echo "</br>";
echo "</br>";

teste2();
echo "<br>";
echo "<br>";

echo $nome;
echo "<br>";



?>