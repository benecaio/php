<?php

////////////// WHILE 2 ///////////////

$total = 215;
$desconto = 0.9;

	do {

		echo "Seu valor: " . $total . "<br>";
		$total *= $desconto;

	} while ($total >100) ;

	echo "Seu valor com desconto = " . $total . "<br>";
	echo "<hr>";

?>