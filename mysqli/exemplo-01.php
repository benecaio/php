<?php
//Classe Mysqli para operar no banco de dados do PHP.

$conn = new mysqli("localhost", "root", "Caio2310$", "dbphp8");
/*				   ("servidor", "usuário", "senha", "banco de dados");
	Um objeto para representar a conexão entre o PHP e um banco de dados Mysql 
*/

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
// O comando prepare vai executar (comando da query em linguagem SQL);

$stmt->bind_param("ss", $login, $pass);
// Os parâmetros são: s-string, b-blob, d-double, i-int;
// Na sequência dos parametros.
// Esse método espera dados referenciados.

$login = "user";
$senha = "12345";

$stmt->execute();
//envia para o banco de dados depois de todos os parâmetros preparados.

printf("Linha inserida: ", $stmt->affected_rows);
echo"<br>";


?>