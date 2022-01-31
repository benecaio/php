<?php
//////////////////Novidades em funções//////////////////
// Declaração de tipos escalares.

function soma (int ...$valores){
	// Nos parâmetros () estamos definindo o tipo de argumento esperado , ... = n argumentos e de qual variável.
	return array_sum($valores);	// array_sum() faz a soma dos componentes do array.

}

echo soma(2,2);
echo"<br>";


echo soma(33,11);
echo"<br>";


echo soma(1.5,2.5);	// Note que o declarado foi (int) então a parte (float) do número foi desconsiderada.
echo"<br>";















?>