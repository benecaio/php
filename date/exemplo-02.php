<?php
///////////date() e time() 2//////////////////

$ts = strtotime("2022-06-29"); //  Insira a String to timestamp. 
echo($ts);
echo "<br>";

echo date("l, d/m/Y",$ts);
echo "<br>";
echo "<br>";

// Podemos escrever EXPRESSÕES que o timestamp será gerado:

$ts = strtotime("now"); // 
echo($ts);
echo "<br>";

echo date("l, d/m/Y",$ts);
echo "<br>";
echo "<br>";


$ts = strtotime("+1 day"); //  String to time (timestamp). 
echo($ts);
echo "<br>";

echo date("l, d/m/Y",$ts);
echo "<br>";
echo "<br>";


$ts = strtotime("+1 week"); //  String to time (timestamp). 
echo($ts);
echo "<br>";

echo date("l, d/m/Y", $ts);
echo "<br>";
echo "<br>";



?>