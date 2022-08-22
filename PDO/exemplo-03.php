<?php

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");




//db2_bind_param($stmt, parameter-number, variable-name)(":LOGIN", $login);

/*
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)
 VALUES (:LOGIN, :PASSWORD)");
$stmt->bind_param(":LOGIN", $login);
$stmt->bind_param(":PASSWORD", $password);
*/


$stmt  = 'INSERT INTO tb_usuarios (deslogin, dessenha) ';
$stmt .= 'VALUES (:login, :senha)';

$login = "CAIO 2";
$password = "escadaazul";



function verificarUsuario($conect, $nome_usuario):bool {
	$stmt = $conect->prepare("
		SELECT * FROM tb_usuarios
		WHERE deslogin = '".$nome_usuario ."'");
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
	$create = $conn->prepare($sql);
	$create->bindValue(':login', $login, PDO::PARAM_STR);
	$create->bindValue(':senha', $password, PDO::PARAM_STR);
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


/*

try {
	$create = $conn->prepare($sql);
	$create->bindValue(':login', $login, PDO::PARAM_STR);
	$create->bindValue(':senha', $password, PDO::PARAM_STR);
	
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


*/


?>