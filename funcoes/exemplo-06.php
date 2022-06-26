<?php

$pessoa = array(
	'nome' => 'Caio',
	'idade' => 25
);

foreach ($pessoa as $value) {
	echo $value . "<br>" ;
} 


print_r($pessoa);
echo "<br>";
echo "<br>";


// Note que agora estou referenciando a variável $pessoa, logo o valor será atribuído fora do escopo da função.

foreach ($pessoa as &$value){

	if(gettype($value) === 'integer') $value += 10;
	// gettype retorna o tipo de dado da variável.

	echo $value. '<br>';
}

print_r($pessoa);









?>