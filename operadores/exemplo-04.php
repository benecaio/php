<?php
///////////////////////Operadores de comparação///////////////////////

$a = 30;
$b = 58;

// Vou pedir para que a máquina me retorne em boolean (true/false) as seguintes comparações;
var_dump($a > $b);	// Maior que a segunda variável?.
echo "<br>";

var_dump($a < $b);	// Menor que a segunda variável?.
echo "<br>";

var_dump($a = $b);	// OBS.: Estamos ATRIBUINDO na primeira variável o valor da segunda e NÃO COMPARANDO!!!.
echo "<br>";

$a = 30;

var_dump($a == $b);	// Igual a segunda variável?. OBS.: APENAS EM VALOR, se são iguais (igualdade de valor).
echo "<br>";

$b = 30.0;

var_dump($a == $b);
echo "<br>";

var_dump($a === $b);	// Igual a segunda variável? OBS.: EM TIPO e VALOR, se são iguais (igualdade de identidade).
echo "<br>";

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";


var_dump($a != $b);	// São desiguais? OBS.: (!) Exclamção na programação é uma negação, NOT. APENAS EM VALOR (desigualdade de valor). 
echo "<br>";


var_dump($a !== $b);	// São idênticos? (desigualdade de valor e tipo de variável).
echo "<br>";


$a = 62;
$b = 34;

var_dump($a <= $b);	// É menor ou igual?
echo "<br>";


var_dump($a >= $b);	// É menor ou igual?
echo "<br>";

$b = 62.0;

var_dump($a >= $b);	// Note que ele reconheceu igualdade de valor.
echo "<br>";

?>