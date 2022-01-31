<?php

require_once ("config.php");

use Cliente\Cadastro;
// Vamos aqui utilizar o namespace criado. Vamos mostrar qual é a classe que eu vou instanciar o objeto!

$cad = new Cadastro();

// Note que o método __toString() vai agir pois não podemos dar um echo de um objeto.
$cad->setNome("Caio Benevides");
$cad->setEmail("benevides_caio@hotmail.com");
$cad->setSenha("123cb456");


echo ($cad);
echo "<br>";

$cad ->registrarVenda();




?>