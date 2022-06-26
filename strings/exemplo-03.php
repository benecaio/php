<?php

//////////////////Funções de String////////////////////////

$empresa = "Fã Food";

$empresa = str_replace("o","0", $empresa);	// String replace, mudar string. Qual string mudar, para qual mudar, em qual variável.

echo ($empresa);
echo "<br>";

$empresa = str_replace("a", "4", $empresa);	// Note que ele não encontrou a, exatamente assim então não fez a mudança
echo ($empresa);
echo "<br>";


$empresa = str_replace ("Fã", "Fast", $empresa);
echo ($empresa);
echo "<br>";
echo "<br>";


$nome = "Dado Dololabela";

$nome = str_replace("da","64",$nome);	// Note que é case sensitive.
echo ($nome);
echo "<br>";
echo "<br>";

$nome = str_replace("do","60",$nome);
echo ($nome);

	?>