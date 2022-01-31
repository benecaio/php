<?php
/////////////////////////////////////TIPOS NOVOS DE OPERADORES DO PHP 7////////////////////////////////////


$a = 36.0;
$b = 36;



var_dump($a <=> $b);/* Operador Spaceship (<=>). Verifica: - Se a primeira variável é MENOR que a segunda ===> 															   int(-1);
														   - Se a primeira variável é IGUAL a segunda =======> int(0); Igualdade de valor;
														   - Se a primeira variável é MAIOR que a segunda ===> int(1).                  */
echo "<br>";

?>