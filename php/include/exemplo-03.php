<?php

require "exemplo-01.php";

/*require "exemplo-01.php";	O Require exige que o arquivo exista e esteja funcionando corretamente. Se ambas as condições não estiverem funcionando (&&) ele para a execução do código.	Gera um erro Fatal*/

/* PHP 7 - Erros fatais não são mais interrompidos, gera uma excesão (try-catch) */

$resultado = somar (3,5);
echo($resultado);

require_once "exemplo-01.php";	/* Se estiver incluso desconsidera essa ação.	*/





?>