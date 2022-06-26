<?php

/////////Função Anônima 1//////////////////////

function test($callback){
/* o parâmetro callback é usado em processos lentos, em que não se sabe exatamente quando vai encerrar, exemplo: A função executou a chamada do procedimento, mas o processo irá demorar um tempo. Renderização, upload, etc... Para não haver um time out, antes do resultado chegar ao fim o callback espera o retorno.
*/

// O callback dentro de uma função vai funcionar como uma função (anônima).
$callback ();
}
// Note que a função anônima NÃO TEM RETURN.



test (function(){
// Estamos chamando a função passando a prórpria função anônima.
	echo "Terminou !";

});

?>