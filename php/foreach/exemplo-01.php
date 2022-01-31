<?php

////////////// FOREACH ////////////////
// Usado em arrays e coleções.

$meses = array( "Janeiro", "Fevereiro", "Março",
				"Abril", "Maio", "Junho",
				"Julho", "Agosto", "Setembro",
				"Outubro", "Novembro", "Dezembro");

foreach ($meses as $mes) {
	echo " Mês: ". $mes ." ";
//Caso mais simples, pra apenas percorrer o array e atribuir o valor pra cada um

}
echo "<br>";

echo ($mes);
echo "<br>";
echo "<br>";



foreach ($meses as $index => $mes) {
/* O foreach  pega cada informação do array e aplica o comando em chaves para cada momento que a variável se torna (no caso $mes).
Assim se nada for alterado ou parado ela se tornará a última informação do array na variável.	*/


// paracada($var_array como $chave =atribuindo em uma> $variavel){}
// $index => indica que vai ser índice da variável (Contagem).

echo "Índice: " . $index . "<br>" ;

echo "O mês é " . $mes . "<br>" . "<br>";


// Para saber a posição que se encontra no array, ele relacionou o índice com o valor.

}






echo($mes);
// Note que ela se tornou dezembro!

echo "<br>";
echo "<br>";
print_r($meses);


?> 