<?php
///////////// FOREACH 2 ////////////////////////

// <form></form> : Abre e fecha formulários em HTML.

// submit = botão para o usuário mandar os dados.

?>



<form>


	
	<input type ="text" name = "Nome">	
	<input type ="date" name = "Nascimento">
	<input type ="submit" value = "OK">	

</form>


<?php

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {
		//Para cada  variável que o usuário mandou ($_GET) ela vira um $value. Sendo seu índice o $key.


		echo "Nome do campo: "  . $key . "<br>";
		echo "Valor do campo: " . $value;
		echo "<hr>";

	}
}

?>

