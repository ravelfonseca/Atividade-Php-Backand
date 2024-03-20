<?php
Questão 10
function decodificarCifraCesar($mensagem, $deslocamento) {
    $mensagem_decodificada = "";
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];
        if (ctype_upper($caractere)) {
            $novo_indice = ord($caractere) - $deslocamento;
            if ($novo_indice < ord('A')) {
                $novo_indice += 26;
            }

            $mensagem_decodificada .= chr($novo_indice);
        } else {
            $mensagem_decodificada .= $caractere;
        }
    }

    return $mensagem_decodificada;
}

$casos_teste = intval(fgets(STDIN));

for ($i = 0; $i < $casos_teste; $i++) {

    $mensagem_codificada = rtrim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));

    $mensagem_decodificada = decodificarCifraCesar($mensagem_codificada, $deslocamento);
    echo $mensagem_decodificada . "\n";
}?>