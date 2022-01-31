<?php

////////////// Parametros por valor x por referência///////////////////


$a = 10;
// Variável A.


function trocaValor ($a){
	$a = 50;	// Note que há um escopo {} e dentro dele a variável que foi criada anteriormente não está definida aqui e sim apenas um PARÂMETRO foi indicado, uma variável qualquer $a.
	return $a;
}
	
echo trocaValor($a);	// Note que aqui, estou chamando a função e imbutindo um PARÂMETRO...
echo "<br>";

echo $a;				// Nesse caso aqui estou apenas chamando a variável criada.
echo "<br>";
echo "<br>";

// Parâmetro de função é diferente de variável.


function trocaValor2 ($a){
	$a += 50;
	return $a;
}


echo trocaValor2($a);	//Note que acontece o mesmo, a  funcão é executada e retorna o pedido pela função.
echo "<br>";

echo $a;				// A função A definida não se modifica!
echo "<br>";
echo "<br>";
/* O escopo determina que o valor alterado ou somado acontece apenas dentro da função.

Agora, se eu quiser que a função altere na função original preciso referenciá-la (& ao lado de $).*/



//Passagem de parâmetro por referência:
function trocaValor3(&$a){
	//Endereço da variável: &$var - essa que é a passagem de parâmetro por referência.
	$a += 32;
	return $a;
}

echo trocaValor3($a);
echo "<br>";

echo $a;
// Note que não é a mesma coisa que uma variável global (Quero que a variável seja vista de todo o código).


?>