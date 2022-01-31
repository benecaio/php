<?php


function teste() {

	global $nome;	//Estamos definindo essa variável como global antes de atribuir seu valor.

	$nome = "Caio";	

}

teste();	//Evocando a função que tem uma variável global esta poderá ser usada sem ser reatribuída.

var_dump($nome);
echo "</br>";

$nomeCompleto = $nome . " Benevides";

echo $nomeCompleto;
echo "</br>";

var_dump($nomeCompleto);

?>