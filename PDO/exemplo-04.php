<?php

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");


$deslogin = $_GET['nome'];
$sql = 'SELECT * FROM tb_usuarios WHERE deslogin = :deslogin';

$stmt = $conn->prepare($sql);

$stmt->bindValue('deslogin', $deslogin, PDO::PARAM_STR) ;

$stmt->execute();


while ($result = $stmt->fetch(PDO::FETCH_OBJ)){
	echo $result->deslogin;
	echo "<br>";
};

$login = "Jean Paul";
$password = "2356";
$ID = 7;


$sql2 = 'UPDATE tb_usuarios SET deslogin = ?, dessenha = ? WHERE idusuario = ?';
// As vírgulas são usadas após os PARAMETROS!

$dados = array($login, $password, $ID);

$update = $conn->prepare($sql2);
$update->execute($dados);






?>