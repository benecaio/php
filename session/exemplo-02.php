<?php

require_once ("config.php");


echo $_SESSION['nome'];

// A varíavel uma vez criada com o usuário online, não precisa ser chamada ou recriada. Funciona como nas SUPERGLOBAIS.

echo "<br>";


echo $_SESSION['position'];


session_unset();
//remove todas as variáveis de sessão, apenas. Podendo ser apenas a que selecionar:
// session_unset($_SESSION['var']);

session_destroy();
// Limpa as variáveis e remove o usuário


?>