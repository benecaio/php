<?php

namespace Cliente;
/* Primeira letra maiúscula para o namespace. Estamos criando um namespace para esse arquivo (tipo uma subpasta, um local privado que eu escolhi) que por padrão tem o nome da PASTA para melhor organização.
*/

class Cadastro extends \Cadastro{
	/*Note que estamos herdando Cadastro que está no diretório raiz!! 
		"\" -> significa isso, pois sem ela ele herdaria desse mesmo diretório.
	*/

	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente " . $this->getNome();
		//Esse getNome() vem da outra classe Cadastro por herança.
	}
}

?>