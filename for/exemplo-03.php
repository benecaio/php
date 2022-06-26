<?php
/////////////// For-03 //////////////////////

//As palavras reservadas continue e break podem ser usadas no "for".

// continue = ignore, vá para o próximo passo.

// break = interrompe aquele escopo.

// OBS.: Se o FOR não puder ser atingido (condição), o sistema entra em loop. O Apache roda sintaxe, e não analiza sintaticamente.

for ($i = 0; $i <= 1000; $i +=50){

if ($i > 200 && $i < 800) continue;
// if de uma única instrução não precisa de chaves. Pode ser na mesma linha ou na de baixo!

if($i === 900) break;

echo ($i) . "<br>";

}

$i = 222;

echo($i);


?>