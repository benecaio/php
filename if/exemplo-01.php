<?php
/////////// IF //////////////

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeMelhor = 65;

$qualIdade = 26;

/* a palavra reservada if (se) deve ser executada se a condição, dentro dos parentesis ocorrer, o programa deve executar os comandos em sequência descritos das chaves.	*/


if ($qualIdade < $idadeCrianca){
echo "Você é uma criança.";
}
/* a palavra reservada else if () remete a mais de uma condição. */

else if ($qualIdade < $idadeAdulto){
echo "Você é um adolescente.";
}


else if($qualIdade < $idadeMelhor){
echo "Você é um adulto.";

}

/* a palavra reservada else (se não) retrata o programa para efetuar um comando mesmo sem ter atingido as condições acima. */

else{
echo "Você está na melhor idade.";

};

echo "<br>";

echo ($qualIdade < $idadeAdulto)? "Você é menor de idade." : "Você é maior de idade."; /* ?(então), :(se não). Funcionam como operadores.		*/



?>