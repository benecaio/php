<?php
//Classe Mysqli para operar no banco de dados do PHP.

$conn = new mysqli("localhost", "root", "", "dbphp8");
/*				   ("servidor", "usuário", "senha", "banco de dados");
	Um objeto para representar a conexão entre o PHP e um banco de dados Mysql 
*/

if (!$conn) {
	printf("O servidor não teve conexão. Error: %s\n", mysqli_connect_error());
}


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	/* fetch_array(): Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas. No caso está verificando linha por linha (cursor) do banco (MYSQLI_ASSOC) se possui dados.

	Alem de guardar os dados em índices numéricos na matriz do resultado, a função mysqli_fetch_array() pode também guardar os dados em índices associativos
	*/
	var_dump($row);
	array_push($data, $row);
}
echo "<br>";
// no Localhost visualize com Ctrl + U.
// Convertendo para JSON:
echo "Formato JSON: ";
echo "<br>";
echo json_encode($data);

?>