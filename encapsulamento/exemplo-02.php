<?php

class Pessoa {
	
	public $nome = "Caio Benevides";
	protected $idade = "26";
	private $senha = "123456";

	public function verDados() {

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}



class Programador extends Pessoa{
	echo "os dados a seguir são da classe: " . get_class($this). "<br>";
}



$objeto = new Programador();
// Note que o objeto recebe a classe Programador que é extendida (filha) de Pessoa.

echo $objeto->verDados() . "<br>"; 
// Nesse caso, estamos acessando verDados() que está dentro de PESSOA!



class ProgramadorPleno extends Pessoa{

	public function verDados() {

		echo "Os dados a seguir são da classe: " . get_class($this) . "<br>";
		// essa função get_class(objeto), espera um objeto e ela retorna a classe que foi instânciada no objeto.

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		/*echo $this->senha . "<br>";
		Notice: Undefined property: ProgramadorPleno::$senha
		Essa propriedade é PRIVADA, pertencendo apenas a classe Pessoa!
		*/
	}
}

$objeto2 = new ProgramadorPleno();
// Note que o objeto recebe a classe ProgramadorPlenos que é extendida (filha) de Pessoa.

echo $objeto2->verDados(); 
// Nesse caso, estamos acessando verDados() que está dentro de PROGRAMADOR 2!


?>