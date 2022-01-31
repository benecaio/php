<?php

include "exemplo-01.php";	/* Note que apenas o nome do arquivo foi usado. Este comando só reconhece se o caminho se estiver no mesmo DIRETÓRIO.	*/

/* O include tenta rodar mesmo se o arquivo não existir ou se existir com problema;
Tem mais recursos: include_PATH - permite que o include traga arquivos desse diretório configurado no por padrão no PHP, instalação. include dinâmico (URL) remoto (BRECHA NO SEU SISTEMA - use acesso via API).	*/


$resultado = somar(2,3);

echo ($resultado);
echo "<br>";


///// Caminho dos arquivos (outro diretório)/////////////


include "inc/exemplo-01a.php";	/* A forma de localização do arquivo tem como referência a pasta em que este arquivo (.../include/exemplo-02.php) está lotada.	*/

/* include "../inc/exemplo-01a.php"; A pesquisa iria ser em uma pasta ACIMA (../) para subir um diretório, e depois iria entrar na pasta (inc) e posteriormente no arquivo nomeado (exemplo-01a.php).	*/

/* include "../../inc/exemplo-01b.php"; Subiria 2 diretórios para procurar a pasta inc.	Geralmente é uma falta de organização.	*/


$resultado2 = subtrair (2,3);
echo ($resultado2);

include_once "exemplo-01.php";	/* Se estiver incluso desconsidera essa ação.	*/



?>