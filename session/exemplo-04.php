<?php

session_id('isckd2o2ussomblnjbq7kri5dp');
// Mesmo numa aba anônima, posso ter acesso a mesma informação, se pré-definida.
// recurso usado antes do session_start();

require_once("config.php");

echo session_id();
echo "<br>";


session_regenerate_id();
// reset do id de sessão do usuário



echo session_id();
echo "<br>";

var_dump($_SESSION);
// Nesse caso ele vai retornar TODAS as variáveis de sessão. Se eu especificar ["var"], virá apenas o selecionado.









?>
