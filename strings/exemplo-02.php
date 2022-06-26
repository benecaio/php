	<?php
	
///////////////////////////////	Funções usadas em variáveis Strings/////////////////////////

$nome = "Caio Benevides";

echo strtoupper($nome);	/*Lê -se: str(string) to upper(upper case). Essa função espera uma variável do tipo String para passar todas as letras para maiúsculas*/
echo "<br>";


/* Em azul são funções,cada uma pelo seu nome de correspondência;
	Os parentesis significam que estou chamando a função;
	Dentro dos parentesis estou passando os argumentos, ou seja as variáveis. */


echo "$nome";	// Note que não foi atribuido ao nome.
echo "<br>";

$nome = strtoupper($nome);	// Aqui foi atribuída a variável.
echo "$nome";
echo "<br>";

echo strtolower($nome);	//	Para passar todas as letras para minusculas.
echo"<br>";
echo "<br>";

$nome = "caio benevides";

echo ucfirst($nome);
echo "<br>";

echo ucwords($nome);



?>