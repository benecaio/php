<?php
//Mostrando os itens do banco de dados

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "Caio2310$");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
// Note que o ORDER BY seleciona a ordem desejada, no caso ALFABETICA!


$stmt->execute();

$resforeach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": "."</strong>".$value."<br/>";
	}
	echo "===============================================<br>";
}ults = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": "."</strong>".$value."<br/>";
	}
	echo "===============================================<br>";
}




?>