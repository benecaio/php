<?php

$nome = "Hcode Treinamentos";

$replace = "Cursos";

echo($nome);
echo "<br>";

echo "Desejo mudar Treinamentos por: $replace.";
echo "<br>";

$nome = str_replace('Treinamentos', $replace, $nome);

echo ($nome);
echo "<br>";
echo "<br>";

$nome = "Hcode Treinamentos";

$newName = substr($nome,0, strpos($nome, 'T')) . $replace;

echo ($newName);




?>