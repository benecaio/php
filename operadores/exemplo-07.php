<?php

/////////////////////Operadores de incremento e decremento////////////////////////////

$a = 9;

echo $a ++;	// Lê-se: Exibir na tela a variável a e ACRESCENTE +1 atribuindo em seu valor.
echo "<br>";

echo $a;
echo "<br>";

echo ++$a;	// Posso colocar o incremento antes.
echo "<br>";

echo $a;	// Note que o valor somado foi atribuído a variável.
echo "<br>";

$b = 11.45; //Não tem problema se a variável for do tipo float;

echo $b ++;
echo "<br>";

echo $b;
echo "<br>";
echo "<br>";

$c = 18;

echo --$c;	// Decremento. Similar incremento em funcionalidade, mas DIMINUI em 1 atribuindo em seu valor.


?>