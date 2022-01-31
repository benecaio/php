<?php
///////////setLocale//////////////////

/*setlocale — Define informações locais
setlocale(mixed $category, string $locale, string $... = ?): string
setlocale(mixed $category, array $locale): string

*/

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

/*setlocale(category, locale):
Category é uma constante (ou string) especificando a categoria de funções afetadas pela definição local: setting:
LC_ALL para tudo abaixo.

locale = O padrão de linguagem a ser usada, então Linux, UTF-8, Microsoft também é diferente.
*/ 

echo ucwords(strftime("dia da semana: %A/ ano vigente: %B"));

/*strftime(string $format, int $timestamp = ?): string

Formata uma hora/data local pela expressão desejada de acordo com a configuração do idioma. Nome do mês e dia da semana e outras strings respeitam o idioma corrente definido com a função setlocale().

%A	Representação textual completa do dia	Sunday até Saturday
%B	Nome completo do mês, baseado no idioma	Janeiro até Dezembro

*/













?>