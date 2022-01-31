<?php
//////////////// Função Recursiva///////////////

//Nesse código, vamos aplicar alguns recursos de Html, e aprofundar alguns de Php.

/* Nessa variável $hierarquia temos um array, com as posições definidas por outros arrays, o aglomerado está da seguinte forma: Hierarquia CEO	

	$hierarquia = array(Diretor Comercial, Diretor Financeiro);

	Diretor Comercial = array (Gerente de Vendas);
	Diretor Financeiro = array (Gerente de Contas a Pagar, Supervisor de Pagamentos);
	
	Sendo que todos as ramificações possuem 2 informações principais:
	'nome_cargos' e 'subordinados'.

*/
$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//início: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					// início: Gerente de Vendas
					array('nome_cargo' => 'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				)
				
			),
			//Término: Diretor Comercial
			//início: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//início: Gerente de Contas a Pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//início: Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Término: Supervisor de Pagamentos
						)
						
					)
					
				),
				//Término: Gerente de Contas a Pagar
				//início: Gerente de compras
				array(
					'nome_cargo' => 'Gerente de compras',
					'subordinados' => array(
						//início: Supervisor de Suprimentos
						array(
							'nome_cargo' => 'Supervisor de Suprimentos'
						)
						//Término: Supervisor de Suprimentos
					)

				)
				//Término: Gerente de Compras	

			)
			//Término: Diretor Financeiro
		)
	)
	//Término: CEO

);
//Término: $hierarquia


function exibe($cargos){


	$html = '<ul>';
	// tag de abertura: <unordered list>
	foreach ($cargos as $cargo) {
	// $cargos é o parâmetro ($key).	

		$html .= "<li>";
		$html .=  $cargo['nome_cargo'];	//Para acessar a $key = $cargo usamos ['inf do array'].
		
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
		// No caso estamos verificando se a chave 'subordinados' existe e se seu tamanhõ é maior que 0

		/*funções: 	isset(var) verifica se existe a variável
					count(var) conta quantos caracteres tem numa chave de array*/

			// Parte recursiva da função: 	
			$html .= exibe($cargo['subordinados']);
			// note que agora vou concatenar com a função exibe passando variavel cargo com a chave 'subordinados' que também é uma lista de cargos como $hierarquia, enquanto existir subordinados.
		}

		$html .= '</li>';
	}


	$html .= '</ul>';
	return $html;
	//Retorna para a tela html.



}
echo exibe($hierarquia);
echo "<br>";


?>