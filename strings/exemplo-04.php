<?php

/////////////////////////////////Funções usadas em variáveis String///////////////////////////////

$frase = "Eu consigo aprender tudo!";
$palavra = "aprender";


$q = strpos($frase, $palavra);	/*Essa função faz buscas em strings. Indiquei para procurar na variável $frase, pra ela me retornar onde começa a palavra "aprender" atribuida numa outra variável. O retorno será na posição do primeiro carctere da palavra apartir de 0. */

var_dump($q);	// Aprender está na posição 11 da string.
echo "<br>";

$texto = substr($frase, 3,$q);	/* 3 COMPONENTES - Essa função consegue atribuir numa variável. De onde se inicia (posição - integer obrigatório), até onde desejo (a posição da palavra que escolhi na variável $q - integer obrigatório).	*/


echo($texto);
echo "<br>";


echo substr($frase, $q);	// 2 COMPONENTES - Agora eu decidi apenas exibir de onde desejo, até o fim.
echo "<br>";

echo substr($frase, $q + strlen($palavra), strlen($frase));	/* Nesse exemplo decidimos exibir da variável frase, da posição $q (lenght = 11) de "palavra" (lenght = +7), até o fim de $frase (lenght = 25).	*/
echo "<br>";

echo ($frase); // Note que não houve atribuição em $frase.
echo "<br>";

$x= strlen($frase);
echo ($x);

// Sempre que desejar saber mais procurar na DOCUMENTAÇÃO DO PHP o tema relacionado.





?> 