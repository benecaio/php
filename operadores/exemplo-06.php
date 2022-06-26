<?php

/////////////////////////TIPOS NOVOS DE OPERADORES DO PHP 7/////////////////////////////


$a = NULL;

$b = NULL;

$c = 140;

echo $a ?? $b ?? $c;	/* Operador null coalesce (??). Verifica se a variável é nula ou não. No exemplo ele emite o valor de c, pois a e b são nulos. */
echo "<br>";

$b = 92;

echo $a ?? $b ?? $c;	// No exemplo ele emite o valor de b, pois na a é nulo. c não émitido pois já surgiu um valor não nulo. 
echo "<br>";

$naoNula = $a ?? $b ?? $c;	// Quando surgir a primeira não nula, assume esse valor.

echo $naoNula;


?>