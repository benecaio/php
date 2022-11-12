<?php

//////////// INSERT 2 ///////////
$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");


$stmt  = 'INSERT INTO tb_usuarios (deslogin, dessenha) ';
$stmt .= 'VALUES (:login, :senha)';
// A query está com os atributos para atribuir posteriormente!

$login = "Cai0o";
$senha = "123456";
// Atribuindo uma variável pra posteriormente (execute) utilizar o bind_Value (parametros)!


function verificarUsuario($conn, $nome_usuario):bool {
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE deslogin = '".$nome_usuario ."'");
	$stmt->execute();
	$total = $stmt->rowCount();

	if($total >= 1){
		return true;
	} 

	return false;
}


if(verificarUsuario($conn, $login)){
	echo "<div class='alert alert-success'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Já existe esse usuário, por favor use outro!</strong>
		</div>";
} else {
	try {
	$create = $conn->prepare($stmt);
	$create->bindValue(':login', $login, PDO::PARAM_STR);
	$create->bindValue(':senha', $senha, PDO::PARAM_STR);
		if($create->execute()){
			echo "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			<strong>Inserido com sucesso!</strong>
			</div>";
		}
	} catch (PDOException $e) {
			echo "<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			<strong>Erro ao inserir dados!</strong>" . $e->getMessage() . "
			</div>";
	}
}


?>