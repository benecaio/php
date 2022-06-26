<?php
//////////////////De JSON para array//////////////////
// CTRL + U = mostra a forma exata de notação que devo usar no decode.

$json = '[{"nome":"Caio","idade":26},{"nome":"Gilvania","idade":49}]';
// Onde está essa variável estática ($json) poderia ser um arquivo chamado remotamente, por exemplo via AJAX.

$data = json_decode ($json, true);		// Transforma um JSON em array. O parâmetro TRUE serve para não se tornar um objeto!


print_r($data);
echo "<br>";
var_dump($data);
echo "<br>";
echo "<br>";




echo $json;
echo "<br>";
var_dump($json);












?>