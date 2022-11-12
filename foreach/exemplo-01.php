<?php

////////////// FOREACH ////////////////
/* Usado em arrays e coleções. Ele é usado para facilitar a iteração de estruturas como arrays, objetos e outros tipos que são iteráveis. Como resultado ele percorrerá todos os itens da coleção, disponibilizando a chave e o valor de cada elemento.
*/

/* foreach (iterable_expression as $value)
	statement
	ou
	foreach (iterable_expression as $key => $value)
    statement
*/

$meses = array( "Janeiro", "Fevereiro", "Março",
				"Abril", "Maio", "Junho",
				"Julho", "Agosto", "Setembro",
				"Outubro", "Novembro", "Dezembro");

foreach ($meses as $mes) {
	echo " Mês: ". $mes ." // ";
//Caso mais simples, pra apenas percorrer o array e atribuir o valor pra cada um.


}
echo "<br>";
echo 'O último valor alocado em $mes = ';
echo ($mes); // Note que foi o último valor percorrido alocado em $mes!
echo "<br>";
echo "<br>";



foreach ($meses as $index => $mes) {
/* O foreach  pega cada informação do array e aplica o comando em chaves (KEY) para cada momento que a
    variável se torna (no caso $mes). Assim se nada for alterado ou parado ela se tornará a última 	informação do array na variável.
	Como se lê:
 	paracada($var_array como $chave = atribuindo em uma => $variavel){	}
 	Note que: $index => indica que vai ser índice da variável (Contagem).
*/

echo "Índice: " . $index . "<br>" ;

echo "O mês é " . $mes . "<br>" . "<br>";
}


echo($mes);
// Note que ela se tornou dezembro novamente!

echo "<br>";
echo "<br>";
print_r($meses); //Exibe o array!


?> 