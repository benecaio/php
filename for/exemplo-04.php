<?php

echo "<select>";
//html caixa de início do select

for($i=date("Y"); $i >= date("Y")-100;$i--){
// date("Y") = Ano em  4 dígitos; date("y") = ano em 2 dígitos;


echo '<option value"'.$i.'">'.$i.'</option>';
// html opção de escolha. Primeiro o valor que o select alimenta e depois o de exibição 


if($i === 1995) 
	break;

}

echo "</select>";
//html caixa de fechamento do select

?>