<?php

function ola(){

	$argumentos = func_get_args();	//funcão nativa recupera e retorna num ARRAY todos os argumentos passados como parâmetro na função.
	return $argumentos;
}

print_r (ola("Caio",26));
echo "<br>";


var_dump(ola("Bom dia",17));

?>