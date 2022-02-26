<?php

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "Caio2310$");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Fernando";
$password = "escadaazul";

db2_bind_param($stmt, parameter-number, variable-name)(":LOGIN", $login);
$stmt->bind_param(":PASSWORD", $password);


$stmt->execute();







?>