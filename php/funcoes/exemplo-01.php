<?php

function ola(){
// uma função propriamente dita deve retornar um valor (return), se não ela é uma sub-rotina.

	return "Olá Mundo!<br>";
// note que retornando o valor, eu  tenho liberdade pra fazer o que desejar depois.
}


echo ola();
echo "<br>";


var_dump(ola());	// acento também conta como caractere.
echo "<br>";

$frase = ola();

echo strlen($frase);



?>