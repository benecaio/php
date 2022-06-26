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
		//Devemos antes do set definir se o numero é valido
		$resultado = Documento::validarCpf($numero);

		// Vamos emitir um erro (excessão), se $resultado = false:
		if($resultado === false){
			throw new Exception("Cpf informado não é válido", 1);
		}
		else{
			$this->numero = $numero;
		}
	}


	public static function validarCpf($cpf):bool{ // Cast para Boolean
	
		//Verifica se um número foi informado:
		if(empty($cpf)) {
			echo("False 1");
			return false;
		}
		
	     
 		// Elimina possível máscara:
	    $cpf = preg_replace('[^0-9]', '', $cpf);
	 
	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    	
    	//Verifica e o número informado é igual a 11:
	    if (strlen($cpf) != 11) {
	        echo("False 2");
	        return false;
	    }
   
    	/* Verifica se nenhuma das sequiencias inválidas abaixo foi selecionada: Caso afirmativo retorne falso: 
    	*/
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999'){
	        echo("False 3");
	        return false;
     	} 

     	//Calcula os dígitos verificadores para verificar se o CPF é válido:
     	else {   
    	     
        	for ($t = 9; $t < 11; $t++) {
             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            
	            $d = ((10 * $d) % 11) % 10;

	            if ($cpf{$c} != $d) {
	                echo("False 4");
	                return false;
	            }
        	}
 
 			// Retorna true, se o número for um  CPF.
       		 return true;
    	}
	}
}

// Vamos chamar o método estático sem instanciar a classe:
var_dump(Documento::validarCpf("05124518189"));
echo "<br>";
echo "<br>";


// Vamos instanciar a classe para exibir o CPF ou o Erro (Excessão).
$cpf = new Documento();

$cpf->setNumero("0000000000012");
var_dump($cpf->getNumero());
echo "<br>";
echo "<br>";


var_dump($cpf);
echo "<br>";



?>