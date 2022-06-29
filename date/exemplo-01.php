<?php
///////////date() e time()//////////////////

/* Função date(): Retorna uma string, de acordo com  o formato.
date(string $format [, int $timestamp ]): string

Segundo argumento padrão é o timestamp (não obrigatório)- tempo em segundos desde 01/Jan/1970 até agora. Ele vem por padrão e pode ser obtido pela função time()

A função date() não é sensível ao setlocale() (configuração regional - idioma e fuso), portanto irá buscar o idioma contido no SERVIDOR! 
*/

/*date_default_timezone_set(string $timezoneId); 
Sets the default timezone used by all date/time functions in a script.
Sem esse estamos usando o fuso que esta no servidor.
*/
date_default_timezone_set('America/Sao_Paulo'); // Usando fuso do Brasil-SP

echo date("d-m-Y"); //(Y) Mostra a data: dia-mês-ano (4 dígitos).
echo "<br>";

echo date("d/m/Y");	//(Y) Mostra a data: dia/mês/ano (4 dígitos).
echo "<br>";

echo date("D/m/Y");	//(D) Mostra a data: Dia da Semana (inglês)/mês/ano (4 dígitos).
echo "<br>";

echo date("d/m/y");	//(y) Mostra a data: dia/mês/ano (2 dígitos).
echo "<br>";

echo date("H:i:s");	//(H:i:s) Mostra a hora : hora/minuto/segundo.
//					   (Hour:mInute:Second)
echo "<br>";

echo date("d/m/y H:i:s");	// Combinação de data e hora.
echo "<br>";

// OBS.: A função date() não é sensível ao setlocale(), usada para configurar regional - idioma e fuso horário;

echo time(); // Esse é o valor do timestamp atual.
echo "<br>";

echo date("d/m/y H:i:s",1636720782);	// Colocando o segundo parâmetro ele exibe a data e horário de acordo com o timestamp.
echo "<br>";

//Trabalhando com timestamp:
$var = time();
var_dump($var);
echo "<br>";
echo(is_int($var));
 

?>