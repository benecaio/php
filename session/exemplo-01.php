<?php


// Iniciando uma sessão: Foi iniciada no arquivo de configuração.
require_once("config.php");


$_SESSION["nome"] = "Hcode";


$_SESSION["position"] = 125;

/*if (!$_GET['nome']){
} else {
	$_SESSION["nome"] = $_GET['nome'];
}
*/


print_r ($_SESSION);

// as variaveis de sessão são vistas em todo o código quando o usuário está online.


?>