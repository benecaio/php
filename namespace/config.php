<?php

// autoload para ser usado no namespace:
spl_autoload_register(function($nameClass){
	// Quando for executado o autoload, vamos receber no nome da classe: NAMESPACE/NomeDaClasse;

	var_dump($nameClass);
	// Para ver o include do Namespace.
	echo "<br>";

	$dirClass = "classe";
	// class é o nome da pasta que vou colocar as minhas classes desse projeto.

	$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

	//filename se refere a TODO NOME DO ARQUIVO, inclusive as suas pastas (path): WINDOWS - Onde está/ Nome dele/ Extensão;

	if (file_exists($filename)){
		// Verificar se (if) o arquivo existe. 
		require_once ($filename);
	};	
});

spl_autoload_register(function($nameClass){
	// Quando for executado o autoload, vamos receber no nome da classe: NAMESPACE/NomeDaClasse;

	var_dump($nameClass);
	// Para ver o include do Namespace.
	echo "<br>";

	$dirClass = "classe";
	// class é o nome da pasta que vou colocar as minhas classes desse projeto.

	$dirCliente = "Cliente";

	$filename =	str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR .$dirCliente. DIRECTORY_SEPARATOR . $nameClass . ".php");

	//filename se refere a TODO NOME DO ARQUIVO, inclusive as suas pastas (path): WINDOWS - Onde está/ Nome dele/ Extensão;

	if (file_exists($filename)){
		// Verificar se (if) o arquivo existe. 
		require_once ($filename);
	}
});







?>