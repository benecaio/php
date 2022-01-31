<?php

/////////// Parâmetro em funções. //////////////

function ola($texto){
//Estamos colocando um parâmetro para ser incluído. Sem este argumento ($texto) a função poderá trabalhar corretamente.
	return "Olá $texto!" . "<br>";	/* Variável dentro das aspas duplas = interpolação de variável, mostra valor */
}


echo ola ("Mundo");
echo ola ("Senhoras");
echo ola ("Senhores");
echo "<br>";

// Nos parâmetros, podemos definir um valor padrão: function nomeFunction ($var = padrão).
function ola2 ($texto = "mundo", $periodo = "Bom dia"){
// Estamos pré-definindo 2 parâmetros padrão, Sem inserir os argumentos o padrão assumirá na função.
	return "Olá $texto! $periodo." . "<br>";	
}

echo ola2();
echo ola2 ("Caio","Boa tarde");
echo ola2 ("Sr. Benevides");	// Colocando um apenas, o primeiro irá assumir, e o outros virão pelo padrão.
echo ola2("","Boa noite");		// Primeiro parâmetro vazio.
echo ola2 ("Cliente", "");		// Segundo parâmetro vazio.
echo "<br>";


// Colocar sempre a esquerda os parâmetros (os obrigatórios) muito importantes que o usuário deve colocar.


function ola3 ($periodo, $nome = "Caio"){
// Invertendo a ordem dos parâmetros pela obrigatoriedade à esquerda.
	return " Olá $nome! A sua reunião foi marcada para amanhã no periodo da $periodo.";
}

echo ola3("manhã");



?>