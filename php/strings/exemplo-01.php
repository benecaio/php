<?php

////// Diferença entre áspas duplas e áspas simples em strings. ///////////////////////////////

$name = "Caio";	//Áspas duplas no valor atribuído à variável.

$surname = 'Benevides';	// Áspas simples no valor atribuído à variável.

var_dump($name);	// O var_dump exibiu o valor da variável. 
echo "<br>";

var_dump($surname);	// O var_dump exibiu o valor da variável.
echo "<br>";

var_dump($name, $surname);	// Posso exibir no var_dump mais de uma variável!
echo "<br>";

echo "Meu nome é $name.";	// Note que o retorno foi O VALOR atribuído a variável.
echo "<br>";				/* Interpolação de variável. Recurso único do PHP, que antes de exibir a palavra verifica no código se alguma variável foi atribuída com esse nome específico. Use quando quiser chamar a variável dentro do texto sem precisar concatenar.*/
// A maioria das linguagens usa "" para string.

echo '$surname é a variável que estou usando para sobrenomes!';	// Note que o retorno foi O NOME da variável.
																// Tudo será interpretado como texto!



?>