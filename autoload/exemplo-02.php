<?php

function incluirClasses($nomeClasse){

	if (file_exists("$nomeClasse" . ".php") == true) {
		// file_exists verifica se o arquivo existe NESSE DIRETÓRIO.
		require_once ("$nomeClasse" . ".php");
	}
}

spl_autoload_register("incluirClasses");
/* spl = Standard php library: Conjuntos de funções nativas, usadas pra facilitar lacunas. Nesse caso, autoload em mais de um diretório. Essa função (spl_autoload_register) eu posso passar uma string ("nome da função que desejo chamar") ou a (função diretamente).
*/

spl_autoload_register(function($nomeClasse){
	if (file_exists("Abstratas". DIRECTORY_SEPARATOR ."$nomeClasse" . ".php") == true) {
		/* 	Use sempre case sensitive, para não haver erro em servidores ou computadores LINUX.
			A constante DIRECTORY_SEPARATOR é diferente pra cada sistema de operação. Use pra não haver erro.
		*/
		require_once ("Abstratas". DIRECTORY_SEPARATOR ."$nomeClasse" . ".php");
	}
});

$carro = new DelRey();
$carro->acelerar(90);













?>