<?php

//////////////////// Switch case /////////////////////

$diaDaSemana = date("w");
// Função date é nativa do php.

//$diaDaSemana = 7;

echo $diaDaSemana;
echo "<br>";


// Os dias vão de 0 a 6, de Domingo a Sábado.
// O Switch espera um valor e para cada caso (case) ele terá uma reação.
// Cada switch tem um case e um break, se este não for usado a condição abaixo será acoplada.
// Posso usar o default para outras opções além das escolhidas.


switch ($diaDaSemana) {
	case 0:
		echo "Domingo";
		break;
	
	case 1:
		echo "Segunda-feira";
		
		break;
	
	case 2:
		echo "Terça-feira";
		
		break;
	
	case 3:
		echo "Quarta-feira";
		
		break;

	case 4:
		echo "Quinta-feira";
		
		break;

	case 5:
		echo "Sexta-feira";
		
		break;

	case 6:
		echo "Sábado";
		
	default:
	echo "Data inválida";	
	}
// note que o ultimo não precisa de break!

?>