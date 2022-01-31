<?php

/////////////////// CONSTANTES/////////////
// uma boa prática para constantes 
// define() cria uma constante definida pelo usuário.

define("SERVIDOR","127.0.0.1");

echo SERVIDOR;
echo "<br>";
var_dump(SERVIDOR);
echo "<br>";


// Novidade no php.7: arrays contantes

define("BANCO_DE_DADOS",[
	'127.0.0.2',
	'root',
	'password',
	'test'	// SE DESEJAR CASE INSENSITIVE: ]true); Não é muito usado devido a boa prática TUDO MAIUSCULO.
]);

print_r(BANCO_DE_DADOS);
echo "<br>";


// O PHP TEM VÁRIAS CONTANTES DEFINIDAS POR PADRÃO: Na documentação.
echo PHP_VERSION;

//Usar e conhecer as constantes evitam o retrabalho! 


?>