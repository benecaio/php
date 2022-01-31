<?php
////////////////////// Array 2D//////////////////////////

$pessoas = array();

// Funções de Array:
// o array_push adiciona informações no array já criado!
array_push($pessoas, array(
		'nome' => 'Caio',
		'idade' => 26
));

// Note que => é o sinal para atribuição do campo. O que vier antes é qual o campo o que vier depois é o valor atribuido.

array_push($pessoas, array(
		'nome' => 'Gilvania',
		'idade' => 49
));

// Note que a cada array_push estou incluindo uma dimensão separadamente.

print_r($pessoas);
// exibe cada dimensão a partir do 0.

echo "<br>";
print_r($pessoas [0]['nome']);	


?>