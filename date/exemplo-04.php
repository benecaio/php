<?php
///////////////Classe DateTime()//////////

// Classe DateTime() nativa do php, que faz a representação de data e hora.

$dt = new DateTime(); //new - instancia um objeto novo, no caso o DateTime, a variavel recebeu o objeto.

echo $dt -> format("d/m/Y H:i:s"); // " -> " significa que estou acessando um método da Classe.
// o método format tem os mesmos parâmetros da função date().
echo "<br>";

/* Clase DateInterval() Representa um intervalo entre datas.

Um intervalo de data armazena, tanto uma quantidade de tempo (em anos, meses, dias, horas, etc), quanto uma string de tempo relativo no formato que o construtor da classe DateTime possui suporte.
*/

$periodo = new DateInterval("P15D"); //intervalo 15 dias no exemplo. Period 15 days

$dt -> add($periodo); // acessando um método add, adiciona uma data. Espera um parâmetro outra classe que aguarda um intervalo de período.

echo $dt -> format("d/m/Y H:i:s");




?>