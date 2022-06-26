<?php

interface Veiculo {

	public function acelerar($velocidade);

	public function frenar($velocidade);

	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até " . $velocidade . " km/h" . "<br>";
	}
	public function frenar($velocidade){
		echo "O veículo frenou até " . $velocidade . " km/h" . "<br>";
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha de nº " . $marcha . "<br>";
	}


}

$carro = new Civic();
$carro->trocarMarcha(1);
$carro->acelerar(20);
$carro->trocarMarcha(2);
$carro->acelerar(40);
$carro->trocarMarcha(3);
$carro->acelerar(60);
$carro->frenar(30);
$carro->trocarMarcha(2);

?>