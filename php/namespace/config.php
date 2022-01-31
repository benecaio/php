<?php

// autoload para ser usado no namespace:
spl_autoload_register(function($nameclass){
	// Quando for executado o autoload, vamos receber no nome da classe: NAMESPACE/NomeDaClasse;

	var_dump($nameclass);
	// Para ver o include do Namespace.
	echo "<br>";

	$dirClass = "class";
	// class é o nome da pasta que vou colocar as minhas classes desse projeto.

	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameclass . ".php";
	//filename se refere a TODO NOME DO ARQUIVO, inclusive as suas pastas (path): WINDOWS - Onde está/ Nome dele/ Extensão;

	if (file_exists($filename)){
		// Verificar se (if) o arquivo existe. 
		require_once ($filename);
	}
});










?>