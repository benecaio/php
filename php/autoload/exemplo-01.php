<?php

// Método mágico autoload//////

function __autoload($nomeClasse){
	// Essa função recebe o nome da classe que foi chamada no escopo desse texto! E carrega se ela estiver no mesmo diretório.
	var_dump($nomeClasse);
	//Veja que ele chama as classes nessa ordem do echo.

	echo "<br>";
	require_once ("$nomeClasse.php");
}
	
$carro = new DelRey1();
$carro->acelerar(90);

?>