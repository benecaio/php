<?php

class CadCli extends CadBase{
	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

?>