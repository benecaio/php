<?php

//////////// INSERT 1 ///////////

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('Cai0o', '23110');");
// Note que os valores dos parâmetros estão literais! Sem utilizar o bind_Value!
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