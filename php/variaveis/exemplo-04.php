<?php

$nome = (int)$_GET["a"]; /* É um array superglobal, é usado com colchetes. Tem todas as variáveis que recebemos através da URL (internet), que geralmente vêm via GET ou POST. O Query String é separado do endereço da página com o símbolo de "?" listando as variáveis e o seu devido valor (www.123deoliveira4.com?var1=valor1&var2=valor2) */

// ?a=valor depois do endereço do arquivo. 

// GET e POST retoranam uma STRING.
// Conversão de tipo de variável (cast): $nomeDaVar = (tipoDesejado)antes do array.

var_dump($nome);
echo "</br>";

$ip = $_SERVER ["REMOTE_ADDR"]; /*REMOTE ADDRESS - endereço remoto do cliente. Estou acessando o localhost do localhost (::1).	*/
echo $ip;
echo "</br>";

$pastaLocal = $_SERVER ["SCRIPT_NAME"];	//Revela quais páginas, pastas ou arquivos estão sendoo acessados pelo usuário;
echo $pastaLocal;

?>