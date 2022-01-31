<?php 

require_once ("config.php");

echo session_save_path();
// Local que os arquivos da sessão estão salvos.

echo "<br>";

var_dump(session_status());
/*	Retorna o valor int (0, 1 ou 2):
	0 = PHP_SESSION_DISABLED;
	1 = PHP_SESSION_NONE;
	2 = PHP_SESSION_ACTIVE.	*/

echo "<br>";


switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "A sessão está desabilitada.";
		
	break;
	
	case PHP_SESSION_NONE:
	echo "A sessão está abilitada, mas não está ativa.";
		
	break;

	case PHP_SESSION_ACTIVE:
	echo "A sessão está abilitada, e está ativa.";
		
	break;			
}




?>