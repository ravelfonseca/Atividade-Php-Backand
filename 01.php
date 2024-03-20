<?php
Questão 1
$primeiro_valor = trim(fgets(STDIN));
$segundo_valor = trim(fgets(STDIN));
$terceiro_valor = trim(fgets(STDIN));

$primeiro_valor = intval($primeiro_valor);
$segundo_valor = intval($segundo_valor);
$terceiro_valor = intval($terceiro_valor);

$maior_entre_dois = ($primeiro_valor + $segundo_valor + abs($primeiro_valor - $segundo_valor)) / 2;
$maior = ($maior_entre_dois + $terceiro_valor + abs($maior_entre_dois - $terceiro_valor)) / 2;

echo "$maior eh o maior\n";?>