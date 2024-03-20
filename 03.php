<?php
Questão 3
$inicio = trim(fgets(STDIN));
$fim = trim(fgets(STDIN));

$inicio = intval($inicio);
$fim = intval($fim);


for($i = $inicio; $i <= $fim; $i++){

    if ($i % 5 == 2 || $i % 5 == 3){
    echo $i . "\n";
    }
}?>