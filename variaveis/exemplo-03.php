<?php

//Tipos básicos de variáveis

$nome = "Hcode cursos";	//string.
echo ($nome);
echo "<br>";

echo "O curso que estou fazendo é php7 da " . $nome;

echo  "<br/>";
var_dump($nome);	
echo  "<br/>";
echo  "<br/>";


$site = "www.hcode.com";	//string.
echo($site);
echo  "<br/>";
var_dump($site);
echo  "<br/>";
echo  "<br/>";


$ano = 1990;	//inteiro. Note que se usar "1990" se torna um string.
echo($ano);
echo  "<br/>";
var_dump($ano);
echo  "<br/>";


$salario = 5500.99;	//flutuante. Aqui podemos usar vírgulas.
echo  "<br/>";
var_dump($salario);
echo  "<br/>";

$cpf = 5124518189;	// inteiro.
echo "<br>";
var_dump($cpf);
echo "<br>";



$bloqueado = false;	//booleano. Somente duas opções: verdadeiro ou falso.
echo  "<br/>";
var_dump($bloqueado);
echo  "<br/>";
echo  "<br/>";




/////////////////////////////////////////////////////////////

// Tipos compostos

$frutas = array("maça", "morango", "manga");	/*array. Note que ele usa posições, nesse caso 0, 1 e 2 são as posições. Assemelha a um vetor (álgebra linear). */
echo $frutas[2];
echo  "<br/>";
var_dump($frutas);
echo  "<br/>";


$nascimento = new DateTime();	//objeto. Sempre que new for declarado estamos orientando a um objeto criado.
echo "<br/>";
var_dump($nascimento);
echo  "<br/>";


//////////////////////////////////////////////////////////////

//Tipos especiais


$arquivo = fopen("exemplo-03.php", "r");	//resource
var_dump($arquivo);
echo  "<br/>";


$nulo = null;	//null.  Assemelha-se a um vetor nulo {Ø} (álgebra linear).
echo  "<br/>";
var_dump($nulo);
echo  "<br/>";


$vazio = "";
var_dump($vazio);


?>