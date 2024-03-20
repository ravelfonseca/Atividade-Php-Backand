<?php
 Questão 12
 function mdc($a, $b) {
     while ($b != 0) {
         $temp = $b;
         $b = $a % $b;
         $a = $temp;
     }
     return $a;
 }
 
 $N = intval(fgets(STDIN));
 
 for ($i = 0; $i < $N; $i++) {
 
     list($F1, $F2) = array_map('intval', explode(' ', fgets(STDIN)));
     $max_divisor_comum = mdc($F1, $F2);
     echo $max_divisor_comum . "\n";
 }
 ?>