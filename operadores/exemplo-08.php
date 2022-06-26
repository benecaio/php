<?php

////////////////////Precedência de operadores/////////////////////

$result = ((7 + 3) / 2) * 5;	/* Operadores matemáticos seguem a prioridade normal. Para dar prioridade para alguma operação, usar parentesis (). Colchetes é usado em array e chaves em escopo. */

echo $result;
echo "<br>";

// Operadores de dupla condição:
$a = (4 + 5 == 9) && 10 + 11 + 4 < 45;	/* Verifica as condições antes e depois de (&&), SE E SOMENTE SE AMBAS forem verdadeiras, retorna true. Se não false. */

var_dump($a);
echo "<br>";

$b = 5 * (-1) > 6 || 23 + 7 > 13;	/* Verifica as condições antes e depois de (||), se uma das condições for verdadeira, retorna true. Se ambas forem falsas retorna false. */

var_dump($b);



?>