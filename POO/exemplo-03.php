<?php

/////////// Métodos Estáticos ///////////////

/*Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a classe. Um membro declarados como estático não pode ser acessado com um objeto instanciado da classe (embora métodos estáticos podem).
*/


class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		
		$this->numero = $numero;
	}
}

$cpf = new Documento();

$cpf->setNumero("56482191134");
var_dump($cpf);
echo "<br>";

var_dump($cpf->getNumero());
echo "<br>";




?>