<?php
//////////////////Novidades em funções//////////////////
// Declaração do tipo de retorno

function soma (int ...$valores):string {
	// Após parâmetros () estamos definindo o tipo de RETORNO esperado, ou  seja um CAST.

	return array_sum($valores);	// array_sum() faz a soma dos componentes do array.

}


var_dump(soma(2,2));
echo"<br>";

// Note que o var_dump retornou em STRING como solicitado.
//














?>