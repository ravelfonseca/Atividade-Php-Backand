<?php
Questão 11
function ordenarValores($valores) {
    $pares = array();
    $impares = array();
    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }

    sort($pares);

    rsort($impares);

    $ordenados = array_merge($pares, $impares);

    return $ordenados;
}

$N = intval(fgets(STDIN));

$valores = array();
for ($i = 0; $i < $N; $i++) {
    $valor = intval(fgets(STDIN));
    $valores[] = $valor;
}

$valores_ordenados = ordenarValores($valores);

foreach ($valores_ordenados as $valor) {
    echo $valor . "\n";
}

?>