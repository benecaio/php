<?php

//// Métodos Mágicos////

/*Os nomes de função __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone() e __debugInfo() são mágicos nas classes do PHP. Não deve-se ter funções com esses nomes em nenhuma de suas classes a não ser que queira a funcionalidade mágica associada a eles.

Nota: Todos os métodos mágicos DEVEM ser declarados como public
*/

class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b, $c){
		// método que é chamado no momento que o objeto é instanciado.
		$this->logradouro = $a;

		$this->numero = $b;

		$this->cidade = $c;

	}

	public function __destruct(){
		// método que é o último a ser chamado antes de liberar a memória.
		var_dump("O arquivo foi destruído!");
	}

	public function __toString(){
		// método que serializa, coloca em string um objeto.
		return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
	}

}


$endereco = new Endereco("2ª avenida Norte", "416", "Samambaia");

var_dump($endereco);
echo "<br>";
echo "<br>";

echo ($endereco); // o echo foi dado por causa do objeto ter um metodo magico para transformar em string, forçando o echo ele entendeu que era pra  emitir a parte em string.
echo "<br>";
echo "<br>";

unset($endereco);



?>