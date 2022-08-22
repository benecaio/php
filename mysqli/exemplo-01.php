<?php
/*Classe Mysqli para operar no banco de dados do PHP.
https://www.php.net/manual/pt_BR/class.mysqli-stmt.php
https://www.php.net/manual/pt_BR/mysqli.quickstart.connections.php
*/

$conn = @mysqli_connect("127.0.0.1", "root", "", "dbphp8");
/*				   ("servidor", "usuário", "senha", "banco de dados");
	Um objeto para representar a conexão entre o PHP e um banco de dados Mysql 
*/

if (!$conn) {
	printf("O servidor não teve conexão. Error: %s\n", mysqli_connect_errno());
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
// O comando prepare vai executar (comando da query em linguagem SQL);

$stmt->bind_param("ss", $login, $pass);
// Os parâmetros são: s-string, b-blob, d-double, i-int;
// Na sequência dos parametros.
// Esse método espera dados referenciados.

$login = "user";
$pass = "12345";

$stmt->execute();
//envia para o banco de dados depois de todos os parâmetros preparados.

printf("A linha no banco de dados foi inserida!");
echo"<br>";


?>