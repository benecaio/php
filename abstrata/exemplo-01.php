<?php


interface Veiculo {

	public function acelerar($velocidade);

	public function frenar($velocidade);

	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

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

class DelRey extends Automovel {

	public function empurrar(){
	}

}
// Não podemos instanciar uma classe abstrata!
// $carro = new Automovel();


$carro = new DelRey();
$carro->acelerar(150);

?>