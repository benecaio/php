<?php
////////////Criando uma classe//////////////
class Pessoa {
// Nome de classe Maiúsculo.
	public $nome;
	// Atributo nome. Se estiver fora e um método usar $var.
	// public é o encapsulamento que permite o acesso de fora da classe.


	public function falar() {
	// Método falar.

	return "O meu nome é: ". $this->nome;
	//$this é usado para referenciar (acessar) um atributo ou método DENTRO DE OUTRO MÉTODO.
	}


}

$caio = new Pessoa();
// Numa variável, vamos instanciar a classe criada.

$caio ->nome = "Caio Benevides";
// Acessando o atributo e atribuindo valor nele.


echo $caio->falar();
// exibir na tela (Acessando o método que tem um retorno.)

echo"<br>";

var_dump($caio);
echo"<br>";

$gil = new Pessoa();

$gil ->nome = "Gilvania Benevides";

echo $gil ->falar();
echo"<br>";

var_dump($gil);
echo"<br>";


?>