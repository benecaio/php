<?php
////////////////////// Array para JSON//////////////////////////
// JSON significa Java Script Object Notation. Notação usada em todas as linguagens.
// Um formato de comunicação de arquivos, que age como facilitador para interoperabilidade entre sistemas.
// Posso formatar um arquivo em JSON ou decodificar um  arquivo JSON.


$pessoas = array();

array_push($pessoas, array(
		'nome' => 'Caio',
		'idade' => 26
));

array_push($pessoas, array(
		'nome' => 'Gilvania',
		'idade' => 49
));

echo json_encode ($pessoas);
// exibindo o arquivo em formato JSON.
// CTRL + U = a forma que ele deve ser mandado para o decode.


?>