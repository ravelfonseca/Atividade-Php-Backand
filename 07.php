<?php
Questão 7
  function readLineParts() {
      return explode(" ", rtrim(fgets(STDIN)));
  }

  while (true) {
      $input = readLineParts();
      list($H1, $M1, $H2, $M2) = $input;
      if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
          break;
      }
      $atual_minutos = $H1 * 60 + $M1;
      $alarme_minutos = $H2 * 60 + $M2;
      $diferenca_minutos = $alarme_minutos - $atual_minutos;

      if ($diferenca_minutos < 0) {
          $diferenca_minutos += 24 * 60;
      }
      echo $diferenca_minutos . "\n";?>
  }