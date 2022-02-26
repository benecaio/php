<?php
//Classe Mysqli para operar no banco de dados do PHP.

$conn = new mysqli("localhost", "root", "Caio2310$", "dbphp8");
/*				   ("servidor", "usuário", "senha", "banco de dados");
	Um objeto para representar a conexão entre o PHP e um banco de dados Mysql 
*/

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios; ORDER BY deslogin");

while($row = $result->fetch_array(MYSQLI_ASSOC)){
	var_dump($row);
}
?>