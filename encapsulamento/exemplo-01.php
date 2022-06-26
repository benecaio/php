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

$objeto = new Pessoa();

// Acessando um atributo public: É acessado fora da classe.
echo $objeto->nome . "<br>";

/* Acessando um atributo protected: Não é possivel fora da classe, mas classes filhas herdam essas propriedades.
echo $objeto->idade . "<br>";
*/


/* Acessando um atributo private: Não é possivel fora da classe e nem classes filhas podem herdar propriedades.
echo $objeto->senha . "<br>";
*/

echo $objeto->verDados(); 
// Note que esse método está na classe e tem acesso aos atributos. Sendo ele public, podemos chamá-lo fora da classe.





?>