<?php
require_once 'classes/produto.php';
require_once 'models/produto.php';
require_once 'abstrata/produto.php';

$produto = new \classes\Produto();
$produto-> mostrarDetalhes();


use models\Produto;
$produto2 = new Produto;
$produto2-> mostrarDetalhes();


use abstrata\Produto as produtoAbstrata;
$produto3 = new produtoAbstrata();
$produto3-> mostrarDetalhes();
?>