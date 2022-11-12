<?php

//////////// DELETE ///////////

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");

$deslogin = 'Cai0o';
$sql = 'DELETE FROM tb_usuarios WHERE deslogin = :deslogin';

$stmt = $conn->prepare($sql);
$stmt->bindValue('deslogin', $deslogin, PDO::PARAM_STR);

$stmt->execute();
echo"O(s) Usuário(s) foi(foram) excluído(s)";

?>