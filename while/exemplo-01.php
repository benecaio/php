<?php
///////////////////// WHILE ////////////////////
// Enquanto a condição  for verdadeira o comando seguirá.

$condição = true;

	while ($condição) {
		$numero = rand(0,10);
		// função para número aleatório de qual a qual.

		if($numero === 3){

			echo "Número três! ";
			echo "===========> ";
			$condição = false;
		}

	echo $numero . "<br>";
}
echo "<hr>";

?>