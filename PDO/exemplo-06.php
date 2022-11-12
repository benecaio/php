<?php

//////////// TRANSAÇÕES ///////////

// Usada para alterações no banco de dados, para evitar erros: Todos os parâmetros devem estar confirmados.

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");

$conn->beginTransaction();
//Ínício da transação

$sql = 'DELETE FROM tb_usuarios WHERE idusuario = ?';
$stmt = $conn->prepare($sql);


$id = 18;
$stmt->execute(array($id));

//$conn->rollBack();
// Usar o rollBack pra ele retornar antes desse comando de execute

$conn->commit();
// Confirma o execute.

// OBS.: Não foi possivel rodar 2x o comando. Assim apenas 1 transação foi feita!

echo"O(s) Usuário(s) foi(foram) excluído(s)";

?>