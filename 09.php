<?php
 Questão 9
 function calcularLeds($numero) {
     $leds = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);
 
     $total_leds = 0;
     $numero_str = strval($numero);
 
     for ($i = 0; $i < strlen($numero_str); $i++) {
         $digito = intval($numero_str[$i]);
         $total_leds += $leds[$digito];
     }
     return $total_leds;
 }
 $casos_teste = intval(fgets(STDIN));
 
 for ($i = 0; $i < $casos_teste; $i++) {
     $numero = intval(fgets(STDIN));
     $quant_leds = calcularLeds($numero); 
     echo $quant_leds . " leds\n";
 }?>