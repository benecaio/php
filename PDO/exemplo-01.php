<?php

/*PDO (PHP DATA OBJECT): Usaremos o PDO e a aplicação PHP. A forma do PDO conversar com o php é bem transparente, pois podemos mudar o banco sem alterar a aplicação.
Mostrando os itens do banco de dados:
*/
$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root", "");

/*Muitos dos bancos de dados mais maduros suportam o conceito de declarações preparadas. A consulta só precisa ser analisada (ou preparada) uma vez, mas pode ser executada várias vezes com parâmetros iguais ou diferentes.Ao usar uma instrução preparada, o aplicativo evita repetir o ciclo analisar/compilar/otimizar. Isso significa que as instruções preparadas usam menos recursos e, portanto, são executadas mais rapidamente.
*/
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
// Note que o ORDER BY seleciona a ordem desejada, no caso ALFABETICA!

// fetchAll: Busca as linhas restantes de um conjunto de resultados, separando do Array :
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": "."</strong>".$value."<br/>";
	}
	echo "===============================================<br>";
}

?>