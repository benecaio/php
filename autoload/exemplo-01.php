<?php

// Método mágico autoload//////

function incluirClasses($nomeClasse){

	if (file_exists("$nomeClasse" . ".php") == true) {
		// file_exists verifica se o arquivo existe NESSE DIRETÓRIO.
		require_once ("$nomeClasse" . ".php");
	}
}

spl_autoload_register("incluirClasses");
/* spl = Standard php library: Conjuntos de funções nativas, usadas pra facilitar lacunas. Nesse caso, autoload em mais de um diretório. Essa função (spl_autoload_register) eu posso passar uma string ("nome da função que desejo chamar") ou a (função diretamente).
*/
	
$carro = new DelRey1();
$carro->acelerar(90);

?>