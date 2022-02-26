<?php

require_once ("config.php");

$cad = new CadCli();

$cad->setNome("Caio Benevides");
$cad->setEmail("benevides_caio@hotmail.com");
$cad->setSenha("123321");

echo $cad;

$cad->registrarVenda();


?>