<?php

$anoNascimento = "1990";
$nome2 = "Caio";
//variável autoexplicável de nome composto com as primeiras letras maiúsculas da palavra.

$nome1 = "João";
/*variável com número no nome.	*/

echo"$nome1";
echo "<br/>";
echo "$anoNascimento";

echo "<br>";
echo "anoNascimento"; // Note que sem o sinal $, ele emite o que está escrito - STRING.

echo "<br/>";


$sobrenome = "Benevides";

$nomeCompleto = $nome2 . " " . $sobrenome;
//Concatenação = juntar as variáveis em justa posição que eu escolher. Note que tem um espaço vazio em " ".




echo "$nomeCompleto";
echo "<br>";




//exit;
// Posso ordenar a máquina para parar de ler antes do programa terminar.




if(isset($nome1)) {
	//essa condição é útil para uma validação básica da variável. Pode ser usada antes de excluir a variável se ela existir.


	unset($nome1);
	// unset é usado pra excluir a variável, tornando-a nula.

	/* echo "$nome1";

	Notice: Undefined variable: nome1 in C:\xampp\htdocs\variaveis\exemplo-02.php on line 48
	*/            }

?>