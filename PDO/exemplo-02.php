<?php
$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "Caio2310$");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('Caio', '2310');");


$stmt->execute();

?>