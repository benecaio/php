<?php

require_once ("config.php");

$cad = new Cadastro();

$cad->setNome("Caio Benevides");
$cad->setEmail("benevides_caio@hotmail.com");
$cad->setSenha("123321");

echo $cad;

?>