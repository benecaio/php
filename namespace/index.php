<?php

require_once ("config.php");

use classe\Cliente\Cadastro as cad;
$cad = new cad();

$cad->setNome("Caio Benevides");
$cad->setEmail("benevides_caio@hotmail.com");
$cad->setSenha("123321");

echo $cad;



?>