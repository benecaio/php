<?php

////////////// WHILE 2 ///////////////

echo "Compras no Site Fã Food em SAMAMBAIA:";
echo "<br>";
echo "Na compra de um Macarrão Bombado com uma lata de refrigerante você acumula 5% de desconto para a próxima compra. Podendo obter até 3 acúmulos de desconto em um mês.<br>Promoção válida nas compras feitas por meio do PIX.";
echo "<br>";
echo "O valor de desconto acumulado zera a cada mês!";
echo "<br>";
echo "<br>";

$total = 21.5;
$desconto = 0.95;

	do {
		echo "Venda registrada: <br>";
		echo "Valor a pagar: " . $total . "<br>";
		$total *= $desconto;
		echo "<br>";

	} while ($total >= 18.433625) ;

	echo "Seu combo tem 3 acúmulos! Até o fim do mês o seu combo custará R$: " . $total . "<br>";
	echo "<hr>";

?>