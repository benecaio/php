<?php

////////////Atributos e métodos //////////////////

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	// Para cada atributo, vamos colocar 2 métodos: Get(pegar) e Set(definir);

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		// Note que $modelo é um parâmetro, poderia ser outro nome.
	
		$this->modelo = $modelo;
		// Estou dando o comando de pegar o parâmetro ($modelo) e colocar no atributo. 

	}

	public function getMotor():float{	//: float é uma conversão direta no método para float.
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{	//Cast para int.
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}


// Métodos SET não possuem retorno, pois o método apenas muda o atributo. Quando desejar manipular, exibir ou usar o atributo instanciado pelo objeto, aí vamos usar o método GET.

// Algumas IDE's geram os Getters e Setters, pois é padrão.

	public function exibir(){	// método
		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno()
		);
	}

}

$gol = new Carro();

/*	$gol->ano = "1997"; Não podemos acessar o método diretamente, pois é private!		*/

$gol->setModelo("Gol Gti");		
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol);
echo "<br>";
var_dump($gol);
echo "<br>";
echo "<br>";


print_r($gol->exibir());
echo "<br>";

var_dump($gol->exibir());

?>