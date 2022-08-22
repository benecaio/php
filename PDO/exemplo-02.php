<?php
//Inserindo no banco de dados.

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('Caio', '2310');");
$stmt->execute();

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();


$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": "."</strong>".$value."<br/>";
	}
	echo "===============================================<br>";
}



?>